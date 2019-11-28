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

//On crée un utilisateur de la class User
   $user = new User("Pierre-Henry","Systeme / Réseaux  / Développement","Etudiant","22/10/1982","mailinpro@gmail.com","Developpeur","Technicien");
    
echo " <div> <img class='fit-picture'
    src='tele.jpg' 
    alt='photo Barge Pierre-Henry' style='float:right'height=250 width=> </div>";
    //On crée un  utilisateur de la class Etudient
    $etudiant = new Etudiant("Pierre-Henry","Système/Réseaux/Développement","M","22/10/1982","Système/Réseaux/Développement","Homme","Technicien");
    //On crée un utilisateur de la class Formateur
    $formateur = new Formateur("Pierre","12/10/1989","M","toto@toto.com","Developpement","SupInfo","Gérant");
    //On crée une experience de la class Experience
    $experience = new ExperiencesPro("Sociétés Diverses","Technicien Support et Deploiement IT","2017","2019");
    //On crée une ecole de la class Formation
    $formation = new Formation("Human Booster","JAVA JEE et la programmation orientée objet","Pierre-Henry");
    //On crée un etudiant pour le tableau addFormation
    
    $adresse1 = new Adresse("4","rue du bel air","69008","Lyon","France");
    $adresse2 = new Adresse("6","chemin du loup","69003","Lyon","France");
    //On crée une formation Human booster
    $formationHumanBooster = new FormationHumanBooster("Developpement","Nicolas Chevalier, Pierre Toussin, Aurélien Delorme, Thomas Chevalier","Pierre-Henry","Java JEE, Hibernate, Spring, Php","13 semaines");
    
    $skills1 = new SoftSkills("php");
    $skills2 = new SoftSkills("Java");
    $skills3 = new SoftSkills("Reseau");
    $skills4 = new SoftSkills("Developpement");
    $skills5 = new Softskills("Gestion de Projet");
    
    
    $formateur->addskill($skills4);
    $formateur->addskill($skills3);
    $formateur->addskill($skills5);

    //tests via print_r et echo
    //print_r($user);
    //echo "<br><br>";
   // print_r($etudiant);
    //echo "<br><br>";
    
    //print_r($formateur);
    //echo "<br><br>";
    $formateur->addAdresse($adresse2);
    //print_r($experence);
    //echo "<br><br>";
    //print_r($formation);
    //echo "<br><br>";
    //print_r($etudiant);
    //echo "<br><br>";
    //print_r($etudiant);
    //echo "<br><br>";
    //print_r($formateur);
    //echo "<br><br>";
    //print_r($etudiant);
    //echo "<br><br>";
    //print_r($formateur);
    //echo "<br><br>";
    //print_r()
    echo $user->printCV();
    echo $formation->printCV();
    echo $experience->printCV();
    echo $formationHumanBooster->printCV();
?>
