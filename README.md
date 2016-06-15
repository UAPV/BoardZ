
BoardZ : Tableau pédagogique pour Moodle
========================

Outil open source développé à Avignon, cette application permet de visualiser graphiquement des indicateurs pédagogiques au sein d’un tableau de bord pour Moodle.
Plusieurs utilisations de ce tableau de bord sont possibles en fonction du profil de l’usager. Chaque profil dispose d’une approche progressive : du global au détail.
La vue globale permet d’appréhender en un coup d’oeil l’ensemble du périmètre concerné, les deux niveaux suivants proposent une modélisation plus fine des objets d’étude sélectionnés.
La plate-forme de visualisation est générique et permet à chacun de (re)définir ses propres indicateurs, en (ré)écrivant simplement les requêtes SQL ou redéfinissant les fonctions permettant d’obtenir les valeurs de l’indicateur à personnaliser.


1) Installation de l'application
----------------------------------

Cette application est développée en PHP avec le framework Symfony2.

### Utiliser GIT (recommandé)

Pour récupérer le projet faire, cloner le projet

    git clone git@github.com:UAPV/BoardZ.git
    cd BoardZ

Créer deux dossiers dans "app" : cache et logs.
Il devront avoir les droits de lecture et écriture pour le user www-data.


### Connexion à la base de données

Ouvrir le fichier "app > config > config_dev.php", modifier la partie "Doctrine Configuration" et entrer vos parametres.
Si vous utilisez la base de données du Système d'Information, vous pouvez indiquer ces paramètres dans "appig"

Une fois ceci fait, il va falloir configurer le CAS et le LDAP pour s'authentifier à l'application. Dans la partie "dosi_auth", modifiez l'url de login/logout/validation avec vos urls ainsi que ce client, le user et le host.

Idem, modifier la configuration de la partie "swiftmailer".


### Autorisation et authentification

Il existe 4 rôles dans BoardZ, tous basés sur des rôles Moodle :
- étudiant
- enseignant
- labelisation (à créer, permet de sélectionner des UE de n'importe quel diplôme et de voir l'utilisation faite dessus et infos générales)
- admin


### Fonctions relatives à votre référentiel SI

Dans le fichier "src/Stat/EnseignantBundle/Modules/Fonctions.php", les premières fonctions (récupération nombre d'inscrits pédagogique, les composantes / filières / diplômes / UE)
récupèrent directement leur données dans le SI et non pas dans Moodle.
Vous pouvez donc compléter ces fonctions en requêtant directement dans votre référentiel.


### Les indicateurs pour les graphes

Chaque page (voir la partie "Description de l'application") contient des indicateurs paramétrables, basée sur la librairie js Highchart.
Vous les retrouvez dans le dossier "src/Stat/EnseignantBundle/Modules/Indicateurs" avec comme paramètres :
- Type du graphe : spider, pie, bar, column, line, multipleLine, stackedBar
- Titre / Description
- Fonction (pour appeler directement une fonction qu'on met à la fin du fichier) / Requête (pour requêter directement)


### Accès web

Il est conseiller de faire pointer son document root vers "statMoodle > web" afin d'accèder à l'URL de la façon suivante en local :

http://localhost/test/app_dev.php/accueil


### Erreurs rencontrées

- Il ne trouve pas la table "mdl_language" dans la base de données
Notre Moodle est installé avec le plugin de labo de langues. Si il n'est pas installé chez vous, vous pouvez décommenter le ligne 566 de "Indicateur1.class.php"


2) Description de l'application
----------------------------------

### Les pages de BoardZ

1- L'accueil
La page d'accueil regroupe la vue des cours dans lesquels je suis enseignant et la vue des cours dans lesquels je suis étudiant.
Les graphes pour lesquels je suis enseignants sont sous forme de radar.
Les graphes pour lesquels je suis étudiant sont deux courbes d'assiduité : les connexions et les rendus de devoirs. L'idée ici est de permettre à l'étudiant de se situer dans sa cohorte.

2- La vue "étudiant" dans le détail de "Cours actifs"
La page vue "étudiant" permet de voir les connexions et les rendus de devoirs de toute la cohorte

3- La vue "ressource" dans le détail de "Cours actifs"
La page vue "ressource" permet de voir le nombre de ressources consultées et le nombre d'étudiants différents l'ayant consultée

4- La vue "devoir" dans le détail de "Cours actifs"
La page vue "devoir" permet de voir le nombre de devoirs rendus et le nombre d'étudiants différents l'ayant rendu

5- La vue pour un étudiant
La page d'un étudiant lui permet de voir ses connexions à chacun de ses cours ainsi que les devoirs rendus par rapport à la cohorte

6- La vue labélisation
Mise en place à Avignon, la labélisation permet de valoriser un parcours si les matières le composant répondent à certains critères numériques
Il s'agit d'un rôle créé spécialement dans Moodle pour BoardZ, et il permet de sélectionner des UE dans différents diplômes afin de calculer une note "labélisable"

7- La vue admin
Rôle d'administrateur dans Moodle => quelques données chiffrées comme le nombre de cours pauvres, le nombre de cours labélisables, le nombre de cours sans enseignants, etc.


### ScreenShot de l'application et BoardZ en vidéo

![ScreenShot](https://raw.github.com/UAPV/BoardZ/master/web/ScreenShot/accueilBoardZ.png)
![ScreenShot](https://raw.github.com/UAPV/BoardZ/master/web/ScreenShot/indicateur.png)
![ScreenShot](https://raw.github.com/UAPV/BoardZ/master/web/ScreenShot/indicateur2.png)

Lien vers la vidéo faite au MoodleMoot 2014
<http://moodlemoot2014.univ-paris3.fr/pluginfile.php/3477/mod_label/intro/demo.mp4>