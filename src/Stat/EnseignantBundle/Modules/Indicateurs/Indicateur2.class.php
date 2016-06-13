<?php

class Indicateur2 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        // Répartition des ressources statiques
        $data[0]['type'] = 'pie';
        $data[0]['max'] = 50;
        $data[0]['titre'] = 'Répartition des ressources statiques';
        $data[0]['indicateur1']['titre'] = 'Répartition des ressources statiques';
        $data[0]['indicateur1']['desc'] = 'Répartition des ressources statiques';
        $data[0]['indicateur1']['fonction'] = "getPercentageResource";

        // Répartition des devoirs / QCM / ateliers rendus
        $data[1]['type'] = 'stackedbar';
        $data[1]['max'] = 50;
        $data[1]['titre'] = 'Répartition des devoirs / QCM / ateliers rendus';
        $data[1]['indicateur1']['titre'] = 'Répartition des devoirs / QCM / ateliers rendus';
        $data[1]['indicateur1']['desc'] = 'Répartition des devoirs / QCM / ateliers rendus';
        $data[1]['indicateur1']['fonction'] = "getTauxRepartition";

        // Taux de propagation des messages du forum
        $data[2]['type'] = 'stackedbar';
        $data[2]['max'] = 50;
        $data[2]['titre'] = 'Taux de propagation des messages forum';
        $data[2]['indicateur1']['titre'] = 'Taux de propagation des messages forum';
        $data[2]['indicateur1']['desc'] = 'Taux de propagation des messages forum';
        $data[2]['indicateur1']['fonction'] = "getTauxForum";

        //Récupère la moyenne des connexions étudiantes au cours par semaine
        /*$data[1]['titre'] = 'Connexions moyennes';
        $data[1]['max'] = 50;
        $data[1]['type'] = 'line';
        $data[1]['indicateur1']['titre'] = 'Connexion moyenne';
        $data[1]['indicateur1']['desc'] = '(Moyenne) <br/>Moyenne des connexions des étudiants au cours, par semaine.';
        $data[1]['indicateur1']['requete'] = "SELECT ROUND(AVG(cnt.c),0) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          WHERE courseid = ".$idCours."
                          group by date, userid)cnt
                          group by date";

        //Récupère le nombre de connexion moyen par ressource
        $data[2]['titre'] = 'Connexions moyennes par ressource';
        $data[2]['max'] = 50;
        $data[2]['type'] = 'column';
        $data[2]['indicateur1']['titre'] = 'Moyenne des connexions aux ressources';
        $data[2]['indicateur1']['desc'] = '(Moyenne) <br/>Moyenne des connexions des étudiants à une ressource, par semaine.';
        $data[2]['indicateur1']['fonction'] = "getRessourcePerWeek";

        //Récupère l'utilisation du forum
        $data[3]['titre'] = 'Utilisation forum';
        $data[3]['max'] = 50;
        $data[3]['type'] = 'column';
        $data[3]['indicateur1']['titre'] = 'Utilisation du forum';
        $data[3]['indicateur1']['desc'] = '2- (Moyenne) Pourcentage d\'étudiants ayant posté au moins 2 messages.<br/>3- (Moyenne) Pourcentage du nombre de fils de discussion ayant plus de 2 réponses.';
        $data[3]['indicateur1']['fonction']['pourcentage_participation'] = "getNbStudentForum";
        $data[3]['indicateur1']['fonction']['min_deux_messages'] = "getAvgPost";
        $data[3]['indicateur1']['requete']['nb_fils'] = "SELECT count(D.id) as moy FROM mdl_forum_discussions D WHERE D.course = ".$idCours;

        //Récupère le nombre de devoirs rendus par semaine et par devoir.
        $data[4]['titre'] = '(Evolution) <br/>Nombre de devoirs rendus par semaine et par devoir.';
        $data[4]['max'] = 50;
        $data[4]['type'] = 'line';
        $data[4]['indicateur1']['titre'] = 'Moyenne des devoirs';
        $data[4]['indicateur1']['desc'] = '(Moyenne) <br/>Moyenne des connexions des étudiants à une ressource, par semaine.';
        $data[4]['indicateur1']['requete'] = "SELECT cnt.c as moy, id, date FROM (
                            SELECT COUNT( * ) AS c, mdl_assignment.id AS id, WEEKOFYEAR( FROM_UNIXTIME( mdl_assignment_submissions.timecreated ) ) AS DATE
                            FROM  mdl_assignment_submissions
                            INNER JOIN mdl_assignment ON mdl_assignment_submissions.assignment = mdl_assignment.id
                            WHERE course = ".$idCours."
                            GROUP BY mdl_assignment.id)cnt
                            GROUP BY DATE";

        //Récupère le nombre de connexion moyen par ressource
        $data[5]['titre'] = 'Ressources cachées';
        $data[5]['max'] = 100;
        $data[5]['type'] = 'bar';
        $data[5]['indicateur1']['titre'] = 'connexion_moyenne_ressource';
        $data[5]['indicateur1']['desc'] = '(Pourcentage) <br/>Nombre de ressources cachées dans le cours par rapport au nombre de ressources disponibles.';
        $data[5]['indicateur1']['fonction'] = "getPercentageHiddenResource";*/

        $this->idCours = $idCours;
        return $data;
    }


    /** FONCTIONS PERSONNALISEES */

    public function getTauxRepartition()
    {
        return array('Ateliers' => $this->getTauxRepartitionAteliers(), 'Devoirs' => $this->getTauxRepartitionDevoir(), 'Qcm' => $this->getTauxRepartitionQcm());
    }

    public function getTauxForum()
    {
        return array('Nombre total de fils de discussion dans les forums' => $this->getTauxNbFilDiscussion(), 'Nombre total de messages dans les forums' => $this->getTauxNbMessage());
    }

    public function getPercentageResource()
    {
        return array_merge($this->getNbFiles(), $this->getNbLabel(), $this->getNbUrl());
    }

    /**
     * On compte le nombre de fichier (images, pdf, vidéo) présents dans le cours
     */
    public function getNbFiles()
    {
        $query = "SELECT *
                    FROM `mdl_files`
                    INNER JOIN mdl_context cont ON mdl_files.contextid = cont.id
                    INNER JOIN mdl_course course ON cont.instanceid = course.id
                    WHERE course.id =".$this->idCours."
                    AND component = 'course'";

        $nbFichiers = Indicateur::executeMultipleRequete($query);
        $nbImage = 0;
        $nbVideo = 0;
        $nbAudio = 0;
        $nbTexte = 0;
        foreach($nbFichiers as $fichier)
        {
            switch ($fichier['mimetype']) {
                case (preg_match('/^image\/*/', $fichier['mimetype'])) :
                    $nbImage++;
                    break;
                case (preg_match('/^audio\/*/', $fichier['mimetype'])) :
                    $nbAudio++;
                    break;
                case (preg_match('/^video\/*/', $fichier['mimetype'])) :
                    $nbVideo++;
                    break;
                case (preg_match('/^text\/*/', $fichier['mimetype']) || (preg_match('/^application\/*/', $fichier['mimetype']))) :
                    $nbTexte++;
                    break;
            }
        }

        return array("Fichiers audio" => $nbAudio, 'Images' => $nbImage, "Fichiers texte" => $nbTexte, "Vidéos" => $nbVideo);
    }

    /**
     * Retourne le nombre de liens dans un cours
     */
    public function getNbUrl()
    {
        $query = "SELECT count(*) as nbUrl
                    FROM `mdl_url`
                    WHERE course =".$this->idCours;

        $nbLiens = Indicateur::executeRequete($query);

        return array("Liens" => $nbLiens['nbUrl']);
    }

    /**
     * Retourne le nombre d'étiquettes dans un cours
     */
    public function getNbLabel()
    {
        $query = "SELECT count(*) as nbLabel
                    FROM `mdl_label`
                    WHERE course =".$this->idCours;

        $nbLabel = Indicateur::executeRequete($query);

        return array("Etiquettes" => $nbLabel['nbLabel']);
    }

    /**
     * @return array
     * Retourne le nombre de devoirs rendus et le nombre de devoirs attendus
     */
    public function getTauxRepartitionDevoir()
    {
        //On compte le nombre total de devoirs attendus (ie au moins un rendu sur ce devoir)
        $query = "SELECT COUNT(cnt.c) as nbAttendus FROM (SELECT mdl_assign.id as c,COUNT(mdl_assign_submission.assignment)
                    FROM mdl_assign
                    INNER JOIN mdl_assign_submission ON mdl_assign.id =mdl_assign_submission.assignment
                    WHERE course = $this->idCours
                    GROUP BY mdl_assign.id
                    HAVING COUNT(mdl_assign_submission.assignment) > 0)cnt";

        //On compte le nombre total de devoirs rendus
        $query2 = "SELECT COUNT(*) as c
                    FROM mdl_assign
                    INNER JOIN mdl_assign_submission ON mdl_assign.id =mdl_assign_submission.assignment
                    WHERE course = $this->idCours";

        $nbTotalDevoirs = Indicateur::executeRequete($query);
        $nbTotalDevoirsRendus = Indicateur::executeRequete($query2);

        $nbTotalDevoirs = $nbTotalDevoirs['nbAttendus'] * Indicateur::getNbStudent($this->idCours);
        $nbTotalDevoirsRendus = $nbTotalDevoirsRendus['c'];

        return array('Nombre total rendus' => $nbTotalDevoirsRendus, 'Nombre total attendus' => $nbTotalDevoirs);
    }

    /**
     * @return array
     * Retourne le nombre de qcm rendus et le nombre de qcm attendus
     */
    public function getTauxRepartitionQcm()
    {
        //On compte le nombre total de devoirs attendus (ie au moins un rendu sur ce devoir)
        $query = "SELECT COUNT(cnt.c) as nbAttendus FROM (SELECT mdl_quiz.id as c,COUNT(mdl_quiz_attempts.quiz)
                    FROM mdl_quiz
                    INNER JOIN mdl_quiz_attempts ON mdl_quiz.id =mdl_quiz_attempts.quiz
                    WHERE course = $this->idCours
                    GROUP BY mdl_quiz.id
                    HAVING COUNT(mdl_quiz_attempts.quiz) > 0)cnt";

        //On compte le nombre total de quiz rendus
        $query2 = "SELECT COUNT(*) as c
                    FROM mdl_quiz
                    INNER JOIN mdl_quiz_attempts ON mdl_quiz.id =mdl_quiz_attempts.quiz
                    WHERE course = $this->idCours";

        $nbTotalQcm = Indicateur::executeRequete($query);
        $nbTotalQcmRendus = Indicateur::executeRequete($query2);

        $nbTotalQcm = $nbTotalQcm['nbAttendus'] * Indicateur::getNbStudent($this->idCours);
        $nbTotalQcmRendus = $nbTotalQcmRendus['c'];

        return array('Nombre total rendus' => $nbTotalQcmRendus, 'Nombre total attendus' => $nbTotalQcm);
    }

    /**
     * @return array
     * Retourne le nombre d'ateliers rendus et le nombre d'ateliers attendus
     */
    public function getTauxRepartitionAteliers()
    {
        //On compte le nombre total de devoirs attendus (ie au moins un rendu sur ce devoir)
        $query = "SELECT COUNT(cnt.c) as nbAttendus FROM (SELECT mdl_workshop.id as c,COUNT(mdl_workshop_submissions.workshopid)
                    FROM mdl_workshop
                    INNER JOIN mdl_workshop_submissions ON mdl_workshop.id =mdl_workshop_submissions.workshopid
                    WHERE course = $this->idCours
                    GROUP BY mdl_workshop.id
                    HAVING COUNT(mdl_workshop_submissions.workshopid) > 0)cnt";

        //On compte le nombre total de quiz rendus
        $query2 = "SELECT COUNT(*) as c
                    FROM mdl_workshop
                    INNER JOIN mdl_workshop_submissions ON mdl_workshop.id =mdl_workshop_submissions.workshopid
                    WHERE course = $this->idCours";

        $nbTotalAteliers = Indicateur::executeRequete($query);
        $nbTotalAtliersRendus = Indicateur::executeRequete($query2);

        $nbTotalAteliers = $nbTotalAteliers['nbAttendus'] * Indicateur::getNbStudent($this->idCours);
        $nbTotalAtliersRendus = $nbTotalAtliersRendus['c'];

        return array('Nombre total rendus' => $nbTotalAtliersRendus, 'Nombre total attendus' => $nbTotalAteliers);
    }

    /**
     * @return array
     * Retourne le nombre de fils de discussion et ceux lancés par l'enseignant
     */
    public function getTauxNbFilDiscussion()
    {
        //On compte le nombre total de de fils de discussion
        $query = "SELECT COUNT(mdl_forum_discussions.id) as totalFil
                    FROM mdl_forum_discussions
                    WHERE course = $this->idCours";

        //On compte le nombre total de de fils de discussion lancé par l'enseignant
        $query2 ="SELECT COUNT(mdl_forum_discussions.id) as totalFilEns
                    FROM mdl_forum_discussions
                    WHERE course = $this->idCours
                    AND userid IN (
                       SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher')
                    )
                    ";

        $nbTotalFD = Indicateur::executeRequete($query);
        $totalFilEns = Indicateur::executeRequete($query2);

        $nbTotalFD = $nbTotalFD['totalFil'];
        $totalFilEns = $totalFilEns['totalFilEns'];

        return array('Nombre total' => $nbTotalFD, 'Nombre lancé par l\'enseignant' => $totalFilEns);
    }

    /**
     * @return array
     * Retourne le nombre de messages total dans les forums et celui de l'enseignant
     */
    public function getTauxNbMessage()
    {
        //On compte le nombre total de de fils de discussion
        $query = "SELECT COUNT(mdl_forum_posts.id) as totalMessage
                    FROM mdl_forum_posts
                    INNER JOIN mdl_forum_discussions ON mdl_forum_posts.discussion = mdl_forum_discussions.id
                    WHERE course = $this->idCours";

        //On compte le nombre total de de fils de discussion lancé par l'enseignant
        $query2 ="SELECT COUNT(mdl_forum_posts.id) as totalMessageEns
                    FROM mdl_forum_posts
                    INNER JOIN mdl_forum_discussions ON mdl_forum_posts.discussion = mdl_forum_discussions.id
                    WHERE course = $this->idCours
                    AND mdl_forum_posts.userid IN (
                       SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher')
                    )
                    ";

        $totalMessage = Indicateur::executeRequete($query);
        $totalMessageEns = Indicateur::executeRequete($query2);

        $totalMessage = $totalMessage['totalMessage'];
        $totalMessageEns = $totalMessageEns['totalMessageEns'];

        return array('Nombre total' => $totalMessage, 'Nombre lancé par l\'enseignant' => $totalMessageEns);
    }

    public function getRessourcePerWeek()
    {
        $data = $this->getConnectionResourcePerStudent($this->idCours);
        $donnees = array();

        $donnees["titre_inclus"] = true;
        foreach($data['ressources_etudiant'] as $val)
        {
          if(isset($val['name']))
            $donnees[] = array('moy' => $val['moy'],'nom' => $val['name']);
        }

        return $donnees;
    }

    /**
     * @param $idCours
     * @param $idResource
     * @return mixed
     *
     * Retourne le nombre moyen de consultation de ressource
     */
    protected function getConnectionResourcePerStudent($idCours)
    {
        $action = 'viewed';
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy FROM (
                            SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                            FROM mdl_logstore_standard_log log
                            INNER JOIN mdl_resource ON mdl_resource.id = log.objectid
                            INNER JOIN mdl_course_modules ON mdl_resource.id = mdl_course_modules.instance
                            INNER JOIN mdl_modules ON mdl_modules.id = mdl_course_modules.module
                            WHERE log.courseid = ".$idCours."
                            AND mdl_modules.id IN (15,18)
                            AND mdl_resource.display != 6
                            AND action = '".$action."'
                            AND log.objecttable = 'resource'
                             group by date)cnt
                          group by date";

        $results = Indicateur::executeMultipleRequete($statement);
        $autres = $this->getConnectionResourceMoyenneCourse($idCours);

        $data = array();
        $data['ressources_etudiant'] = $results;
        $data['autres'] = $autres;

        return $data;
    }

    /**
     * @param $idCours
     * @return mixed
     *
     * Requête ramenant la moyenne de connexions aux ressources par semaine
     */
    protected function getConnectionResourceMoyenneCourse($idCours)
    {
        $action = 'viewed';
        $statement = "SELECT ROUND(AVG(cnt.c),0) as moy,date FROM (
                          SELECT count(*) as c, WEEKOFYEAR(FROM_UNIXTIME(log.timecreated)) as date
                          FROM mdl_logstore_standard_log log
                          LEFT JOIN mdl_resource ON mdl_resource.id = log.objectid
                          LEFT JOIN mdl_course_modules ON mdl_resource.id = mdl_course_modules.instance
                          LEFT JOIN mdl_modules ON mdl_modules.id = mdl_course_modules.module
                          WHERE log.courseid = ".$idCours."
                          AND mdl_modules.id
                          IN ( 15, 18 )
                          AND mdl_resource.display != 6
                          AND ACTION = '".$action."'
                          AND log.objecttable = 'resource'
                          group by date)cnt
                          group by date";

        $results = Indicateur::executeMultipleRequete($statement);

        return $results;
    }

    /**
     * @param $course
     *
     * Retourne le nombre d'étudiants ayant posté au moins deux
     * messages dans les nbForums / nb étudiants inscrits
     */
    public function getNbStudentForum()
    {
        $query = "SELECT count(FP.userid) FROM mdl_forum_posts FP
             INNER JOIN mdl_forum_discussions FD
             WHERE FD.course = $this->idCours
             GROUP BY FP.userid
             HAVING COUNT(FP.id) > 1";

        $nb = Indicateur::executeMultipleRequete($query);
        $nbStudent = Indicateur::getNbStudent($this->idCours);

        if($nbStudent == 0)
            return 0;
        else
            return count($nb)/$nbStudent;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne le nombre d'étudiants inscrits dans le cours
     */
   /* protected function getNbStudent($course)
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
    }*/

    /**
     * @param $idCours
     * @return mixed
     *
     * Retourne le nombre  moyen de post / nb étudiants inscrits
     */
    public function getAvgPost()
    {
        $query = "SELECT count(FP.id) as total FROM mdl_forum_posts FP
             INNER JOIN mdl_forum_discussions FD
             WHERE FD.course = $this->idCours
        ";
        $nbPost = Indicateur::executeRequete($query);
        $nbStudent = Indicateur::getNbStudent($this->idCours);

        if($nbStudent == 0)
            return 0;
        else
            return $nbPost['total']/$nbStudent;
    }

    /**
     * @param $course
     * @return mixed
     *
     * Retourne le nombre de ressources cachées par rapport
     * au nombre de ressources dans le cours
     */
    public function getPercentageHiddenResource()
    {
        $query1 = "SELECT count(R.id) as total FROM mdl_resource R
            INNER JOIN mdl_url U ON R.course = U.course
            WHERE R.course = $this->idCours
            ";
        $nbRessources = Indicateur::executeRequete($query1);

        $query2 = "SELECT count(R.id) as total FROM mdl_resource R
            INNER JOIN mdl_url U ON R.course = U.course
            WHERE R.course = $this->idCours AND R.display = 6
            ";
        $nbHiddenRessources = Indicateur::executeRequete($query2);

        if($nbRessources['total'] == 0)
            return 0;
        else
            return ($nbHiddenRessources['total']/$nbRessources['total'])*100;
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