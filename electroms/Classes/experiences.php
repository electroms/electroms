<?php

Class Experiences {
    protected $_id_experience;
    protected $_nom_experience;
    protected $_date_debut_experience;
    protected $_ville_experience;
    protected $_etablissement_experience;
    
    public function __construct($id_experience, $nom_experience, $date_debut_experience, $ville_experience, $etablissement_experience) {
       
        $this->_id_experience = $id_experience;
        $this->_nom_experience = $nom_experience;
        $this->_date_debut_experience = $date_debut_experience;
        $this->_ville_experience = $ville_experience;
        $this->_etablissement_experience = $etablissement_experience;
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
