<?php
//////////////////////////////////////////////////////////////////////////////
// Include des fichiers
//////////////////////////////////////////////////////////////////////////////

// Le fichier à inclure dans tous les controleurs
require_once('../framework/controler.class.php');

// Ce controlleur va afficher une vue
require_once('../framework/view.class.php');

// Ce controlleur a besoin du fichier de configuration
$config = parse_ini_file("../config/config.ini");

// Inclut le fichier de manipulation de la BD et les fichiers des models qu'il manipule
require_once("../model/DAO.class.php");
require_once("../model/etudiant.class.php");


//////////////////////////////////////////////////////////////////////////////
// Récupération des données
//////////////////////////////////////////////////////////////////////////////

// Recupere les données de session ou du fichier config (les données qui ne sont pas dans le modele)
// et on fait des traitements:
// Verifi si l'utilisateur est cencé etre ici: Controler::authentication();
// Passer la main à un autre controleur (pour une redirection): Controler::forward('main.ctrl.php');


//////////////////////////////////////////////////////////////////////////////
// Usage du modèle
//////////////////////////////////////////////////////////////////////////////

// Ici on utilise le modèle (recupere des données, met à jour la base)
// et on fait des traitements/mise en forme des données


//////////////////////////////////////////////////////////////////////////////
// Passe les autres données à la vue
//////////////////////////////////////////////////////////////////////////////

// Creation de la vue
$view = new View('exemple.view.php');

// Les paramètres de la vue
$view->idEval = $idEval;
$view->exam = $exam;

// lance la vue
$view->show();


?>
