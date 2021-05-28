<?php

session_start();

include_once "configpdo.php";

if (isset($_SESSION['id_account_users']) AND $_SESSION['id_account_users'] > 0) {
    $getid = intval($_SESSION['id_account_users']);
    $requser = $bdd -> prepare('SELECT * FROM users WHERE id_account_users = ?');
    $requser -> execute(array($getid));
    $userinfo = $requser -> fetch();
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon profil | Save'Hit</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_app.css">
    <style>
        body {
            background-color: #0F0426;
            background-image: none;
        }
        header {
            display: flex;
        }
        header h2 {
            margin-top: 70px;
            margin-left: 10px;
            font-family: "Julius Sans One", sans-serif;
        }
        .top {
            width: 100%;
            margin-top: 20px;
        }
        .top img {
            border-radius: 0;
        }
        h3 {
            font-family: "Julius Sans One", sans-serif;
            margin-bottom: 0;
            font-weight: lighter;
        }
        button {
            font-family: "Archivo Narrow", sans-serif;
            font-size: 14px;
            margin: 10px;
            height: 24px;
            width: 146px;
        }
        .left {
            background-color: #B8B0D9;
            height: 300px;
            width: 146px;
            opacity: 70%;
            border-radius: 5px;
        }
        .right {
            height: 300px;
            width: 146px;
            opacity: 70%;
        }
        .right .haut {
            background-color: #B8B0D9;
            height: 125px;
        }
        .right .bas {
            background-color: #B8B0D9;
            height: 100px;
        }
        .infos {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
        .infos * {
            border-radius: 5px;
        }
        .titles {
            font-family: "Julius Sans One", sans-serif;
            display: flex;
        }
        .titles h2 {
            font-weight: 20;
            opacity: 70%;
        }
        footer {
            background-color: #000000;
            width: 100%;
            display: flex;
            position: absolute;
            bottom: 0;
            padding: 3px 0;
            color: #B8B0D9;
        }
        footer figure {
            width: 125px;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        footer figure figcaption {
            font-family: "Julius Sans One", sans-serif;
            font-weight: lighter;
            font-size: 15px;
            width: 100%;
        }
        footer figure img {
            width: 20px;
            height: 20px;
        }
        a {
            text-decoration: none;
            color: #B8B0D9;
        }
    </style>
</head>
<body>
<header>
    <img src="img/logo_blanc_sanstxt.png" alt="Logo Blanc Save Hit">
    <h2>Profil de <?php echo $userinfo['firstname_users']; ?></h2>
</header>
<div  class="top" align="center">
    <img src="img/banneer.png" alt="Banière Save'Hit">
    <br />
    <h3><?php echo $userinfo['username_users']; ?></h3>
    <h3><?php echo $userinfo['e_mail_users']; ?></h3>
    <?php
    if(isset($_SESSION['id_account_users']) AND $userinfo['id_account_users'] == $_SESSION['id_account_users']) {
    ?>
    <br />
    <a href="edition_profil_app.php"><button>Editer votre profil</button></a>
    <a href="deconnexion_app.php"><button>Se déconnecter</button></a>
    <?php
    }
    ?>
    <div class="titles">
        <h2>Mes derniers favoris</h2>
        <h2>Ses genres préférés</h2>
    </div>

    <div class="infos">
        <div class="left">

        </div>
        <div class="right">
            <div class="haut">

            </div>
            <div class="titles">
                <h2 style="margin: 5px auto 5px auto; opacity: 100%" >Comptes suivis</h2>
            </div>
            <div class="bas">

            </div>
        </div>
    </div>
</div>
<footer class="nav">
    <a href="decouvrir_app.php">
        <figure>
            <img src="img/compass.png" alt="Logo découvrir">
            <figcaption>Découvrir</figcaption>
        </figure>
    </a>
    <a href="rechercher_app.php">
    <figure>
        <img src="img/loupe.png" alt="Logo découvrir">
        <figcaption>Rechercher</figcaption>
    </figure>
    </a>
    <a href="profil_app.php?id=<?php $_SESSION['id_account_users'] ?>">
        <figure>
            <img src="img/user.png" alt="Logo découvrir">
            <figcaption>Utilisateur</figcaption>
        </figure>
    </a>
</footer>
</body>
</html>
<?php

}

?>