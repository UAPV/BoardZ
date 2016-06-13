<?php
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\Container;

/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 19/03/14
 * Time: 15:42
 */

abstract class Indicateur {

    private static $em;

    public abstract function mesIndicateurs($idCours);

    // On récupère l'année du premier log
    static public function getAnneeCourante()
    {
        $query = "SELECT FROM_UNIXTIME( timecreated, '%Y' ) AS annee
                  FROM mdl_logstore_standard_log
                  ORDER BY timecreated
                  LIMIT 1";

        $val = Indicateur::executeRequete($query);

        return $val['annee'];
    }

    static public function setEntityManager(ObjectManager $em)
    {
        self::$em = $em;
    }

    static function executeRequete($req)
    {
        $connection = self::$em->getConnection('moodle');
        $statement = $connection->prepare($req);
        $statement->execute();
        $results = $statement->fetchAll();

        return $results[0];
    }

    static function executeMultipleRequete($req)
    {
        $connection = self::$em->getConnection('moodle');
        $statement = $connection->prepare($req);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    static function getRepoCours($id)
    {
        return self::$em->getRepository('StatEnseignantBundle:MdlCourse')->find($id);
    }

    static function getNbEtudiantsSI($id)
    {
       /* Retourne le nombre d'étudiant dans le SI
          return $nbEtudiantSI = ''; */
    }

    static function getComposantes()
    {
        /* Retourne le tableau des composantes dans le SI
           Sous la forme $data[$compo['composante']] = $compo['liblong'] */
    }

    static function getFilieres($composante)
    {
        /* Retourne le tableau des filières dans le SI
           Sous la forme $data[$filiere['filiere']] = $filiere['libelle'] */
    }

    static function getDiplomes($filiere)
    {
        /* Retourne le tableau des diplomes dans le SI
           Sous la forme $data[$diplome['diplome']] = $diplome['type'].'-'.$diplome['libelle'] */
    }

    static function getMatieres($diplome)
    {
        /* Retourne le tableau des matières dans le SI
           Sous la forme $data['code'] = $matiere['libelle']] */
    }

    static function getInfosUE($code)
    {
        /* Retourne le tableau des des UE dans le SI
           Sous la forme array('nom' => $results[0]['libelle'], 'ects' => $results[0]['cred'], 'volh' =>  $results[0]['volh']) */
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne le nombre d'étudiants inscrits dans le cours
     */
    public function getNbStudent($course)
    {
        //Nombre d'étudiants inscrits sur Moodle dans ce cours
        $query = "SELECT count(C.id) as total FROM mdl_course C
             INNER JOIN mdl_enrol E ON E.courseid = C.id
             INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
             INNER JOIN mdl_user U ON U.id = UE.userid
             WHERE C.id = $course AND E.roleid = 5
        ";
        $nbEtudiant = Indicateur::executeRequete($query);

        return $nbEtudiant['total'];
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne la totalité des étudiants (nom prenom) inscrits dans le cours
     */
    public function getAllStudent($course)
    {
        $query = "SELECT CONCAT(lastname,' ',firstname) as prenom FROM mdl_course C
             INNER JOIN mdl_enrol E ON E.courseid = C.id
             INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
             INNER JOIN mdl_user U ON U.id = UE.userid
             WHERE C.id = $course AND E.roleid = 5
             ORDER BY prenom
        ";
        $nbEtudiant = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($nbEtudiant as $etudiant)
            $data[] = $etudiant['prenom'];

        return $data;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne la totalité des resssources du cours
     */
    public function getAllResource($course)
    {
        $query = "SELECT name
             FROM mdl_resource
             WHERE course = $course
             ORDER BY name
        ";
        $nbRessources = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($nbRessources as $ressource)
            $data[] = $ressource['name'];

        return $data;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne la totalité des rendus du cours
     */
    public function getAllRendu($course)
    {
        $statement = "SELECT itemname as name
                        FROM mdl_grade_items
                        WHERE courseid = ".$course."
                        AND itemtype='mod'
                        AND gradetype= 1";
        $nbRendus = Indicateur::executeMultipleRequete($statement);
        $data = array();
        foreach($nbRendus as $rendu)
            $data[] = $rendu['name'];

        return $data;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne un tableau vide avec les dates du cours
     */
    public function getDateActif($course)
    {
        //On récupère la première date
        $dates = $this->getFirstAndLastConnect($course);
        $debut = $dates['debut'];
        $fin = $dates['fin'];

        if($debut == null && $fin == null)
        {
            $debut = 0;
            $fin = 52;
        }

        //Si on est sur une année entière
        if($fin > $debut)
        {
            for ($i = $debut; $i < $fin; $i++)
                    $data[$i] = 0;
        }
        else
        {
            for ($i = $debut; $i < 53; $i++)
                    $data[$i] = 0;

            for ($i = 1; $i < $fin; $i++)
                    $data[$i] = 0;
        }

        return $data;
    }

    public function getFirstAndLastConnect($course)
    {
        $query = "SELECT WEEKOFYEAR(FROM_UNIXTIME(MIN(timecreated))) as debut, WEEKOFYEAR(FROM_UNIXTIME(MAX(timecreated))) as fin
                    FROM mdl_logstore_standard_log
                    WHERE courseid = ".$course."
                    AND component = 'core'
                    AND action = 'viewed'
                    AND userid NOT IN (
                        SELECT rass.userid
                        FROM mdl_role_assignments rass
                        INNER JOIN mdl_context cont on rass.contextid = cont.id
                        INNER JOIN mdl_course course on cont.instanceid = course.id
                        INNER JOIN mdl_role role on rass.roleid = role.id
                        WHERE role.shortname in ('editingteacher','teacher')
                    )
                    ";

        $results = Indicateur::executeRequete($query);

        return $results;
    }
} 