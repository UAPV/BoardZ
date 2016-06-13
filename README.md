
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

    git clone git@github.com:UAPV/BoardZ.git cd BoardZ

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



2) Description de l'application
----------------------------------

Rédaction en cours