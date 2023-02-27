<?php require_once("bdd_con.php") ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="" medhot="POST">
        <input type="email"     name="email"              placeholder="email"><br><br>
        <input type="password"  name="password"           placeholder="password"><br><br>
        <input type="password"  name="confirmer_password" placeholder="confirmer password"><br><br>
        <input type="submit"    value="connexion"> 

    </form>
</body>
</html>