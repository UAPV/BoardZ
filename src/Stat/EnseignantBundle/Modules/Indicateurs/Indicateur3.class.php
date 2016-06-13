<?php

class Indicateur3 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Courbes d'activités étudiantes par semaine
        $data[0]['titre'] = 'Courbes d\'activités étudiantes par semaine';
        $data[0]['type'] = 'multipleLine';
        $data[0]['axe'] = 'Taux';
        $data[0]['max'] = 100;
        $data[0]['indicateur1']['titre'] = 'Courbes d\'activités étudiantes par semaine';
        $data[0]['indicateur1']['desc'] = 'Courbes d\'activités étudiantes par semaine';
        $data[0]['indicateur1']['fonction'] = 'getActiviteEtd';

        //Courbes d'activités enseignantes par semaine
        $data[1]['titre'] = 'Courbes d\'activités enseignantes par semaine';
        $data[1]['type'] = 'multipleLine';
        $data[1]['axe'] = 'Taux / Nombre';
        $data[1]['max'] = 10;
        $data[1]['indicateur1']['titre'] = 'Courbes d\'activités enseignantes par semaine';
        $data[1]['indicateur1']['desc'] = 'Courbes d\'activités enseignantes par semaine';
        $data[1]['indicateur1']['fonction'] = 'getActiviteEnseignant';

        //On définit une alerte
        $data['alerte'][1]['message'] = "Attention, certains étudiants n'ont pas rendu leurs devoirs";
        $data['alerte'][1]['couleur'] = array('green' => false, 'orange' => true, 'red' => true);
        $data['alerte'][1]['fonction'] = "getAlerteRendus";
        $data['alerte'][2]['message'] = "Attention, connexions en baisse !";
        $data['alerte'][2]['couleur'] = array('green' => false, 'orange' => true, 'red' => true);
        $data['alerte'][2]['fonction'] = "getAlerteConnexions";

        $this->idCours = $idCours;
        $this->annee = $this->getAnneeCourante();
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */


    public function getActiviteEtd()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        foreach($allDates as $date => $value)
        {
            $dateobj = new DateTime();
            $dateobj->setISODate($this->annee, $date);
            $dataAutre[$dateobj->format('d/m')] = 0;
        }

        return array('Taux de connexions des étudiants par semaine' => $this->getTauxMoyenConnexion(),
                     'Taux de d\'étudiant ayant posté un message' => $this->getTauxMessage(),
                     'Taux d\'étudiants ayant participé à une activité' => $this->getTauxActivite(),
                     'Taux d\'étudiants avec au moins un rendu noté' => $this->getTauxRendu(),
                     'categoriesAxis' => array_keys($dataAutre)
        );
    }

    public function getActiviteEnseignant()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        foreach($allDates as $date => $value)
        {
            $dateobj = new DateTime();
            $dateobj->setISODate($this->annee, $date);
            $dataAutre[$dateobj->format('d/m')] = 0;
        }

        return array('Taux de connexions des étudiants' => $this->getTauxMoyenConnexion(10),
            'Nombre de connexions des enseignants' => $this->getNbConnexionEns(),
            'Nombre de messages des enseignants' => $this->getNbMessageEns(),
            'categoriesAxis' => array_keys($dataAutre)
        );
    }

    /**
     * Retourne le pourcentage d'étudiants s'étant connectant au moins une fois dans la semaine, par semaine
     */
    public function getTauxMoyenConnexion($max = null)
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT COUNT(cnt.c) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'viewed'
                          AND userid NOT IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher'))
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nbConnexion = Indicateur::executeMultipleRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;

        $data = array();
        foreach($nbConnexion as $c)
        {
            if($max == null)
                $data[$c['date']] = round(($c['moy'] / $nbInscrit) * 100, 0);
            else
                $data[$c['date']] = round(($c['moy'] / $nbInscrit) * (100/$max), 0);
        }

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * Retourne le pourcentage d'étudiants ayant postés au moins un message, par semaine
     * submit forum post
     */
    public function getTauxMessage()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT COUNT(cnt.c) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'created'
                          AND objecttable = 'forum_posts'
                          AND component = 'mod_forum'
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nb = Indicateur::executeMultipleRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;

        $data = array();
        foreach($nb as $c)
            $data[$c['date']] = round(($c['moy']/$nbInscrit) * 100, 0);

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * Retourne le pourcentage d'étudiants ayant fait un moins un rendu noté, par semaine
     * submit sauf forum
     */
    public function getTauxRendu()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT COUNT(cnt.c) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'submitted'
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nb = Indicateur::executeMultipleRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;

        $data = array();
        foreach($nb as $c)
            $data[$c['date']] = round(($c['moy']/$nbInscrit) * 100, 0);

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * Retourne le taux moyen d'étudiants ayant participé à une activité
     * tous les views des logs (sauf view course et core)
     */
    public function getTauxActivite()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT COUNT(cnt.c) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date, userid, count(objecttable)
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'viewed'
                          AND target != 'course'
                          AND component != 'core'
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nb = Indicateur::executeMultipleRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;

        $data = array();
        foreach($nb as $c)
            $data[$c['date']] = round(($c['moy']/$nbInscrit) * 100, 0);

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * Retourne le nombre de connexion de l'enseignant, par semaine
     */
    public function getNbConnexionEns()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT SUM(cnt.c) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'viewed'
                          AND component = 'core'
                          AND objecttable = 'course'
                          AND userid IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher'))
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nbConnexion = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($nbConnexion as $c)
            $data[$c['date']] = (int)$c['moy'];

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * Nombre de messages postés par les enseignants
     */
    public function getNbMessageEns()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $query = "SELECT SUM(cnt.c) as moy,date FROM (
                          SELECT COUNT(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$this->idCours."
                          AND action = 'created'
                          AND objecttable = 'forum_posts'
                          AND userid IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher'))
                          GROUP BY date, userid)cnt
                          GROUP BY date";

        $nb = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($nb as $c)
            $data[$c['date']] = (int)$c['moy'];

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $data))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $data[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }
        }

        return $dataAutre;
    }

    /**
     * @param $course
     * @return float|int
     * @throws
     *
     * Retourne le nombre d'étudiants inscrit dans le cours
     * par rapport au nombre d'étudiants inscrits pédagogiquement
     */
    public function getPercentageStudent()
    {
        //Nombre d'étudiants inscrits sur Moodle dans ce cours
        $query = "SELECT count(C.id) as total FROM mdl_course C
             INNER JOIN mdl_enrol E ON E.courseid = C.id
             INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
             INNER JOIN mdl_user U ON U.id = UE.userid
             WHERE C.id = $this->idCours
        ";
        $nbEtudiant = Indicateur::executeRequete($query);

        //Nombre d'étudiants inscrits pédagogiquement à ce cours dans le SI
        $cours = Indicateur::getRepoCours($this->idCours);

        if($cours === null)
            throw new NotFoundHttpException('Le cours [id='.$this->idCours.'] n\'existe pas.');

        $nbEtudiantSI = Indicateur::getNbEtudiantsSI($cours->getIdNumber());

        //On retourne le pourcentage
        if($nbEtudiantSI['count'] == 0)
            return 0;
        else
            return ($nbEtudiant ["total"]/$nbEtudiantSI["count"])*100;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne le nombre de ressources cachées par rapport
     * au nombre de ressources dans le cours
     */
    public  function getPercentageHiddenResource($course)
    {
        $query = "SELECT count(R.id) FROM mdl_resource R
            INNER JOIN mdl_url U ON R.course = U.course
            WHERE R.course = $course
        ";
        $nbRessources = Indicateur::executeRequete($query);

        $query = "SELECT count(R.id) FROM mdl_resource R
            INNER JOIN mdl_url U ON R.course = U.course
            WHERE R.course = $course
        ";
        $nbHiddenRessources = Indicateur::executeRequete($query);

        if($nbRessources['total'] == 0)
            return 0;
        else
            return ($nbHiddenRessources['total']/$nbRessources['total'])*100;
    }

    /**
     * Devoirs et tests non rendus
     *
     * Référence = nombre maximum de rendus par au moins 2 étudiants
     * Renvoie OBLIGATOIREMENT un tableau avec étudiant
     * Vert : nbre de rendus de l’étudiant = référence
     * Orange : nbre de rendus de l’étudiant = référence -1
     * Rouge : nbre de rendus de l’étudiant < référence * 0.7
     */
    public function getAlerteRendus()
    {
        $allStudent = Indicateur::getAllStudent($this->idCours);
        $statement = "SELECT COUNT(tmp.c) as max FROM(
                        SELECT count(cnt.nb) AS c, contextid FROM (
                          SELECT count(*) AS nb, contextid, userid FROM mdl_logstore_standard_log
                          WHERE courseid = ".$this->idCours."
                          AND component NOT IN ('core', 'mod_forum')
                          AND action= 'submitted'
                          GROUP BY contextid, userid)cnt
                        group by contextid having count(cnt.nb) > 1)tmp
                    ";
        $results = Indicateur::executeRequete($statement);
        $reference = $results['max'];

        $query = "SELECT COUNT(*) as nb, mdl_logstore_standard_log.userid, CONCAT(lastname,' ',firstname) as prenom
                  FROM mdl_user
                  LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                  LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                  LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                  LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                  AND mdl_logstore_standard_log.courseid = mdl_course.id
                  WHERE mdl_course.id = ".$this->idCours."
                  AND roleid in (5)
                  AND mdl_logstore_standard_log.component NOT IN ('core', 'mod_forum')
                  AND action= 'submitted'
                  GROUP BY mdl_logstore_standard_log.userid
                  ORDER BY prenom ASC";

        $resultsEdt = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($resultsEdt as $etudiant)
        {
            if($etudiant['nb'] < ($reference - 1))
                $val = 'red';
            else if($etudiant['nb'] == $reference - 1)
                $val = 'orange';
            else if(intval($etudiant['nb']) >= $reference)
                $val = "green";

            if(in_array($etudiant['prenom'], $allStudent))
                $data[$etudiant['prenom']] = $val;
            else
                $data[$etudiant['prenom']] = "red";
        }


        return $data;
    }

    /**
     * Connexions au cours
     *
     * Référence = nombre de moyen de connexions sur les étudiants s'étant connectés les 20 derniers jours
     * Renvoie OBLIGATOIREMENT un tableau avec étudiant
     * Vert : nbre de rendus de l’étudiant = référence
     * Orange : nbre de rendus de l’étudiant = référence -1
     * Rouge : nbre de rendus de l’étudiant < référence * 0.7
     */
    public function getAlerteConnexions()
    {
        $allStudent = Indicateur::getAllStudent($this->idCours);
        $statement = "SELECT ROUND(AVG(cnt.c), 0) as moy FROM (
                          SELECT DISTINCT mdl_user.id as userid, count(*) as c
                             FROM mdl_user
                             LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                             LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                             LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                             LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                             AND mdl_logstore_standard_log.courseid = mdl_course.id
                             WHERE mdl_course.id = ".$this->idCours."
                             AND mdl_logstore_standard_log.courseid = ".$this->idCours."
                             AND roleid in (5)
                             AND mdl_user.id IN
                                (SELECT DISTINCT mdl_user.id as userid
                                    FROM mdl_user
                                    LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                                    LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                                    LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                                    LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                                    AND mdl_logstore_standard_log.courseid = mdl_course.id
                                    WHERE mdl_course.id = ".$this->idCours."
                                    AND mdl_logstore_standard_log.courseid = ".$this->idCours."
                                    AND roleid in (5)
                                    AND DATEDIFF( CURDATE(), FROM_UNIXTIME(mdl_logstore_standard_log.timecreated)) < 21
                                )
                             GROUP BY userid)cnt
                         ";

        $results = Indicateur::executeRequete($statement);
        $reference = $results['moy'];

        $query = "SELECT count(mdl_logstore_standard_log.id) AS nb, mdl_user.id as userid, CONCAT(lastname,' ',firstname) as prenom
                            FROM mdl_user
                            LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                            LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                            LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                            LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                            AND mdl_logstore_standard_log.courseid = mdl_course.id
                            WHERE mdl_course.id = ".$this->idCours."
                            AND mdl_logstore_standard_log.courseid = ".$this->idCours."
                            AND roleid in (5)
                            GROUP BY userid
                            ORDER BY prenom ASC";

        $resultsEdt = Indicateur::executeMultipleRequete($query);

        $data = array();
        foreach($resultsEdt as $etudiant)
        {
            foreach($resultsEdt as $etudiant)
            {
                if($etudiant['nb'] > $reference * 0.7)
                    $val = 'green';
                else if($etudiant['nb'] > $reference * 0.5)
                    $val = 'orange';
                else if($etudiant['nb'] < $reference * 0.5 )
                    $val = "red";

                if(in_array($etudiant['prenom'], $allStudent))
                    $data[$etudiant['prenom']] = $val;
                else
                    $data[$etudiant['prenom']] = "red";
            }
        }

        return $data;
    }

    /**
     * Teste pour tous les étudiants du cours.
     * Si un est totalement décrocheur, on renvoit 2
     * Si un est décrocheur, on renvoit 1
     * Sinon on renvoit 0
     *
     * Renvoie OBLIGATOIREMENT un la valeur 0,1 ou 2
     */
    public function getAlerte()
    {
        return 1;
    }

    /** NE PAS TOUCHER */
    public function getIdCours()
    {
        return $this->idCours;
    }

    public function setIdCours($id)
    {
        $this->idCours = $id;
    }
}
?>