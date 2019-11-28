<?php

require 'Classes/Class_Adresse.php';
require 'Classes/Class_User.php';
require 'Classes/Class_Etudiant.php';
require 'Classes/Class_Formateur.php';
require 'Classes/Class_ExperiencesPro.php';
require 'Classes/Class_SoftSkills.php';
require 'Classes/Class_Formation.php';
require 'Classes/Class_Formation_HumanBooster.php';
require 'Classes/Class_Cours.php';

//Connexion a la base de donnée
try
{
    //$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $db = new PDO('mysql:host=localhost;dbname=cours2_sql', 'root', '');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}
// On émet une alerte à chaque fois qu'une requête a échoué.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
// On récupère tout le contenu de la table
$sql = $db->query('SELECT id, nom, cours, typeOf  FROM formateur');
// On affiche chaque entrée une à une
while ($formateurSql = $sql->fetch())
{
    $formateur = new Formateur($formateurSql["nom"],$formateurSql["cours"],$formateurSql["typeOf"]);
    //print_r($student);
    echo $formateur->printFormateur();
}