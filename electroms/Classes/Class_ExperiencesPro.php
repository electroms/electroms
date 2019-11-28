<?php
//Création de la classe Experience Pro + Déclaration des attributs
class ExperiencesPro {
    protected $entreprise;
    protected $fonction;
    protected $startDate;
    protected $endDate;
//Création du constructeur
    public function __construct($entreprise,$fonction,$startDate,$endDate) {
        $this->entreprise = $entreprise;
        $this->fonction = $fonction;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
//Déclaration des méthodes    
    public function afficheEntreprise() {
        return $this->entreprise;
    }
    public function afficheFonction() {
        return $this->fonction;
    }
    public function afficheStartDate() {
        return $this->startDate;
    }
    public function afficheEndDate() {
        return $this->endDate;
    }
    public function printCV(){
            
            $CVhtml =
            "<html><head><h1 style='text-decoration: underline'> ".$this->entreprise."
             </h1>
            "."fonction : ".$this->fonction."<br>".
            " startDate : ".$this->startDate."<br>".
            " endDate :".$this->endDate."</a><br>".
            "<br><br><br></head></html>";
    return $CVhtml;
    }
}