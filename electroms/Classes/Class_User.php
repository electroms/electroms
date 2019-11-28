<?php
//Création de la classe User + Déclaration des attributs
class User {
    protected $nom;
    protected $birthdate;
    protected $sexe;
    protected $email;
    protected $softskills;
    protected $formation = array();
    protected $experiences = array();
    protected $adresse;
    

//Création du constructeur
    public function __construct($nom,$cours,$typeOf,$birthdate,$email,$sexe){
            $this->nom = $nom;
            $this->cours = $cours;
            $this->typeOf = $typeOf;
            $this->birthdate = $birthdate;
            $this->email = $email;
            $this->sexe = $sexe;
    }
//Déclaration des méthodes    
    public function afficheName() {
        return $this->nom;
    }   
    public function afficheBirthDate() {
        return $this->birthdate;
    }
    public function afficheSexe() {
        return $this->sexe;
    }
    public function afficheEmail() {
        return $this->email;
    }
    public function afficheSoftSkill() {
        return $this->softskills;
    }
    public function afficheFormation() {
        return $this->formation;
    }
    public function afficheExperiencePro() {
        return $this->experiences;
    }
//appel à la fonction addFormation pour ajouter des formations aux Users
    public function addFormation($formation) {
        $this->formation[] = $formation;
    }
    public function addAdresse($toto) {
            return $this->adresse = $toto;
    }
    public function addSkill($competences) {
        return $this->skills = $competences;
    }
//On appel la fonction printCV pour afficher le texte correctement
    public function printCV(){
            
            $CVhtml =
"<html><head><h1 style='text-decoration: underline'> ".$this->nom." 
             </h1>
            <br>".
            " Email : ".$this->email."<br>".
            " Date de naissance :".$this->birthdate."<br>
            TypeOf : ".$this->typeOf."<br><br><br></head></html>";
    return $CVhtml;
    } 
}
