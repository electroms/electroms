<?php
//Créatrion de la classe PDO
class pdo {
    protected $pdo;
//Variable PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cours2_sql', 'root' , '');
}
//Requete de test
catch (PDOException $exception) {
    $query = $pdo->query("INSERT INTO Etudiant (nom, cours, typeOf)
	values(Pierre-Henry', 'JAVA', 'Homme');");
}
?>