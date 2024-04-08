<?php
include_once "classes/Intervenant.php";
include_once "classes/Seminaire.php";


$int = new Intervenant(1," Mampassi ","Nick ", "Symfony ","https://github.com/MAMPASSI/DEVOIR_SEMINAIRE");

echo $int->getId();
echo $int->getNom();
echo $int->getPrenom();
echo $int->getAffectation();
echo $int->getUrl();

echo "<br>";

$sem = new Seminaire(1, 2," framwork flutter ", " comment créer des application android et ios avec flutter "," Paris ","09/04/2024 ", "04/04/2024");

echo $sem->getId();
echo $sem->getInter();
echo $sem->getTitre();
echo $sem->getResume();
echo $sem->getLieu();
echo $sem->getDate();
echo $sem->getDateJour();
