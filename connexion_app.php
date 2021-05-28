<?php
session_start();

include_once "configpdo.php";

if(isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM users WHERE e_mail_users = ? AND password_users = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id_account_users'] = $userinfo['id_account_users'];
            $_SESSION['username_users'] = $userinfo['username_users'];
            $_SESSION['e_mail_users'] = $userinfo['e_mail_users'];
            header("Location: profil_app.php?id=".$_SESSION['id_account_users']);
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
    <title>Connection | Save'Hit</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_app.css">
    <style>
        table tr>td:first-of-type img {
            margin-top: auto;
            margin-bottom: auto;
        }
        input {
            opacity: 50%;
            border-radius: 10px;
            padding: 2px 2px 2px 5px;
            font-family: "Julius Sans One", sans-serif;
            width: 120%;
            background-color: #7668A6;
            color: #FFFFFF;
        }
        input::placeholder {
            color: #FFFFFF;
        }
        table tr {
            margin-bottom: 5px;
        }
        .connexion {
            display: flex;
            align-items: center;
            height: 70%;
        }
        header img {
            margin-top: 50px;
        }
        .erreur {
            color: red;
        }
    </style>
</head>
<body>
<header>
    <img src="img/logo_blanc.png" alt="Logo Save Hit blanc">
</header>
<div class="connexion">
    <br /><br />
    <form method="POST" action="">
        <table>
            <tr>
                <td align="right">
                    <label for="mail"><img src="img/email.png"></label>
                </td>
                <td>
                    <input type="email" name="mailconnect" placeholder="Mail" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="password"><img src="img/padlock.png"></label>
                </td>
                <td>
                    <input type="password" name="mdpconnect" placeholder="Mot de passe" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="erreur"><?php
                    if(isset($erreur)) {
                        echo '<font-color ="red">'.$erreur.'</font>';
                    }
                    ?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="formconnexion" value="Se connecter" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    Pas encore membre ? <a href="inscription_app.php">S'inscrire</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
