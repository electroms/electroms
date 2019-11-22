<?php
//Création de la classe SoftSkills et des attributs
class SoftSkills { 
    protected $_nom;
    
    private $_personnesCompetentes;
        
    private static $_count = 0;
    
//Création du constructeur
    public function __construct($nom, $personnesCompetentes) {
        $this->_nom = $nom;
        $this->_personnesCompetentes = $personnesCompetentes;
        
        self::$count ++;
    }
//Déclaration des méthodes
    public function addPersonnesCompetentes($peronnesCompetentes){
         $this->_personnesCompetentes = $personnesCompetentes;
    }
    public function afficheNom(){
        return $this->_nom;
    }
}