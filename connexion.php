<?php require_once("bdd_con.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <header class="main-head">
        <nav>
        <h1 id="logo">YMONEY</h1>
        </nav>
        
    </header>
    <form action="" medhot="POST">
    <h1 id="con">Connexion</h1>
       <p><LAbel for="">VOTRE ADRESSE E-MAIL</LAbel></p>
        <p><input type="email"     name="email"         placeholder="email"></p>
        <p><label for="">VOTRE MOT DE PASSE</label></p>
        <p><input type="password"  name="password"      placeholder="password"></p>
        <p><label for="mtp">J'ai oublié mon mot de passe</label></p>
        <p><input type="submit"    name="submit"        value="CONTINUER"></p>
        <p><label for="creer">JE VEUX CREER UN COMPTE</label></p>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit']) AND issa($_POST['email'])){
    echo "il existe";
}


