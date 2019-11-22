<?php

Class Formation {
    protected $_id_formation;
    protected $_nom_formation;
    protected $_date_debut_formation;
    protected $_date_fin_formation;
    protected $_ville_formation;
    protected $_etablissement_formation;
    
    public function __construct($id_formation, $nom_formation, $date_debut_formation, $date_fin_formation, $ville_formation, $etablissement_formation ) {
       
        $this->_id_formation = $id_formation;
        $this->_nom_formation = $nom_formation;
        $this->_date_debut_formation = $date_debut_formation;
        $this->_date_fin_formation = $date_fin_formation;
        $this->_ville_formation = $ville_formation;
        $this->_etablissement_formation = $etablissement_formation;
    }
//Déclaration des méthodes
    public function afficheFormation() {
        return $this->id_formation.$this->nom_formation.$this->date_debut_formation.$this->date_fin_formation.$this->ville_formation.$this->etablissement_formation;
    }
}