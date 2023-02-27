<?php
// Verification de la presence des champs dans le formulaire de connexion
if (isset($_POST['submit']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['confirmer_passord'])) {
    // je vais declarer mes variables
    $email      = trim(htmlspecialchars($_POST['email']));
    $password   = trim(htmlspecialchars($_POST['password']));
    $confirmer  = trim(htmlspecialchars($_POST['confirmer_password']));

    // on verifie si le champs est vide
    if (empty($email) OR empty($password) OR empty($confirmer)) {
        echo "Remplissez tous les champs";
    }
}

