<?php

class Indicateur8 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Affiche les graphes ressources
        $data[1]['titre'] = 'Nombre de rendus par ressource';
        $data[1]['max'] = 50;
        $data[1]['type'] = 'line';
        $data[1]['indicateur1']['titre'] = 'Nombre de rendus par devoir';
        $data[1]['indicateur1']['desc'] = 'Nombre de rendus par devoir';
        $data[1]['indicateur1']['fonction']['Nombre d\'étudiants différents l\'ayant rendu'] = 'getNbStudentPerSubmit';
        $data[1]['indicateur1']['fonction']['Nombre de rendu total'] = 'getNbTotalPerSubmit';

        $this->idCours = $idCours;
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

    /**
     * @return array
     * Retourne le nombre total de rendus (jugés notables)
     */
    public function getNbTotalPerSubmit()
    {
        $allRendus = Indicateur::getAllRendu($this->idCours);
        $statement = "SELECT itemmodule, itemname, iteminstance
                        FROM mdl_grade_items
                        WHERE courseid = ".$this->idCours."
                        AND itemtype='mod'
                        AND gradetype= 1";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabRendus = array();
        foreach($results as $devoir)
        {
            $status = null;
            //Pour chacun des devoirs, on regarde le nombre de rendus
            switch($devoir['itemmodule'])
            {
                case 'assign':
                    $table = 'mdl_assign_submission';
                    $status = "submitted";
                    $column = "assignment";
                    $statusColumn = "status";
                    break;
                case 'assignment':
                    $table = 'mdl_assignment_submissions';
                    $column = "assignment";
                    break;
                case 'data':
                    $table = 'mdl_data_records';
                    $column = "dataid";
                    break;
                case 'forum':
                    $table = 'mdl_assign_submission';
                    $column = "assignment";
                    break;
                case 'glossary':
                    $table = 'mdl_assign_submission';
                    $column = "assignment";
                    break;
                case 'lesson':
                    $table = 'mdl_lesson_answers';
                    $column = "lessonid";
                    break;
                case 'quiz':
                    $table = 'mdl_quiz_attempts';
                    $column = "quiz";
                    $status = "finished";
                    $statusColumn = "state";
                    break;
                case 'workshop':
                    $table = 'mdl_workshop_submissions';
                    $column = "workshopid";
                    break;
            }

            if($status == null)
                $query = "SELECT COUNT(*) as c FROM ".$table." WHERE ".$column." = '".$devoir['iteminstance']."'";
            else
                $query = "SELECT COUNT(*) as c FROM ".$table." WHERE ".$statusColumn." ='".$status."' AND ".$column." = ".$devoir['iteminstance'];

            $results = Indicateur::executeRequete($query);
            $tabRendus[$devoir['itemname']] = intval($results['c']);
        }

        foreach($allRendus as $rendu)
        {
            if(array_key_exists($rendu, $tabRendus))
                $dataAutre[$rendu] = $tabRendus[$rendu];
            else
                $dataAutre[$rendu] = 0;
        }

        return $dataAutre;
    }

    /**
     * @param $idCours
     *
     * Retourne le nombre d'étudiant différent ayant rendu le devoir
     */
    public function getNbStudentPerSubmit()
    {
        $allRendus = Indicateur::getAllRendu($this->idCours);
        $statement = "SELECT itemmodule, itemname, iteminstance
                        FROM mdl_grade_items
                        WHERE courseid = ".$this->idCours."
                        AND itemtype='mod'
                        AND gradetype= 1";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabRendus = array();
        foreach($results as $devoir)
        {
            $status = null;
            //Pour chacun des devoirs, on regarde le nombre de rendus
            switch($devoir['itemmodule'])
            {
                case 'assign':
                    $table = 'mdl_assign_submission';
                    $status = "submitted";
                    $column = "assignment";
                    $statusColumn = "status";
                    break;
                case 'assignment':
                    $table = 'mdl_assignment_submissions';
                    $column = "assignment";
                    break;
                case 'data':
                    $table = 'mdl_data_records';
                    $column = "dataid";
                    break;
                case 'forum':
                    $table = 'mdl_assign_submission';
                    $column = "assignment";
                    break;
                case 'glossary':
                    $table = 'mdl_assign_submission';
                    $column = "assignment";
                    break;
                case 'lesson':
                    $table = 'mdl_lesson_answers';
                    $column = "lessonid";
                    break;
                case 'quiz':
                    $table = 'mdl_quiz_attempts';
                    $column = "quiz";
                    $status = "finished";
                    $statusColumn = "state";
                    break;
                case 'workshop':
                    $table = 'mdl_workshop_submissions';
                    $column = "workshopid";
                    break;
            }

            if($status == null)
                $query = "SELECT COUNT(cnt.c) as c FROM (SELECT COUNT(*) as c, userid FROM ".$table." WHERE ".$column." = '".$devoir['iteminstance']."' GROUP BY userid)cnt";
            else
                $query = "SELECT COUNT(cnt.c) as c FROM (SELECT COUNT(*) as c, userid FROM ".$table." WHERE ".$statusColumn." ='".$status."' AND ".$column." = ".$devoir['iteminstance']." GROUP BY userid)cnt";

            $results = Indicateur::executeRequete($query);
            $tabRendus[$devoir['itemname']] = intval($results['c']);
        }

        foreach($allRendus as $rendu)
        {
            if(array_key_exists($rendu, $tabRendus))
                $dataAutre[$rendu] = $tabRendus[$rendu];
            else
                $dataAutre[$rendu] = 0;
        }

        return $dataAutre;
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