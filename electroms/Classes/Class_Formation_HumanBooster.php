<?php
//Création de la classe Formation HumanBooster
class FormationHumanBooster extends Formation {
    protected $cours;
    protected $formateur;
    protected $etudiant;
    protected $langageDeProgrammation;
    protected $planning;
    
//Création du constructeur
    public function __construct($cours,$formateur,$etudiant,$langageDeProgrammation,$planning) {
            $this->cours = $cours;
            $this->formateur = $formateur;
            $this->etudiant = $etudiant;
            $this->langageDeProgrammation = $langageDeProgrammation;
            $this->planning = $planning;
    }
//On appel la fonction printCV pour afficher le texte correctement
    public function printCV(){
            
            $CVhtml =
            "<html><head><h1 style='text-decoration: underline'> ".$this->cours." 
             </h1>
            <br>".
            " formateur : ".$this->formateur."<br>".
            " etudiant : <a href='https://www.electroms.com/'>".$this->etudiant."</a><br>
            Langage de Programmation : ".$this->langageDeProgrammation."<br><br><br></head></html>";
    return $CVhtml;
    }

}

    