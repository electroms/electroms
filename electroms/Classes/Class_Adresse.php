<?php
//Création de la classe adresse et déclaration des attributs
class Adresse {
    protected $numero;
    protected $rue;
    protected $codePostal;
    protected $ville;
    protected $pays;
    
//Création du constructeur
    public function __construct($numero,$rue,$codePostal,$ville,$pays) {
        $this->numero = $numero;
        $this->rue = $rue;
        $this->codeostal = $codePostal;
        $this->ville = $ville;
        $this->pays = $pays;
        
    }
}