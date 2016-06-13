<?php

class Indicateur1 extends Indicateur{

    protected $titre;
    protected $type;
    protected $data;
    protected $idCours;
    protected $em;

    function mesIndicateurs($idCours)
    {
        $data = array();

        /**  PREMIER INDICATEUR **/
        /** RADAR 0 **/
        $data[0]['type'] = 'spider';
        $data[0]['titre'] = 'Mon usage TICE';

        // Nombre de ressources par rapport au nombre total d'items
        $data[0]['indicateur1']['titre'] = 'Transmission ressources';
        $data[0]['indicateur1']['desc'] = 'Nombre de ressources par rapport au nombre total d\'items';
        $data[0]['indicateur1']['fonction'] = 'getTauxNbResStatic';

        //
        $data[0]['indicateur2']['titre'] = 'Coopération';
        $data[0]['indicateur2']['desc'] = 'Retourne le nombre de ressources structurées (bdd, leçon, glossaire, wiki) par rapport au nombre d\'items total (rapporté à 3)';
        $data[0]['indicateur2']['fonction'] = 'getTauxNbResStruct';

        // Nombre de rendus de devoirs et QCM par rapport au nombre total d'items
        $data[0]['indicateur3']['titre'] = 'Activité d’évaluation';
        $data[0]['indicateur3']['desc'] = 'Retourne le nombre de devoirs + qcm par rapport au nombre d\'items total';
        $data[0]['indicateur3']['fonction'] = 'getTauxDevoirQcm';

        //Nombre de sujets lancés par un enseignant dans les forums par rapport au nombre total d'items du cours
        $data[0]['indicateur4']['titre'] = 'Interaction- Communication';
        $data[0]['indicateur4']['desc'] = 'Nombre de sujets lancés par un enseignant dans les forums par rapport au nombre total d\'items du cours';
        $data[0]['indicateur4']['fonction'] = 'getTauxForum';

        //Nombre d'étudiants inscrits à l'espace de cours par rapport au nombre d'étudiants inscrits pédagogiquement à l'UE correspondante
        $data[0]['indicateur5']['titre'] = 'Promotion - Adhésion';
        $data[0]['indicateur5']['desc'] = 'Nombre d\'étudiants inscrits à l\'espace de cours par rapport au nombre d\'étudiants inscrits pédagogiquement à l\'UE correspondante';
        $data[0]['indicateur5']['fonction'] = 'getTauxInscrit';


        /**  DEUXIEME INDICATEUR **/
        /** RADAR 0 **/
        $data[1]['type'] = 'spider';
        $data[1]['titre'] = 'Cours actif';

        //Taux moyen d'étudiants se connectant chaque semaine
        $data[1]['multiple'][0]['titre'] = "Cumulé";
        $data[1]['multiple'][0]['indicateur1']['titre'] = 'Connexions';
        $data[1]['multiple'][0]['indicateur1']['desc'] = 'taux moyen d\'étudiants se connectant chaque semaine';
        $data[1]['multiple'][0]['indicateur1']['fonction'] = 'getTauxMoyenConnexion';

        //Retourne le nombre moyen de consultations de cours
        $data[1]['multiple'][0]['indicateur2']['titre'] = 'Consultation des ressources';
        $data[1]['multiple'][0]['indicateur2']['desc'] = 'Taux moyen de consultation des ressources “actives”. Une ressources active étant une ressource consultée par au moins 10% des étudiants.';
        $data[1]['multiple'][0]['indicateur2']['requete'] = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
                SELECT count(*) AS c
                FROM mdl_logstore_standard_log log
                INNER JOIN mdl_resource ON mdl_resource.id = log.objectid
                INNER JOIN mdl_course_modules ON mdl_resource.id = mdl_course_modules.instance
                INNER JOIN mdl_modules ON mdl_modules.id = mdl_course_modules.module
                WHERE log.courseid = ".$idCours."
                AND mdl_modules.id IN (15,18)
                AND mdl_resource.display != 6
                AND action = 'viewed'
                GROUP BY userid
                )cnt";

        //Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne
        $data[1]['multiple'][0]['indicateur3']['titre'] = 'Communication Information';
        $data[1]['multiple'][0]['indicateur3']['desc'] = 'Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne';
        $data[1]['multiple'][0]['indicateur3']['fonction'] = 'getPercentagePost';

        //Moyenne du taux de retour de chaque activité évaluable
        $data[1]['multiple'][0]['indicateur4']['titre'] = 'Rendus Toutes les activités évaluables';
        $data[1]['multiple'][0]['indicateur4']['desc'] = 'Moyenne du taux de retour de chaque activité évaluable (nbre de devoirs rendus par rapport au nombre d\'étudiants inscrits) en se limitant aux activités ayant eu au moins UN rendu';
        $data[1]['multiple'][0]['indicateur4']['requete'] = "SELECT COALESCE(ROUND(AVG(cnt.total * 100),0),0) as moy FROM (
                                                     SELECT A.id, (count(distinct userid) / (SELECT count(C.id) as total FROM mdl_course C
                                                     INNER JOIN mdl_enrol E ON E.courseid = C.id
                                                     INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                                                     INNER JOIN mdl_user U ON U.id = UE.userid
                                                     WHERE C.id = ".$idCours." AND E.roleid = 5)) as total
                                                     FROM mdl_assign_submission AsS
                                                     INNER JOIN mdl_assign A ON AsS.assignment = A.id
                                                     WHERE A.course = ".$idCours."
                                                     AND status IN ('submitted','draft')
                                                     GROUP BY A.id
                                                     HAVING total > 0)cnt";

        //Nombre d'étudiants différents  ayant au moins posté 2 messages par rapport au nombre d'étudiants du cours
        $data[1]['multiple'][0]['indicateur5']['titre'] = 'Communication InterAction';
        $data[1]['multiple'][0]['indicateur5']['desc'] = 'Nombre d\'étudiants différents  ayant au moins posté 2 messages par rapport au nombre d\'étudiants du cours';
        $data[1]['multiple'][0]['indicateur5']['fonction'] = 'getAvgPost';

        /** RADAR 1 **/
        //Pourcentage d’étudiants s'étant connecté dans la semaine échue
        $data[1]['multiple'][1]['titre'] = "Semaine échue";
        $data[1]['multiple'][1]['indicateur1']['titre'] = 'Connexions';
        $data[1]['multiple'][1]['indicateur1']['desc'] = 'POurcentage d\'étudiants qui se sont connectés la semaine échue';
        $data[1]['multiple'][1]['indicateur1']['fonction'] = "getTauxMoyenConnexionOneWeek";

        //Taux d’étudiant ayant consulté une ressource dans la semaine échue
        $data[1]['multiple'][1]['indicateur2']['titre'] = 'Consultation des ressources';
        $data[1]['multiple'][1]['indicateur2']['desc'] = 'Taux d\'étudiants ayant consulté une ressource dans la semaine échue';
        $data[1]['multiple'][1]['indicateur2']['fonction'] = "getTauxMoyenOneWeek";

        //Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne
        $data[1]['multiple'][1]['indicateur3']['titre'] = 'Communication Information';
        $data[1]['multiple'][1]['indicateur3']['desc'] = 'Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne sur la semaine échue';
        $data[1]['multiple'][1]['indicateur3']['fonction'] = 'getPercentagePostOneWeek';

        //Moyenne du taux de retour de chaque activité évaluable
        $data[1]['multiple'][1]['indicateur4']['titre'] = 'Rendus Toutes les activités évaluables';
        $data[1]['multiple'][1]['indicateur4']['desc'] = 'Moyenne du taux de retour de chaque activité évaluable (nbre de devoirs rendus par rapport au nombre d\'étudiants inscrits) en se limitant aux activités ayant eu au moins UN rendu dans la semaine échue';
        $data[1]['multiple'][1]['indicateur4']['fonction'] = 'getNbRendusOneWeek';

        //Nombre d'étudiants différents  ayant au moins posté 2 messages par rapport au nombre d'étudiants du cours
        $data[1]['multiple'][1]['indicateur5']['titre'] = 'Communication InterAction';
        $data[1]['multiple'][1]['indicateur5']['desc'] = 'Nombre d\'étudiants différents  ayant au moins posté 1 message la semaine échue par rapport au nombre d\'étudiants du cours';
        $data[1]['multiple'][1]['indicateur5']['fonction'] = 'getAvgPostOneWeek';

        $this->idCours = $idCours;
        return $data;
    }

    /** FONCTIONS PERSONNALISEES */

    /**
     * Retourne le taux moyen d'étudiants se connectant chaque semaine
     */
    public function getTauxMoyenConnexion()
    {
        $query = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM
                    (SELECT WEEK(CAST(FROM_UNIXTIME(log.timecreated) as date)) as autre, count(distinct userid) AS c
                      FROM mdl_logstore_standard_log log
                      WHERE log.courseid = ".$this->idCours."
                      GROUP BY autre)cnt
            ";

        $nbReponses = Indicateur::executeRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;
        else
            return ($nbReponses['moy']/$nbInscrit)*100;
    }

    /**
     * Retourne le taux moyen d'étudiants s'étant connecté la semaine échue
     */
    public function getTauxMoyenConnexionOneWeek()
    {
        $date = $this->getDateEchue();
        $query = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM
                    (SELECT WEEK(CAST(FROM_UNIXTIME(log.timecreated) as date)) as autre, count(distinct userid) AS c
                      FROM mdl_logstore_standard_log log
                      WHERE log.courseid = ".$this->idCours."
                      AND timecreated > '".$date['debut']."'
                      AND timecreated < '".$date['fin']."'
                      GROUP BY autre)cnt
            ";

        $nbReponses = Indicateur::executeRequete($query);

        $nbInscrit = $this->getNbStudent($this->idCours);
        if($nbInscrit == 0)
            return 0;
        else
            return ($nbReponses['moy']/$nbInscrit)*100;
    }

    /**
     * Taux moyen de consultation des ressources “actives” sur la semaine échue
     */
    public function getTauxMoyenOneWeek()
    {
        $date = $this->getDateEchue();
        $query = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
               SELECT mdl_resource.id,count(mdl_resource.id) as c
                FROM mdl_logstore_standard_log log
                INNER JOIN mdl_resource ON mdl_resource.id = log.objectid
                INNER JOIN mdl_course_modules ON mdl_resource.id = mdl_course_modules.instance
                INNER JOIN mdl_modules ON mdl_modules.id = mdl_course_modules.module
                WHERE log.courseid = ".$this->idCours."
                AND mdl_modules.id IN (15,18)
                AND mdl_resource.display != 6
                AND action = 'viewed'
                AND timecreated > '".$date['debut']."'
                AND timecreated < '".$date['fin']."'
                GROUP BY mdl_resource.id
                HAVING count(mdl_resource.id) >
                     0.1 * (SELECT count(C.id) FROM mdl_course C
                     INNER JOIN mdl_enrol E ON E.courseid = C.id
                     INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                     INNER JOIN mdl_user U ON U.id = UE.userid
                     WHERE C.id = ".$this->idCours." AND E.roleid = 5 )
                )cnt";

        $getTauxMoyen = Indicateur::executeRequete($query);

        return $getTauxMoyen['moy'];
    }

    /**
     * Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne
     */
    public function getPercentagePost()
    {
       $nbPostByTeacherQuery = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
                            SELECT count(*) as c, FP.userid
                                    FROM mdl_forum_posts FP
                                    INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                                    WHERE FD.course = ".$this->idCours."
                                    AND FP.userid NOT IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher')
                                    AND course.visible = 1
                                    AND course.id=".$this->idCours."
                            )
                            GROUP BY FP.userid
                          )cnt";

        $moyPostByUserQuery = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
                            SELECT count(*) as c, FP.userid
                            FROM mdl_forum_posts FP
                            INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                            WHERE FD.course = ".$this->idCours."
                            GROUP BY FP.userid
                        )cnt;";

        $nbPostByTeacher = Indicateur::executeRequete($nbPostByTeacherQuery);
        $moyPostByUser = Indicateur::executeRequete($moyPostByUserQuery);

        if($moyPostByUser['moy'] == 0)
            return 0;
        else
            return $nbPostByTeacher['moy']/$moyPostByUser['moy'];
    }

    /**
     * Nombre de messages postés par l’enseignant par rapport au nombre moyen de messages postés par personne sur la semaine échue
     */
    public function getPercentagePostOneWeek()
    {
        $date = $this->getDateEchue();
        $nbPostByTeacherQuery = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
                            SELECT count(*) as c, FP.userid
                                    FROM mdl_forum_posts FP
                                    INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                                    WHERE FD.course = ".$this->idCours."
                                    AND created > '".$date['debut']."'
                                    AND created < '".$date['fin']."'
                                    AND FP.userid IN (
                                          SELECT rass.userid
                                          FROM mdl_role_assignments rass
                                          INNER JOIN mdl_context cont on rass.contextid = cont.id
                                          INNER JOIN mdl_course course on cont.instanceid = course.id
                                          INNER JOIN mdl_role role on rass.roleid = role.id
                                          WHERE role.shortname in ('editingteacher','teacher')
                                    AND course.visible = 1
                                    AND course.id=".$this->idCours."
                            )
                            GROUP BY FP.userid
                          )cnt";

        $moyPostByUserQuery = "SELECT COALESCE(ROUND(AVG(cnt.c),0),0) as moy FROM (
                            SELECT count(*) as c, FP.userid
                            FROM mdl_forum_posts FP
                            INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                            WHERE FD.course = ".$this->idCours."
                            GROUP BY FP.userid
                        )cnt;";

        $nbPostByTeacher = Indicateur::executeRequete($nbPostByTeacherQuery);
        $moyPostByUser = Indicateur::executeRequete($moyPostByUserQuery);

        if($moyPostByUser['moy'] == 0)
            return 0;
        else
            return $nbPostByTeacher['moy']/$moyPostByUser['moy'];
    }

    /**
     * Moyenne du taux de retour de chaque activité évaluable sur la semaine échue
     */
    public function getNbRendusOneWeek()
    {
        $date = $this->getDateEchue();
        $query = "SELECT COALESCE(ROUND(AVG(cnt.total * 100),0),0) as moy FROM (
                        SELECT A.id, (count(distinct userid) / (SELECT count(C.id) as total FROM mdl_course C
                        INNER JOIN mdl_enrol E ON E.courseid = C.id
                        INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                        INNER JOIN mdl_user U ON U.id = UE.userid
                        WHERE C.id = ".$this->idCours." AND E.roleid = 5)) as total
                        FROM mdl_assign_submission AsS
                        INNER JOIN mdl_assign A ON AsS.assignment = A.id
                        WHERE A.course = " . $this->idCours . "
                        AND timecreated > '".$date['debut']."'
                        AND timecreated < '".$date['fin']."'
                        AND status IN ('submitted','draft')
                        GROUP BY A.id
                        HAVING total > 0)cnt";

        $moy = Indicateur::executeRequete($query);

        return $moy['moy'];
    }

    /**
     * @param $idCours
     *
     * Retourne le taux de réponses par rapport au nombre d'inscrits
     */
    public function getPercentageFeedback()
    {
        $query = " SELECT COUNT(FC.userid) as total FROM mdl_feedback_completed FC
              INNER JOIN mdl_feedback F ON F.id = FC.feedback
              WHERE F.course = $this->idCours
            ";

        $nbReponses = Indicateur::executeRequete($query);

        if($nbReponses['total'] == 0)
            return 0;
        else
        {
            $nbInscrit = $this->getNbStudent($this->idCours);
            return ($nbInscrit/$nbReponses['total'])*100;
        }
    }

    /**
     * @return float|int
     *
     * Retourne le pourcentage de devoirs rendus par rapport au nombre d'inscrits (* le nombre de dépôt)
     */
    public function getMoyTauxRendu()
    {
        $query = " SELECT A.id, count(distinct userid) as total
                    FROM mdl_assign_submission AsS
                    INNER JOIN mdl_assign A ON AsS.assignment = A.id
                    WHERE A.course = ".$this->idCours."
                    GROUP BY A.id
                    HAVING total > 0
            ";

        $nbRendus = Indicateur::executeRequete($query);
        $nbDepot = $this->getNbAssignmentDepot();

        if($nbRendus['total'] == 0)
            return 0;
        else
        {
            $nbInscrit = $this->getNbStudent($this->idCours);
            return ($nbInscrit*$nbDepot/$nbRendus['total'])*100;
        }
    }

    /**
     * @return mixed
     *
     * Retourne le pourcentage d'étudiants différents  ayant au moins posté 2 messages dans un forum
     */
    public function getAvgPost()
    {
        $query = "SELECT COUNT(idEtudiant) as moy FROM (
                    SELECT count( distinct FP.id) as total, FP.userid as idEtudiant
                    FROM mdl_forum_posts FP
                    INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                    INNER JOIN mdl_enrol E ON E.courseid = FD.course
                    INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                    WHERE FD.course = ".$this->idCours."
                    AND FP.userid IN
                      (SELECT distinct userid
                        FROM mdl_enrol E
                        INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                        WHERE E.courseid = ".$this->idCours."
                        AND E.roleid = 5
                      )
                    AND FP.userid
                    GROUP BY FP.userid
                    HAVING total > 1)cnt";
        $nbStudentPost = Indicateur::executeRequete($query);
        $nbStudent = $this->getNbStudent($this->idCours);

        if($nbStudent == 0)
            return 0;
        else
            return $nbStudentPost['moy']/$nbStudent * 100;
    }

    /**
     * @return mixed
     *
     * Retourne le pourcentage d'étudiants différents  ayant au moins posté 1 messages dans un forum pour la semaine échue
     */
    public function getAvgPostOneWeek()
    {
        $date = $this->getDateEchue();

        $query = "SELECT COUNT(idEtudiant) as moy FROM (
                    SELECT count( distinct FP.id) as total, FP.userid as idEtudiant
                    FROM mdl_forum_posts FP
                    INNER JOIN mdl_forum_discussions FD ON FP.discussion = FD.id
                    INNER JOIN mdl_enrol E ON E.courseid = FD.course
                    INNER JOIN mdl_user_enrolments UE ON UE.enrolid = E.id
                    WHERE FD.course = ".$this->idCours."
                    AND FP.created > '".$date['debut']."'
                    AND FP.created < '".$date['fin']."'
                    AND FP.userid NOT IN
                          (
                              SELECT rass.userid
                              FROM mdl_role_assignments rass
                              INNER JOIN mdl_context cont on rass.contextid = cont.id
                              INNER JOIN mdl_course course on cont.instanceid = course.id
                              INNER JOIN mdl_role role on rass.roleid = role.id
                              WHERE role.shortname in ('editingteacher','teacher')
                              AND course.visible = 1
                              AND course.id=" . $this->idCours . "
                          )
                    AND FP.userid
                    GROUP BY FP.userid
                    HAVING total > 0)cnt";
        $nbStudentPost = Indicateur::executeRequete($query);
        $nbStudent = $this->getNbStudent($this->idCours);

        if($nbStudent == 0)
            return 0;
        else
            return $nbStudentPost['moy']/$nbStudent * 100;
    }

    /**
     * Retourne le nombre de ressources statiques par rapport au nombre d'items total
     */
    public function getTauxNbResStatic()
    {
        $query = "SELECT COUNT(*) AS nb FROM `mdl_resource` WHERE course = $this->idCours";
        $data = Indicateur::executeRequete($query);

        if($data['nb'] < 10)
            $nb = 10;
        else
            $nb = $data['nb'];

        if($this->getNbItems() == 0) return 0;
        return ($nb / $this->getNbItems()) * 100;
    }

    /**
     * Retourne le nombre de ressources structurées (bdd, leçon, glossaire, wiki) par rapport au nombre d'items total (rapporté à 3)
     */
    public function getTauxNbResStruct()
    {
        $query = "SELECT COUNT(*) FROM `mdl_glossary` WHERE course=$this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_data` WHERE course=$this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_lesson` WHERE course=$this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_wiki` WHERE course=$this->idCours";

        $data = Indicateur::executeMultipleRequete($query);
        $cpt = 0;
        foreach($data as $d)
            $cpt += $d['COUNT(*)'];

        if($this->getNbItems() == 0) return 0;
        else if($cpt >= 3)
            return 100;

        return ($cpt / $this->getNbItems()) * 100;
    }

    /**
     * Retourne le nombre de devoirs + qcm par rapport au nombre d'items total
     */
    public function getTauxDevoirQcm()
    {
        $query = "SELECT COUNT(*) FROM `mdl_assignment` WHERE course=$this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_quiz` WHERE course=$this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_workshop` WHERE course=$this->idCours";

        $data = Indicateur::executeMultipleRequete($query);
        $cpt = 0;
        foreach($data as $d)
            $cpt += $d['COUNT(*)'];

        if($this->getNbItems() == 0) return 0;
        else if($cpt >= 3)
            return 100;

        return ($cpt / $this->getNbItems()) * 100;
    }

    /**
     * Retourne le nombre de sujets lancés dans les forums par l'enseignant par rapport au nombre d'items total
     */
    public function getTauxForum()
    {
        $query = "SELECT COUNT(*) as c, userid
                    FROM mdl_forum_discussions
                    WHERE course = ".$this->idCours."
                    AND userid IN (
                        SELECT rass.userid
                        FROM mdl_role_assignments rass
                        INNER JOIN mdl_context cont on rass.contextid = cont.id
                        INNER JOIN mdl_course course on cont.instanceid = course.id
                        INNER JOIN mdl_role role on rass.roleid = role.id
                        WHERE role.shortname in ('editingteacher','teacher')
                        AND course.visible = 1
                        AND course.id=".$this->idCours.")";

        $data = Indicateur::executeRequete($query);

        if($this->getNbItems() == 0) return 0;
        return ($data['c'] / $this->getNbItems()) * 100;
    }

    /**
     * Retourne le taux d'étudiants inscrits au cours par rapport au nombre d'inscrits pédagogiquement
     */
    public function getTauxInscrit()
    {
        //Nombre d'étudiants inscrits pédagogiquement à ce cours dans le SI
        $cours = Indicateur::getRepoCours($this->idCours);

        if($cours === null)
            throw new NotFoundHttpException('Le cours [id='.$this->idCours.'] n\'existe pas.');
        $nbEtudiantSI = Indicateur::getNbEtudiantsSI($cours->getIdNumber());

        //On retourne le pourcentage
        if($nbEtudiantSI['count'] == 0)
            return 0;
        else
            return ($this->getNbStudent($this->idCours)/$nbEtudiantSI["count"])*100;
    }
    /**
     * Retourne le nombre total d'items dans un cours donné
     */
    public function getNbItems()
    {
        $query = "SELECT COUNT(*) FROM `mdl_resource` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_quiz` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_assign` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_feedback` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_forum` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_glossary` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_languagelab` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_lesson` WHERE course = $this->idCours
                    UNION
                    SELECT COUNT(*) FROM `mdl_workshop` WHERE course = $this->idCours";

        $data = Indicateur::executeMultipleRequete($query);
        $cpt = 0;
        foreach($data as $d)
            $cpt += $d['COUNT(*)'];

        return $cpt;
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

    public function getDateEchue()
    {
        $weekday = date('w');
        switch($weekday)
        {
            case 1:
                $debut = date('Y-m-d', strtotime('last monday', strtotime(date('Y-m-d')))).'<br/>';
                $fin = date('Y-m-d', strtotime('last sunday', strtotime(date('Y-m-d'))));
                break;
            default:
                $debut = date('Y-m-d', strtotime('last monday last monday', strtotime(date('Y-m-d')))).'<br/>';
                $fin = date('Y-m-d', strtotime('last sunday', strtotime(date('Y-m-d'))));
        }

        return array('debut' => $debut, 'fin' => $fin);
    }
}
?>