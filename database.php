<?php
    $host = "localhost";
    $db = "miumiu";
    $user = "root";
    $pass = "";

    try {
        $database = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch (\PDOException $ex) {
        die("Erreur : " . $ex->getMessage());
    }

    $requete = $database->prepare('SELECT * FROM article');

    $requete->execute();

    $article = $requete->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {  
        
    }
?>