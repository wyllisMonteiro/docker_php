<?php
    $HOST = 'mysql:host=db;dbname=sys';
    $USER = 'root';
    $PASS = 'root';

    try {
        $dbh = new PDO($HOST, $USER, $PASS);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
?>