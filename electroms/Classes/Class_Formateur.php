<?php
//Création de la classe formateur + Déclaration des attributs
class Formateur extends User {
    protected $name;
    protected $cours;
    protected $typeOf;
//Création du constructeur et instantiation du constructeur de la classe parente
    public function __construct($nom,$cours,$typeOf,$birthdate,$email,$sexe) {
        parent:: __construct($nom,$cours,$typeOf,$birthdate,$email,$sexe);
            $this->typeOf = "formateur";
    }
//Déclaration des méthodes
    public function afficheName() {
        return $this->nom;
    }
    public function afficheCours() {
        return $this->cours;
    }
        
    public function enregistrer() {
        return $sql = $db->query;   
    }
    public function printFormateur(){
            
            $Formateurhtml =
"<html>
    <head>
    <table>".
            "<th> Name : ".$this->nom."</th>".
            "<th> Cours : ".$this->cours."</th>".
            "<th> TypeOf : ".$this->typeOf."</th>".
    "</table>
    </head>
</html>";
    
    return $Formateurhtml;
    }
}