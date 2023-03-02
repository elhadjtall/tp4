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
        <img src="logo.svg" alt="YMoney logo">
        </nav>
        
    </header>
    <div class="container">
    <div class="bloc1">
    <form action="" medhot="POST">
    <h1 id="con">Connexion</h1>
    <div class="aligner">
       <p><LAbel for="adresse">VOTRE ADRESSE E-MAIL</LAbel></p>
        <p><input type="email"     name="email"         ></p>
        <p><label for="motdepasse">VOTRE MOT DE PASSE</label></p>
        <p><input type="password"  name="password"      ></p>
        <p><label for="mtp">J'ai oublié mon mot de passe</label></p>
        <p><input type="submit"    name="submit"        value="CONTINUER"></p>
        <hr></hr>
        <p><label for="creer">JE VEUX CREER UN COMPTE</label></p>
     </div>
    </form>
    </div>
    <div class="bloc2">
        <p><h2 class="compte">Je veux créer un compte</h2></p>
    </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit']) AND isset($_POST['email'])){
    echo "il existe";
}


