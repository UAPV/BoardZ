<?php

class Indicateur4 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Affiche les graphes étudiants
        $data[1]['titre'] = 'Connexions';
        $data[1]['max'] = 50;
        $data[1]['type'] = 'line';
        $data[1]['indicateur1']['titre'] = 'Moyenne des connexions des étudiants au cours, par semaine.';
        $data[1]['indicateur1']['desc'] = '(Moyenne) <br/>Moyenne des connexions des étudiants au cours, par semaine.';
        $data[1]['indicateur1']['fonction']['Connexions au cours (/10)'] = 'getConnexionPerStudent';
        $data[1]['indicateur1']['fonction']['Nombre de rendus'] = 'getNbRenduPerStudent';


        //On définit une alerte
        $data['alerte'][1]['message'] = "Attention, certains étudiants n'ont pas rendu leurs devoirs";
        $data['alerte'][1]['couleur'] = array('green' => false, 'orange' => true, 'red' => true);
        $data['alerte'][1]['fonction'] = "getAlerteRendus";
        $data['alerte'][2]['message'] = "Attention, connexions en baisse !";
        $data['alerte'][2]['couleur'] = array('green' => false, 'orange' => true, 'red' => true);
        $data['alerte'][2]['fonction'] = "getAlerteConnexions";

        $this->idCours = $idCours;
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

    /**
     * @return array
     * Retourne le nombre de rendu par étudiant
     */
    public function getNbRenduPerStudent()
    {
        $allStudent = Indicateur::getAllStudent($this->idCours);
        $action = 'submitted';
        $statement = "SELECT COUNT(*) as nb, mdl_logstore_standard_log.userid, CONCAT(lastname,' ',firstname) as prenom
                  FROM mdl_user
                  LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                  LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                  LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                  LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                  AND mdl_logstore_standard_log.courseid = mdl_course.id
                  WHERE mdl_course.id = ".$this->idCours."
                  AND roleid in (5)
                  AND mdl_logstore_standard_log.component NOT IN ('core', 'mod_forum')
                  AND action = '".$action."'
                  GROUP BY mdl_logstore_standard_log.userid
                  ORDER BY prenom ASC";

        $results = Indicateur::executeMultipleRequete($statement);

        $tabEtudiants = array();
        foreach($results as $etudiant)
            $tabEtudiants[$etudiant['prenom']] = intval($etudiant['nb']);

        foreach($allStudent as $student)
        {
            if(array_key_exists($student, $tabEtudiants))
                $dataAutre[$student] = $tabEtudiants[$student];
            else
                $dataAutre[$student] = 0;
        }

        return $dataAutre;
    }

    /**
     * @param $idCours
     *
     * Retourne le nombre de connexions par étudiant, divisé par 10
     */
    public function getConnexionPerStudent()
    {
        $allStudent = Indicateur::getAllStudent($this->idCours);
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy, userid, prenom FROM (
                            SELECT count(mdl_logstore_standard_log.id) AS c, mdl_user.id as userid, CONCAT(lastname,' ',firstname) as prenom
                            FROM mdl_user
                            LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                            LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                            LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                            LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.userid = mdl_user.id
                            AND mdl_logstore_standard_log.courseid = mdl_course.id
                            WHERE mdl_course.id = ".$this->idCours."
                            AND roleid in (5)
                            GROUP BY weekofyear( mdl_logstore_standard_log.timecreated ) , userid
                            )cnt GROUP BY userid ORDER BY prenom ASC";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabEtudiants = array();
        foreach($results as $etudiant)
            $tabEtudiants[$etudiant['prenom']] = round($etudiant['moy'] / 10);

        foreach($allStudent as $student)
        {
            if(array_key_exists($student, $tabEtudiants))
                $dataAutre[$student] = $tabEtudiants[$student];
            else
                $dataAutre[$student] = 0;
        }

        return $dataAutre;
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