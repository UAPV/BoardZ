statMoodle
==========

* Récupérer des sources

git clone git@github.com:UAPV/statMoodle.git
cd statMoodle


* Création d'un dossier logs/ et cache/

Créer deux dossiers dans "app" : cache et logs. Il devront avoir les droits de lecture et écriture pour le user www-data.



* Modification de la connexion à la base de données

Ouvrir le fichier "app > config > config_dev.yml", modifier la partie "Doctrine Configuration" et entrer vos parametres.
Si vous utilisez la base de données du Système d'Information, vous pouvez indiquer ces paramètres dans "appig"

Une fois ceci fait, il va falloir configurer le CAS et le LDAP pour s'authentifier à l'application.
Dans la partie "dosi_auth", modifiez l'url de login/logout/validation avec vos urls ainsi que ce client, le user et le host.
=======
Tableau pédagogique pour Moodle
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

    git clone git@github.com:UAPV/statMoodle.git cd statMoodle

Créer deux dossiers dans "app" : cache et logs.
Il devront avoir les droits de lecture et écriture pour le user www-data.


### Connexion à la base de données

Ouvrir le fichier "app > config > config_dev.php", modifier la partie "Doctrine Configuration" et entrer vos parametres.
Si vous utilisez la base de données du Système d'Information, vous pouvez indiquer ces paramètres dans "appig"

Une fois ceci fait, il va falloir configurer le CAS et le LDAP pour s'authentifier à l'application. Dans la partie "dosi_auth", modifiez l'url de login/logout/validation avec vos urls ainsi que ce client, le user et le host.

Idem, modifier la configuration de la partie "swiftmailer".


* Accès web

Il est conseiller de faire pointer son document root vers "statMoodle > web" afin d'accèder à l'URL de la façon suivante en local :

http://localhost/test/app_dev.php/accueil
=======
### Accès web

Il est conseiller de faire pointer son document root vers "statMoodle > web" afin d'accèder à l'URL de la façon suivante en local :

http://localhost/test/app_dev.php/accueil
