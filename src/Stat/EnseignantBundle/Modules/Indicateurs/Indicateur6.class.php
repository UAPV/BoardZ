<?php

class Indicateur6 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;
    protected $student;

    function mesIndicateurs($idCours)
    {
        $data = array();

        //Premier indicateur
        $data[1]['type'] = 'column';
        $data[1]['titre'] = '';
        //Récupère le nombre total de ressources pour un cours
        $data[1]['indicateur1']['titre'] = 'Ressources';
        $data[1]['indicateur1']['desc'] = 'Les Ressources';
        $data[1]['indicateur1']['requete'] = "SELECT COUNT(R.id)+(SELECT COUNT( U.id ) FROM mdl_url U WHERE U.course LIKE '%".$idCours."' AND U.display !=6 ) AS moy FROM mdl_resource R WHERE R.course LIKE '%".$idCours."' AND R.display !=6;";
        //Récupère le nombre total de ressources structurées (étiquette, glossaire) pour un cours
        $data[1]['indicateur2']['titre'] = 'Ressources structurees';
        $data[1]['indicateur2']['desc'] = 'Les Ressources structurees';
        $data[1]['indicateur2']['requete'] = "SELECT COUNT(G.id)+(SELECT COUNT(L.id) FROM mdl_label L WHERE L.course LIKE '%".$idCours."' ) AS moy FROM mdl_glossary G WHERE G.course LIKE '%".$idCours."'";
        //Récupère le nombre total de rendus (devoir, test, atelier) pour un cours
        $data[1]['indicateur3']['titre'] = 'Rendus (au moins un)';
        $data[1]['indicateur3']['desc'] = 'Les rendus';
        $data[1]['indicateur3']['requete'] = "SELECT COUNT(DISTINCT A.id)+(SELECT count(L.id) FROM mdl_lesson L WHERE L.course = $idCours)+(SELECT count(W.id) FROM mdl_workshop W WHERE W.course = $idCours) + (SELECT count(B.id) FROM mdl_assign B WHERE B.course = $idCours) AS moy FROM mdl_assignment A INNER JOIN mdl_assignment_submissions S ON A.id = S.assignment WHERE A.course = $idCours AND S.numfiles > 0";
        //Récupère le nombre total de discussions dans les forums pour un cours
        $data[1]['indicateur4']['titre'] = 'Sujets dans les forums';
        $data[1]['indicateur4']['desc'] = 'Les sujets dans les forums';
        $data[1]['indicateur4']['requete'] = "SELECT count(D.id) AS moy FROM mdl_forum_discussions D WHERE D.course LIKE '%".$idCours."'";
        //Récupère le nombre d'inscrits pour un cours
        $data[1]['indicateur5']['titre'] = 'Inscriptions';
        $data[1]['indicateur5']['desc'] = 'Les inscriptions';
        $data[1]['indicateur5']['requete'] = "SELECT count(C.id) AS moy FROM mdl_course C INNER JOIN mdl_enrol E ON E.courseid = C.id INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id INNER JOIN mdl_user U ON U.id = UE.userid WHERE C.id LIKE '%".$idCours."' AND E.roleid = 5";

        $this->idCours = $idCours;
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

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