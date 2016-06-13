<?php

class Indicateur5 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;
    protected $student;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Nombre de connexions par semaine
        $data[1]['titre'] = 'Connexions';
        $data[1]['max'] = 30;
        $data[1]['type'] = 'multipleLine';
        $data[1]['indicateur1']['titre'] = 'Nombre de Connexions';
        $data[1]['indicateur1']['desc'] = '(Evolution) <br/>Nombre de connexions par semaine pour l\'étudiant.';
        $data[1]['indicateur1']['fonction'] = 'getConnectionPerStudentAndCourse';

        //Devoirs rendus par semaine
        $data[2]['titre'] = 'Devoirs rendus';
        $data[2]['max'] = 5;
        $data[2]['type'] = 'multipleLine';
        $data[2]['indicateur1']['titre'] = 'Nombre de devoirs rendus';
        $data[2]['indicateur1']['desc'] = '(Evolution) <br/>Nombre de devoirs rendus par semaine pour l\'étudiant.';
        $data[2]['indicateur1']['fonction'] = 'getWorkPerStudentAndCourse';

        $this->idCours = $idCours;
        $this->annee = $this->getAnneeCourante();
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

    /**
     * @param $idCours
     * @param $nameStudent
     *
     * Retourne le nombre moyen de connexion pour l'étudiant $nameStudent et le cours $idCours
     * ainsi que la moyenne des connexions par semaine des autres étudiants
     */
    public function getConnectionPerStudentAndCourse()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy, date FROM (
                            SELECT count(log.id) AS c, mdl_user.id as userid, CONCAT(lastname,' ',firstname) as prenom,WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                            FROM mdl_user
                            LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                            LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                            LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                            LEFT JOIN mdl_logstore_standard_log log ON log.userid = mdl_user.id
                            AND log.courseid = mdl_course.id
                            WHERE mdl_course.id = ".$this->idCours."
                            AND CONCAT(lastname,'_',firstname) = '".$this->student."'
                            AND log.component = 'core'
                            AND log.action = 'viewed'
                            group by date, userid)cnt
                            group by date, userid  ORDER BY prenom ASC
                      ";

        $results = Indicateur::executeMultipleRequete($statement);

        //On récupère une deuxième courbe qui est la moyenne des étudiants du cours
        $autres = $this->getGraphConnexionStudent($this->idCours);

        $tabEtudiant = array();
        $tabCohorte = array();
        foreach($results as $r)
            $tabEtudiant[$r['date']] = round($r['moy']);

        foreach($autres as $r)
            $tabCohorte[$r['date']] = round($r['moy']);

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $tabEtudiant))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $tabEtudiant[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }

            if(array_key_exists($date, $tabCohorte))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $datesExistantesAutres[$dateobj->format('d/m')] = $tabCohorte[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $datesExistantesAutres[$dateobj->format('d/m')] = 0;
            }
        }

        $data = array();
        $data['Connexions de l\'étudiant'] = $dataAutre;
        $data['Connexions de la cohorte'] = $datesExistantesAutres;

        //Important pour récupérer les numéros de semaine dans un ordre chronologique avec ce nom spécifique
        $data['categoriesAxis'] = array_keys($dataAutre);

        return $data;
    }

    /**
     * @param $idCours
     * @return array
     *
     * Retourne le graphe avec la moyenne des connexions étudiantes au cours par semaine
     */
    protected function getGraphConnexionStudent($idCours)
    {
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(timecreated)) as date
                          FROM mdl_logstore_standard_log
                          WHERE courseid = ".$idCours."
                          AND component = 'core'
                          AND action = 'viewed'
                          AND userid NOT IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher'))
                          group by date, userid)cnt
                          group by date
                      ";
        $results = Indicateur::executeMultipleRequete($statement);

        return $results;
    }

    /**
     * @param $idCours
     * @return array
     *
     * Retourne le graphe avec la moyenne des connexions étudiantes au cours par semaine
     */
    protected function getGraphWorkshopStudent($idCours)
    {
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(mdl_assign_submission.timecreated)) as date
                          FROM mdl_assign_submission
                          LEFT JOIN mdl_assign ON mdl_assign_submission.assignment = mdl_assign.id
                          WHERE course = ".$idCours."
                          group by date, userid)cnt
                          group by date
                          having date > 35
                      ";
        $results = Indicateur::executeMultipleRequete($statement);

        return $results;
    }

    /**
     * @param $idCours
     * @param $nameStudent
     *
     * Retourne le nombre de devoirs rendus pour l'étudiant $nameStudent et le cours $idCours
     * ainsi que la moyenne des devoirs rendus par semaine des autres étudiants
     */
    public function getWorkPerStudentAndCourse()
    {
        $allDates = Indicateur::getDateActif($this->idCours);
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy, date FROM (
                            SELECT count(*) AS c, mdl_user.id as userid, CONCAT(lastname,' ',firstname) as prenom,WEEKOFYEAR(FROM_UNIXTIME( mdl_assign_submission.timecreated )) as date,mdl_assign.id AS id
                            FROM mdl_user
                            LEFT JOIN mdl_assign_submission ON mdl_assign_submission.userid = userid
                            LEFT JOIN mdl_assign ON mdl_assign_submission.assignment = mdl_assign.id
                            WHERE course = ".$this->idCours."
                            AND CONCAT(lastname,'_',firstname) = '".$this->student."'
                            group by date, userid)cnt
                            group by date, userid ORDER BY prenom ASC
                      ";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabEtudiant = array();
        $tabCohorte = array();
        foreach($results as $r)
            $tabEtudiant[$r['date']] = intval($r['moy']);

        //On récupère une deuxième courbe qui est la moyenne des étudiants du cours
        $autres = $this->getGraphWorkshopStudent($this->idCours);
        foreach($autres as $a)
            $tabCohorte[$a['date']] = intval($a['moy']);

        foreach($allDates as $date => $value)
        {
            if(array_key_exists($date, $tabEtudiant))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = $tabEtudiant[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $dataAutre[$dateobj->format('d/m')] = 0;
            }

            if(array_key_exists($date, $tabCohorte))
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $datesExistantesAutres[$dateobj->format('d/m')] = $tabCohorte[$date];
            }
            else
            {
                $dateobj = new DateTime();
                $dateobj->setISODate($this->annee, $date);
                $datesExistantesAutres[$dateobj->format('d/m')] = 0;
            }
        }

        $data = array();
        $data['Connexions de l\'étudiant'] = $dataAutre;
        $data['Connexions de la cohorte'] = $datesExistantesAutres;

        //Important pour récupérer les numéros de semaine dans un ordre chronologique avec ce nom spécifique
        $data['categoriesAxis'] = array_keys($dataAutre);

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

    public function getStudent()
    {
        return $this->student;
    }

    public function setStudent($id)
    {
        $this->student = $id;
    }
}
?>