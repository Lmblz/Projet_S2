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
            justify-content: center;
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
            position: sticky;
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
        li {
            list-style: none;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        li {
            width: 150px;
            height: 150px;
            margin: 10px;
            background-color: #7668A6;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
        h4 {
            border-top: solid white 1px;
            padding-top: 10px;
        }
        body section section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        body {
            text-align: center;
        }
    </style>
</head>
    <header>
        <img src="img/logo_blanc_sanstxt.png" alt="Logo Blanc Save Hit">
        <h2>Découvrir</h2>
    </header>
    <h3>Venez découvrir les titres qui vons plairons et passerons l'ensemble de vos journées à vos côtés</h3>
    <section class="rock">
        <h4>Rock</h4>
        <ul>
            <li>
               The Beattles
            </li>
        </ul>
        <ul>
            <li>
                The Rolling Stones
            </li>
        </ul>
        <ul>
            <li>
                Linkin Park
            </li>
        </ul>
        <ul>
            <li>
                Pink Floyd
            </li>
        </ul>
        <ul>
            <li>
                The doors
            </li>
        </ul>
    </section>
    <section class="pop">
        <h4>Pop</h4>
        <ul>
            <li>
                Michael Jackson
            </li>
        </ul>
        <ul>
            <li>
                Madonna
            </li>
        </ul>
        <ul>
            <li>
                Madonna
            </li>
        </ul>
        <ul>
            <li>
                Britney Spears
            </li>
        </ul>
        <ul>
            <li>
                Bruno Mars
            </li>
        </ul>
        <ul>
            <li>
                ABBA
            </li>
        </ul>
    </section>
    <section class="punk">
        <h4>Punk</h4>
        <ul>
            <li>
                Iggy Pop
            </li>
        </ul>
        <ul>
            <li>
                The Clash
            </li>
        </ul>
        <ul>
            <li>
                The Offspring
            </li>
        </ul>
        <ul>
            <li>
                Green Day
            </li>
        </ul>
        <ul>
            <li>
                The Velvet Underground
            </li>
        </ul>
    </section>
    <section class="Jazz">
        <h4>Jazz</h4>
        <ul>
            <li>
                Louis Armstrong
            </li>
        </ul>
        <ul>
            <li>
                Billie Holiday
            </li>
        </ul>
        <ul>
            <li>
                Django Reinhardt
            </li>
        </ul>
        <ul>
            <li>
                Miles Davis
            </li>
        </ul>
        <ul>
            <li>
                John Coltrane
            </li>
        </ul>
    </section>
    <section class="rap">
        <h4>Rap</h4>
        <ul>
            <li>
                Freeze Corleone
            </li>
        </ul>
        <ul>
            <li>
                Damso
            </li>
        </ul>
        <ul>
            <li>
                Eminem
            </li>
        </ul>
        <ul>
            <li>
                Tupac
            </li>
        </ul>
        <ul>
            <li>
                SCH
            </li>
        </ul>
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
