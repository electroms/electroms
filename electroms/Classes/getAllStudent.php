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

//$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $db = new PDO('mysql:host=localhost;dbname=cours2_sql', 'root', '');

// On émet une alerte à chaque fois qu'une requête a échoué.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
// On récupère tout le contenu de la table jeux_video
$sql = $db->query('SELECT Etu_id,Etu_nom,Etu_cours,Etu_typeOf, FROM etudiants');
// On affiche chaque entrée une à une
while ($studentSql = $sql->fetch())
{
    print_r($studentSql);
}