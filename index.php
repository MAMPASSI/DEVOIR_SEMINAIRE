<?php
include_once "classes/Intervenant.php";
include_once "classes/Seminaire.php";
include_once "classes/Gallerie.php";

include_once "modeles/Modele.php";
include_once "modeles/IntervenantModele.php";
include_once "modeles/SeminaireModele.php";
include_once "modeles/GalleriModele.php";

include_once "controllers/IntervenantController.php";
include_once "controllers/SeminaireController.php";
include_once "controllers/GalleriController.php";


$interctn = new IntervenantController;

$interctn->interHttps();

$seminairectn = new SeminaireController;

$seminairectn->seminaireHttps();

$galleriectn = new GalleriController;

$galleriectn->galleriHttps();