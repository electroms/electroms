<?php

class Formateur extends users {
    protected $_id;
    protected $_nom;
    private $_prenom;
//Création du constructeur et instantiation du constructeur de la classe parente
    public function __construct($name,$birtdate,$sexe,$email,$softskills,$formation,$experiences) {
        parent:: __construct($name,$birtdate,$sexe,$email,$softskills,$formation,$experiences);
            $this->_id = $id;
            $this->_nom = $nom;
            $this->_prenom = $prenom;
    }
//Déclaration des méthodes
    public function afficheId() {
        return $this->id;
    }
    public function afficheNom() {
        return $this->nom;
    }
    public function affichePrenom() {
        return $this->prenom;
    }
}
