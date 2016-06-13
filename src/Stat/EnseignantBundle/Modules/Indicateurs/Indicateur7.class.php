<?php

class Indicateur7 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Affiche les graphes ressources
        $data[1]['titre'] = 'Nombre de consultations par ressource';
        $data[1]['max'] = 50;
        $data[1]['type'] = 'line';
        $data[1]['indicateur1']['titre'] = 'Nombre de consultations par ressource';
        $data[1]['indicateur1']['desc'] = 'Nombre de consultations par ressource';
        $data[1]['indicateur1']['fonction']['Nombre d\'étudiants différents l\'ayant consulté'] = 'getNbStudentPerResource';
        $data[1]['indicateur1']['fonction']['Nombre de consultations total'] = 'getNbTotalPerResource';

        $this->idCours = $idCours;
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

    /**
     * @return array
     * Retourne le nombre total de consultation étudiante par ressource
     */
    public function getNbTotalPerResource()
    {
        $allResources = Indicateur::getAllResource($this->idCours);
        $action = 'viewed';
        $statement = "SELECT count(distinct(mdl_logstore_standard_log.id)) AS c, mdl_resource.name
                            FROM mdl_user
                            LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                            LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                            LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                            LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.courseid=mdl_course.id AND mdl_logstore_standard_log.userid=mdl_user.id
                            LEFT JOIN mdl_resource ON mdl_resource.id = mdl_logstore_standard_log.objectid
                            WHERE mdl_course.id = ".$this->idCours."
                            AND action = '".$action."'
                            AND objecttable = 'resource'
                            AND roleid IN (5)
                            GROUP BY objectid
                            ";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabRessources = array();
        foreach($results as $ressource)
            $tabRessources[$ressource['name']] = intval($ressource['c']);

        foreach($allResources as $ress)
        {
            if(array_key_exists($ress, $tabRessources))
                $dataAutre[$ress] = $tabRessources[$ress];
            else
                $dataAutre[$ress] = 0;
        }

        return $dataAutre;
    }

    /**
     * @param $idCours
     *
     * Retourne le nombre d'étudiant différent ayant consulté une ressource, affichage par ressource
     */
    public function getNbStudentPerResource()
    {
        $allResources = Indicateur::getAllResource($this->idCours);
        $action = 'viewed';
        $statement = "SELECT count(cnt.c) as c, nom FROM (
                        SELECT count(distinct(mdl_logstore_standard_log.id)) AS c, mdl_resource.name as nom, objectid
                            FROM mdl_user
                            LEFT JOIN mdl_role_assignments ON mdl_user.id = mdl_role_assignments.userid
                            LEFT JOIN mdl_context ON mdl_role_assignments.contextid = mdl_context.id
                            LEFT JOIN mdl_course ON mdl_context.instanceid = mdl_course.id
                            LEFT JOIN mdl_logstore_standard_log ON mdl_logstore_standard_log.courseid=mdl_course.id AND mdl_logstore_standard_log.userid=mdl_user.id
                            LEFT JOIN mdl_resource ON mdl_resource.id = mdl_logstore_standard_log.objectid
                            WHERE mdl_course.id = ".$this->idCours."
                            AND action = '".$action."'
                            AND objecttable = 'resource'
                            AND roleid IN (5)
                             GROUP BY objectid, mdl_logstore_standard_log.userid
                            )cnt GROUP BY objectid  ORDER BY nom ASC";
        $results = Indicateur::executeMultipleRequete($statement);

        $tabRessources = array();
        foreach($results as $ressource)
            $tabRessources[$ressource['nom']] = intval($ressource['c']);

        foreach($allResources as $ress)
        {
            if(array_key_exists($ress, $tabRessources))
                $dataAutre[$ress] = $tabRessources[$ress];
            else
                $dataAutre[$ress] = 0;
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