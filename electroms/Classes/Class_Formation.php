<?php
//Création de la classe Formation + Déclaration des attributs
class Formation {
    protected $ecole;
    protected $cours;
    protected $name;
    protected $formationUser;
//Création du constructeur
    public function __construct($ecole,$cours,$name) {
        $this->ecole = $ecole;
        $this->cours = $cours;
        $this->name = $name;
        $this->formationUser = array();
    }
//Déclaration des méthodes
    public function afficheFormation() {
        return $this->ecole.$this->cours.$this->name;
    }
    public function addFormationUser($user) {
        $this->formationUser[] = $user;
    }
    public function printCV(){
            
            $CVhtml =
            "<html><head><h1 style='text-decoration: underline'> ".$this->ecole." 
             </h1>
                <br>".
            " Formation : ".$this->cours."<br>".
            " Nom : <a href='https://www.linkedin.com/in/pierre-henry-barge/?subject=Questions'>".$this->name."</a><br>
                <br></head></html>";
    return $CVhtml;
    }
}