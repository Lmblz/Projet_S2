<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Découvrir | Save'Hit</title>
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
        header h2, h3 {
            margin-top: 70px;
            margin-left: 10px;
            font-family: "Julius Sans One", sans-serif;
        }
        h3 {
            font-weight: lighter;
            font-size: 18px;
            margin: 20px 36px;
            text-align: center;
            border-bottom: #FFFFFF 1px solid;
            padding-bottom: 10px;
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
        <h2>Découvrir</h2>
    </header>
    <h3>Venez découvrir les titres qui vons plairons et passerons l'ensemble de vos journées à vos côtés</h3>
    <section class="rock">
        <h4>Rock</h4>
    </section>


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
