<?php

class student extends users {
    protected $_id;
    protected $_nom;
    protected $_cours;
    
//Création du constructeur et instantiation du constructeur de la classe parente
    public function __construct($id,$nom,$cours,$typeOf) {
        parent:: __construct($id,$nom,$cours,$typeOf);
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
        return $this->typeOf;
    }
    public function printStudent(){
       
        $this->_id;
        $this->_nom;
        $this->_cours;
        $this->_typeOf;
    }
}
