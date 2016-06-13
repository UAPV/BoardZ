<?php
/**
 * Created by PhpStorm.
 * User: Fanny MARCEL
 * Date: 11/02/14
 * Time: 15:39
 */

namespace Stat\EnseignantBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class CoursController extends Controller
{

    protected $type = array('1' => 'getDataCoursTice','2' => 'getDataCoursActif');

    /**
     * @return Response
     * Affiche la totalité des cours du user authentifié
     */
    public function indexAction()
    {
        // On récupère le service
        $stats = $this->container->get('stat_enseignant.modules');

        //On récupère le statut moodle du user
        $uid = $this->getUser()->getAttribute('uid');
        $data['teacher'] = $stats->getCourseByUser($uid);
        $data['student'] = $stats->getCourseStudentByUser($uid);

        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);

        $compteur = 0;

        return $this->render('StatEnseignantBundle:Cours:index.html.twig', array(
            'data' => $data, 'compteur' => $compteur, 'responsable' => $responsable, 'labelisation' => $labelisation
        ));
    }

    /**
     * @param $id, id du cours à afficher
     * @param $type, index du type d'indicateur à afficher
     * @return Response
     */
    public function detailsAction($id, $type)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $data = $stats->getDataCoursDetails($id, $this->type[$type]);

        if($type == 2)
            $typeNom = 'Mon usage TICE';
        else
            $typeNom = 'Cours actif';

        $uid = $this->getUser()->getAttribute('uid');
        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);

        $autres['teacher'] = $stats->getCourseByUser($uid);
        $autres['student'] = $stats->getCourseStudentByUser($uid);

        $nomCours = $stats->getNomCourseById($id);
        return $this->render('StatEnseignantBundle:Cours:details.html.twig', array(
            'typeNom' => $typeNom, 'data' => $data, 'id' => $id, 'responsable' => $responsable, 'labelisation' => $labelisation, 'autres' => $autres, 'nomCours' => $nomCours['nom'], 'type' => $this->type[$type]
        ));
    }

    /**
     * @param $id
     * @return Response
     * Retourne la vue d'un cours avec la liste de ses étudiants
     */
    public function globalAction($id)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $data = $stats->getDataGlobalStudent($id);
        $titre = 'Etudiants du cours';


        $uid = $this->getUser()->getAttribute('uid');

        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);
        $url = $this->get('router')->generate('stat_enseignant_etudiant_detail', array(), true);
        $nomCours = $stats->getNomCourseById($id);

        return $this->render('StatEnseignantBundle:Etudiant:details.html.twig', array(
            'data' => $data, 'nomCours' => $nomCours['nom'], 'titre' => $titre, 'url' => $url, 'id' => $id, 'responsable' => $responsable, 'labelisation' => $labelisation//, 'autres' => $autres
        ));
    }

    /**
     * @param $id
     * @return Response
     * Retourne la vue d'un cours avec la liste sur l'utilisation des ressources
     */
    public function globalRessourceAction($id)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $data = $stats->getDataGlobalItem($id, 'ressource');
        $titre = 'Ressources du cours';

        $uid = $this->getUser()->getAttribute('uid');
        $autres['teacher'] = $stats->getCourseByUser($uid);
        $autres['student'] = $stats->getCourseStudentByUser($uid);

        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);
        $url = $this->get('router')->generate('stat_enseignant_etudiant_detail', array(), true);
        $nomCours = $stats->getNomCourseById($id);

        return $this->render('StatEnseignantBundle:Cours:ressources.html.twig', array(
            'data' => $data, 'titre' => $titre, 'nomCours' => $nomCours['nom'], 'url' => $url, 'id' => $id, 'responsable' => $responsable, 'labelisation' => $labelisation, 'autres' => $autres
        ));
    }

    /**
     * @param $id
     * @return Response
     * Retourne la vue d'un cours avec la liste sur les devoirs du cours
     */
    public function globalDevoirAction($id)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $data = $stats->getDataGlobalItem($id, 'devoir');
        $titre = 'Devoirs du cours';

        $uid = $this->getUser()->getAttribute('uid');
        $autres['teacher'] = $stats->getCourseByUser($uid);
        $autres['student'] = $stats->getCourseStudentByUser($uid);

        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);
        $url = $this->get('router')->generate('stat_enseignant_etudiant_detail', array(), true);

        $nomCours = $stats->getNomCourseById($id);
        return $this->render('StatEnseignantBundle:Cours:devoirs.html.twig', array(
            'data' => $data, 'nomCours' => $nomCours['nom'], 'titre' => $titre, 'url' => $url, 'id' => $id, 'responsable' => $responsable, 'labelisation' => $labelisation, 'autres' => $autres
        ));
    }

    /**
     * @param $cours
     * @param $name
     * @return Response
     * Retourne la vue détaillée d'un étudiant dans un cours
     */
    public function detailsEtudiantAction($cours,$name)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $data = $stats->getDataDetailsStudent($cours,$name);

        $uid = $this->getUser()->getAttribute('uid');
        $autres['teacher'] = $stats->getCourseByUser($uid);
        $autres['student'] = $stats->getCourseStudentByUser($uid);

        //On regarde si ce user est responsable de formation
        $responsable = $stats->isResponsible($uid);

        //On regarde si ce user a le profil "labelisation"
        $labelisation = $stats->isLabelisation($uid);
        $url = $this->get('router')->generate('stat_enseignant_etudiant_detail', array(), true);

        return $this->render('StatEnseignantBundle:Etudiant:details_perso.html.twig', array(
            'data' => $data, 'name' => $name, 'responsable' => $responsable, 'labelisation' => $labelisation, 'autres' => $autres,'url' => $url, 'id' => $cours
        ));
    }

    /**
     * @param $id, id de la formation à afficher
     * @return Response
     * Retourne la vue d'un responsable de formation avec les cours en question
     */
    public function responsableAction($id)
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $name = $stats->getCategoryName($id);
        $data = $stats->getDataCoursResponsable($id);

        return $this->render('StatEnseignantBundle:Responsable:index.html.twig', array(
            'data' => $data, 'id' => $id, 'name' => $name
        ));
    }

    /**
     * @return Response
     * Retourne la vue labélisation si le user a les droits adéquates
     */
    public function labelisationAction()
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $uid = $this->getUser()->getAttribute('uid');

        if($stats->isLabelisation($uid))
        {
            $liens = array();

            //On récupère les liens présents dans le fichier xml
            $filename = 'liens.xml';
            $fichiers = simplexml_load_file($filename);

            foreach ($fichiers->personne as $personne)
            {
               if($personne['username'] == $uid)
               {
                  foreach($personne->url as $url)
                  {
                     $infos = explode("&",rawurldecode($url));
                     $tabNom = explode('=', $infos[0]);
                     $tabPorteur = explode('=', $infos[1]);

                     $liens[rawurldecode($url)] = array('nom' => $tabNom[1], 'porteur' => $tabPorteur[1]);
                  }
               }
            }

            return $this->render('StatEnseignantBundle:Labelisation:index.html.twig', array(
                'liens' => $liens
            ));
        }
        else
            return $this->render('StatEnseignantBundle:Default:forbidden.html.twig', array());
    }

    /**
     * @return Response
     * Permet de créer un lien pour la partie labélisation
     */
    public function creationLienAction()
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $uid = $this->getUser()->getAttribute('uid');

        if($stats->isLabelisation($uid))
        {
            //Liste des enseignants Moodle
            $stats = $this->container->get('stat_enseignant.modules');
            $enseignants = $stats->getEnseignantMoodle();

            //Liste des composantes
            $composantes = $stats->getComposantes();

            return $this->render('StatEnseignantBundle:Labelisation:creationLien.html.twig', array(
                'enseignants' => $enseignants, 'composantes' => $composantes
            ));
        }
        else
            return $this->render('StatEnseignantBundle:Default:forbidden.html.twig', array());
    }

    /**
     * @param $composante
     * Retourne les filières associées à la composante passée en paramètre
     */
    public function getFiliereAjaxAction()
    {
        $response = new JsonResponse();

        $composante = $this->get('request')->request->get('composante');

        //On récupère les filieres associées à la composante
        $stats = $this->container->get('stat_enseignant.modules');
        $filieres = $stats->getFilieres($composante);

        $response->setData($filieres);

        return $response;
    }

    /**
     * @param $composante
     * Retourne les filières associées à la composante passée en paramètre
     */
    public function getDiplomeAjaxAction()
    {
        $response = new JsonResponse();

        $filiere = $this->get('request')->request->get('filiere');

        //On récupère les diplomes associés à la filiere
        $stats = $this->container->get('stat_enseignant.modules');
        $diplomes = $stats->getDiplomes($filiere);

        $response->setData($diplomes);

        return $response;
    }

    /**
     * @param $composante
     * Retourne les matières associées au diplome passé en paramètre
     */
    public function getMatiereAjaxAction()
    {
        $response = new JsonResponse();

        $diplome = $this->get('request')->request->get('diplome');

        //On récupère les matières associées au diplome
        $stats = $this->container->get('stat_enseignant.modules');
        $matieres = $stats->getMatieres($diplome);

        $response->setData($matieres);

        return $response;
    }

    /**
     * @return JsonResponse
     * Fonction ajax permettant de créer un lien pour le profil labélisation
     */
    public function addLienAction()
    {
        $response = new JsonResponse();

        $nom = $this->get('request')->request->get('nom');
        $porteur = $this->get('request')->request->get('porteur');
        $cours = $this->get('request')->request->get('cours');

        $cours = implode(';',$cours);
        $newUrl = "nom=".$nom."&porteur=".$porteur.'&cours='.$cours;
        //On écrit dans le fichier xml pour ce user cette url
        $filename = 'liens.xml';

        try
        {
            //On récupère le contenu du fichier qu'on met dans un tableau
            $fichiers = simplexml_load_file($filename);
            $data = array();
            $done = false;
            $uid = $this->getUser()->getAttribute('uid');

            foreach ($fichiers->personne as $personne)
            {
                $urls = array();
                foreach($personne->url as $url)
                    $urls[] = "$url";

                $username = $personne["username"];
                if($username == $uid)
                {
                    $done = true;
                    //On ajoute la nouvelle url
                    $urls[] = rawurlencode($newUrl);
                }
                $data["$username"] = $urls;
            }

            //Il n'y avait pas d'entrée correspondante pour ce user
            if(!$done)
                $data[$uid] = array(rawurlencode($newUrl));

            //On réécrit notre texte
            $texte = "<fichier>\n";
            foreach($data as $nom => $urls)
            {
                $texte .= "\t<personne username='".$nom."'>\n";
                foreach($urls as $url)
                  $texte .= "\t\t<url>".$url."</url>\n";
                $texte .= "\t</personne>\n";
            }
            $texte .= "</fichier>";

            $monfichier = fopen($filename, "w+");
            // On met le curseur au début du fichier
            fseek($monfichier, 0);
            fputs($monfichier, $texte);

            fclose($monfichier);
        }
        catch (Exception $e) {
            echo 'Le problème suivant a été soulevé : ',  $e->getMessage(), "\n";
        }

        $error = false;
        $response->setData($error);

        return $response;
    }

    /**
     * @return Response
     * Retourne la vue des cours recherchés dans la labélisation
     */
    public function voirAction()
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $uid = $this->getUser()->getAttribute('uid');

        if($stats->isLabelisation($uid))
        {
            $data = array();
            $title = $this->get('request')->query->get('nom');
            $porteur = $this->get('request')->query->get('porteur');
            $cours = $this->get('request')->query->get('cours');

            $stats = $this->container->get('stat_enseignant.modules');
            $tabCoursTmp = explode('&cours=', $cours);
            $tabCours = explode(';', $tabCoursTmp[0]);

            //On récupère tous les cours avec leurs informations
            foreach($tabCours as $cours)
            {
                $data[$cours]['feedback'] = $stats->hasFeedback($cours);
                $data[$cours]['infos'] = $stats->getInfosUE($cours);

                $id = $stats->getIdByCode($cours);
                if($id == null)
                    return $this->render('StatEnseignantBundle:Default:erreur.html.twig', array("message" => "Aucun cours ne correspond à celui recherché."));

                $data[$cours]['data'] = $stats->getDataCoursLabelisation($id);
                $data[$cours]['score'] = $stats->scoreTice($id);
                $nbMoodle = $stats->getNbStudent($id);
                $tmp = $stats->getNbStudentInscritSI($stats->getIdNumberById($id));
                $nbSi = $tmp['count'];

                if($nbSi != 0)
                {
                    $pourcentage = round($nbMoodle * 100 / $nbSi,1);
                    $nbStudents = $nbMoodle .'/'.$nbSi;
                }
                else
                {
                    $pourcentage = 0;
                    $nbStudents = "0 / 0";
                }

                $data[$cours]['studentInscrit'] = $nbStudents;
                $data[$cours]['pourcentage'] = $pourcentage;
            }

            return $this->render('StatEnseignantBundle:Labelisation:voir.html.twig', array(
                'data' => $data, 'title' => $title, 'porteur' => $stats->getNomPorteur($porteur)
            ));
        }
        else
            return $this->render('StatEnseignantBundle:Default:forbidden.html.twig', array());
    }

    /**
     * @return Response
     * Retourne la vue administration
     */
    public function administrationAction()
    {
        $stats = $this->container->get('stat_enseignant.modules');
        $nbEspaces = $stats->getNbCourses();
        $nbPoor = $stats->getNbCoursesPoorTice();
        $nbLabelisation = $stats->getNbCoursesLabelisableTice();
        $nbCoursSansEns = $stats->getNbCoursesWithoutTeacher();
        $nbCoursSansEtd = $stats->getNbCoursesWithoutStudent();
        $stats->getNbEmptyCourses();

        return $this->render('StatEnseignantBundle:Administration:index.html.twig', array('nbEspaces' => $nbEspaces, 'nbPoor' => $nbPoor, 'nbLabelisation' => $nbLabelisation, 'nbCoursSansEns' => $nbCoursSansEns,
                            'nbCoursSansEtd' => $nbCoursSansEtd));
    }
}