<?php
//Création de la classe User + Déclaration des attributs
class users {
    protected $_nom;
    protected $_date_anniversaire;
    protected $_sexe;
    protected $_email;
    protected $_softskills;
    protected $_formation = array();
    protected $_experiences = array();
    protected $_adresse;
    

//Création du constructeur
    public function __construct($id,$nom,$cours,$typeOf){
            $this->_id = $id;
            $this->_nom = $nom;
            $this->_cours = $cours;
            $this->_typeOf = $typeOf;
    }
//Déclaration des méthodes    
    public function afficheId() {
        return $this->id;
    }   
    public function afficheNom() {
        return $this->nom;
    }
    public function afficheCours() {
        return $this->cours;
    }
    public function afficheTypeOf() {
        return $this->typeoOf;
    }
    
//appel à la fonction addFormation pour ajouter des formations aux Users
    public function addFormation($formation) {
        $this->formation[] = $formation;
    }
    public function addAdresse($adresses) {
            return $this->adresse = $adresses;
    }
    public function addSkill($competences) {
        return $this->skills = $competences;
    }
}