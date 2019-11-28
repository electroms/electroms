<?php
//Création de la classe SoftSkills et des attributs
class SoftSkills { 
    protected $name;
    
    private $personnesCompetentes;
        
    private static $count = 0;
    
//Création du constructeur
    public function __construct($name) {
        $this->name = $name; 
        
        self::$count ++;
    }
//Déclaration des méthodes
    public function addPersonnesCompetentes($peronnesCompetentes){
         $this->personnesCompetentes = $personnesCompetentes;
    }
    public function afficheName(){
        return $this->name;
    }
}