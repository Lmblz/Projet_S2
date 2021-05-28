<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_s2', 'root', 'root');

if(isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $date_of_birth = htmlspecialchars($_POST['date_of_birth']);

    if(!empty($_POST[pseudo]) AND !empty($_POST[mail]) AND !empty($_POST[mail2]) AND !empty($_POST[password]) AND !empty($_POST[password2]) AND !empty($_POST[firstname]) AND !empty($_POST[lastname]) AND !empty($_POST[date_of_birth])) {

        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255) {
            if ($mail == $mail2) {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd -> prepare ("SELECT * FROM users WHERE e_mail_users = ?");
                    $reqmail -> execute (array($mail));
                    $mailexist = $reqmail-> rowCount();
                    if($mailexist == 0) {
                        if ($password == $password2) {
                            $insertmbr = $bdd->prepare("INSERT INTO users (username_users, e_mail_users, password_users, name_users, firstname_users, date_of_birth_users) VALUES(?, ?, ?, ?, ?, ?)");
                            $insertmbr -> execute(array($pseudo, $mail, $password, $firstname, $lastname, $date_of_birth));
                            $erreur = "Votre compte a bien été créé ! <br /><a href=\"connexion_app.php\">Me connecter</a>";
                        } else {
                            $erreur = "Vos mots de passe ne correspondent pas";
                        }
                    }
                    else {
                        $erreur = "Adresse mail déjà utilisée";
                    }
                }
                else {
                    $erreur = "Votre adresse mail n'est pas valide";
                }
            }
            else {
                $erreur = "Vos adresse mail ne correspondent pas";
            }
        }
        else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
        }
    }
    else {
        $erreur = "Tous les champs doivent être complétés";
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
        .inscription {
            display: flex;
            align-items: center;
            height: 70%;
        }
        header img {
            margin-top: 50px;
        }
        .erreur {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <img src="img/logo_blanc.png" alt="Logo Save Hit blanc">
</header>
<div class="inscription">
    <br /><br />
    <form method="POST" action ="">
        <table>
            <tr>
                <td align="right">
                    <label for="pseudo"><img src="img/user.png"></label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail"><img src="img/email.png"></label>
                </td>
                <td>
                    <input type="email" placeholder="Votre mail" name="mail" id="mail" value="<?php if(isset($mail)) { echo $mail; } ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail2"><img src="img/email.png"></label>
                </td>
                <td>
                    <input type="email" placeholder="Confirmez votre mail" name="mail2" id="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="password"><img src="img/padlock.png"></label>
                </td>
                <td>
                    <input type="password" placeholder="Mot de passe" name="password" id="password" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="password2"><img src="img/padlock.png"></label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmez mot de passe" name="password2" id="password2" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="firstname"><img src="img/id-card.png"></label>
                </td>
                <td>
                    <input type="text" placeholder="Prénom" name="firstname" id="firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="lastname"><img src="img/id-card.png"></label>
                </td>
                <td>
                    <input type="text" placeholder="Nom de famille" name="lastname" id="lastname" value="<?php if(isset($lastname)) { echo $lastname; } ?>"/>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="date_of_birth"><img src="img/calendar.png"></label>
                </td>
                <td>
                    <input type="date" placeholder="Date de naissance" name="date_of_birth" id="date_of_birth" value="<?php if(isset($date_of_birth)) { echo $date_of_birth; } ?>" max="2020-01-01" min="1900-01-01"/>
                </td>
            </tr>
            <tr>
                <td>
                <td align="center">
                    <br>
                    <input type="submit" name="forminscription" value="S'inscrire" />
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
        </table>
    </form>

</div>
</body>
</html>