<meta charset="utf-8" />

<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

session_start();

$bdd = new PDO('mysql:host=xx1e2.myd.infomaniak.com;dbname=xx1e2_projets2', 'xx1e2_projet_s2', 'yVKAVT!T3Pd5TX_');
//$bdd = new PDO('mysql:host=localhost; dbname=projet_s2', 'root', 'root');

$q = htmlspecialchars($_GET['q']);

if(isset($_GET['q']) AND !empty($_GET['q'])) {
    $artists = $bdd->query('SELECT name_artist FROM artist WHERE name_artist LIKE "%'.$q.'%" ORDER BY id_artist_artist DESC');
    if($artists->rowCount() == 0) {
        $artists = $bdd->query('SELECT name_artist FROM artist WHERE CONCAT(name_artist, period_artist, type_artist) LIKE "%'.$q.'%" ORDER BY id_artist_artist DESC');
    }
?>
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
            position: relative;
            height: 100vh;
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
        input {
            opacity: 50%;
            border-radius: 10px;
            padding: 2px 2px 2px 5px;
            font-family: "Julius Sans One", sans-serif;
            width: 100%;
            background-color: #7668A6;
            color: #FFFFFF;
            margin: 10px 0;
        }
        input:last-of-type {
            margin-top: 0;
        }
        input::placeholder {
            color: #FFFFFF;
            font-size: 10px;
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
    </style>
</head>
<body>
<header>
    <img src="img/logo_blanc_sanstxt.png" alt="Logo Blanc Save Hit">
    <h2>Découvrir</h2>
</header>
<form method="GET">
    <input type="search" name="q" placeholder="Rechercher un titre, un artiste, une époque, un album" />
    <input type="submit" value="Valider" />
</form>
<?php
if($artists->rowCount() > 0) { ?>
    <ul>
        <?php while($a = $artists->fetch()) { ?>
            <li>
               <?= $a['name_artist'] ?>
            </li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Aucun résultat pour: <p><?= $q ?>...
<?php }} ?>

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