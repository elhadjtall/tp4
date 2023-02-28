<?php
$serveurname = 'localhost';
$username = 'root';
$password = '';
$bdd_con = new PDO("mysql:host=$serveurname;dbname=tp4", $username, $password);
$bdd_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "connexion reussi";
?>