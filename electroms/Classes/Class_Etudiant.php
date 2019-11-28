<?php
//Création de la classe étudiant + Déclaration des attributs
class Etudiant {
    protected $nom;
    protected $cours;
    protected $typeOf;
    
//Création du constructeur et instantiation du constructeur de la classe parente
    public function __construct($nom,$cours,$typeOf) {
            $this->typeOf = "etudiant";
    }
//Déclaration des méthodes
    public function afficheName() {
        return $this->name;
    }
    public function afficheCours() {
        return $this->cours;
    }
    public function enregistrer() {
        return $sql = $db->query;   
    }
    public function printStudent(){
            
            $Studenthtml =
"<html>
    <head>
    <table>".
            "<th> Name : ".$this->nom."</th>".
            "<th> Cours : ".$this->cours."</th>".
            "<th> TypeOf : ".$this->typeOf."</th>".
    "</table>
    </head>
</html>";
    
    return $Studenthtml;
    }
}
?>
