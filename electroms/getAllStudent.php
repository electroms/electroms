<?php

require 'Classes/adresse.class.php';
require 'Classes/user.class.php';
require 'Classes/student.class.php';
require 'Classes/formateur.class.php';
require 'Classes/experiences.class.php';
require 'Classes/softSkills.class.php';
require 'Classes/formation.class.php';
require 'Classes/cours.class.php';

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
$sql = $db->query('SELECT id, nom, cours, typeOf  FROM etudiant');
// On affiche chaque entrée une à une
while ($studentSql = $sql->fetch())
{
    $student = new Etudiant($studentSql["id"],$studentSql["nom"],$studentSql["cours"],$studentSql["typeOf"]);
    //print_r($student);
    echo $student->printStudent();
}