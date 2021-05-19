<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', 'root');

if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.php?id=".$_SESSION['id']);
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription | Save'Hit</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_app.css">
    <style>
        header img {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<header>
    <img src="img/logo_blanc.png" alt="Logo Save Hit blanc">
</header>
<div align="center">
    <h2>Connexion</h2>
    <br /><br />
    <form method="POST" action="">
        <table
        <input type="email" name="mailconnect" placeholder="Mail" />
        <input type="password" name="mdpconnect" placeholder="Mot de passe" />
        <br /><br />
        <input type="submit" name="formconnexion" value="Se connecter !" />
    </form>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
</div>
</body>
</html>
