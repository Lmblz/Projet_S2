<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire à Save'Hit</title>
    <meta name="viewport" content="initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/s_inscrire.css">
</head>
<body>
    <header>
        <h1>Save'Hit</h1>
        <a href="index.php">
            <img src="img/logo noir.svg" alt="Logo Save'Hit">
        </a>
        <nav>
            <ul>
                <li class="a_propos"><a href="a_propos.html"><button>A propos</button></a></li>
                <li class="s_inscrire"><a href="s_inscrire.php"><button>S'inscrire</button></a></li>
                <li class="ouvrir"><a href="ouvrir.php"><button>Ouvrir Save'Hit</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="img/mock_up_profil.png" alt="Mock-up de la fenêtre de profil">
        <div class="content">
            <div class="form">
                <fieldset class="infos_compte">
                    <label for="mail">Adresse e-mail</label><input name="mail" id="mail" type="email">
                    <label for="password">Mot de passe</label><input name="password" id="password" type="password">
                    <label for="password_confirm">Confirmer mot de passe</label><input name="password_confirm" id="password_confirm" type="password">
                    <label for="username">Nom d'utilisateur</label><input name="usernam" id="username" type="text">
                </fieldset>
                <fieldset class="infos_user">
                    <label for="name">Nom</label><input name="name" id="name" type="text">
                    <label for="firstname">Prénom</label><input name="firstname" id="firstname" type="text">
                    <label for="date_birth">Date de naissance</label><input name="date_birth" id="date_birth" type="date">
                    <p>* Tous les champs sont obligatoires</p>
                </fieldset>
            </div>
            <div>
                <a href="inscription_app.php"><button id="s_inscire">S'inscrire</button></a>
                <p>Vous pouvez ouvrir l'application en cliquant ici :</p>
                <a href="homepage.php"><button id="acceder">Accéder à l'app</button></a>
            </div>
        </div>
    </main>
    <footer>
        <figure id="logo_footer">
            <img src="img/logo_blanc.svg" alt="Logo blanc Save'Hit">
        </figure>
        <p>
            Projet réalisé dans le cadre pédagogique au département MMi de Montbéliard.
        </p>
        <figure id="reseaux_sociaux">
            <img src="img/twitter.svg" alt="Twitter Save'Hit">
            <img src="img/instagram.svg" alt="Instagram Save'Hit">
            <img src="img/youtube.svg" alt="Youtube Save'Hit">
            <img src="img/facebook.svg" alt="Facebook Save'Hit">
            <figcaption>
                Réseaux sociaux de Save'Hit
            </figcaption>
        </figure>
        <span>
                Copyright 2021 - <a href="#">Mentions légales</a> - <a href="#">Conditions d'utilisations</a>
            </span>
    </footer>
</body>
</html>
