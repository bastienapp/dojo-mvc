# Todo

Décrire chaque partie du modèle MVC :
model : accès aux données
view : afficher du html
controller : récupérer les données pour les fournir à la vue
router : récupérer la demande (path) et envoyer vers la bonne méthode d'un controller

Quel dossiers et fichiers sont à créer ?
public : tout ce qui est accessible par le navigateur (css, images, js, et un index.php)

public/index.php : point d'entrée sur mon site
* appelle le router
* appel de la configuration de mysql
* (autoload)

src : tous les fichiers de "traitements" en php, l'utilisateur n'a pas à y accéder !
src/routing.php
src/models
src/controllers 
src/views

connect.php : configuration de mysql
.gitignore : on ignore connect.php (vendor/)

Afficher la liste des jeux sur la route "/"