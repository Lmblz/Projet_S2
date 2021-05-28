<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_s2', 'root', 'root');

if (isset($_SESSION['id_account_users']) AND $_SESSION['id_account_users'] > 0) {
    $getid = intval($_SESSION['id_account_users']);
    $requser = $bdd -> prepare('SELECT * FROM users WHERE id_account_users = ?');
    $requser -> execute(array($getid));
    $userinfo = $requser -> fetch();

if (isset($_SESSION['id_account_users'])) {
    $requser = $bdd -> prepare("SELECT * FROM users WHERE id_account_users = ?");
    $requser -> execute(array($_SESSION['id_account_users']));
    $user = $requser -> fetch();
    if (isset($_POST['newusername']) AND !empty($_POST['newusername']) AND $_POST['newusername'] != $user['username_users']) {
        $newusername = htmlspecialchars($_POST['newusername']);
        $insertusername = $bdd -> prepare("UPDATE users SET username_users = ? WHERE id_account_users = ?");
        $insertusername -> execute(array($newusername, $_SESSION['id_account_users']));
        header("Location: profil_app.php?id=".$_SESSION['id_account_users']);
    }
    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['e_mail_users']) {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $bdd->prepare("UPDATE users SET e_mail_users = ? WHERE id_account_users = ?");
        $insertmail->execute(array($newmail, $_SESSION['id_account_users']));
        header('Location: profil_app.php?id='.$_SESSION['id_account_users']);
    }
    if(isset($_POST['newpassword1']) AND !empty($_POST['newpassword1']) AND isset($_POST['newpassword2']) AND !empty($_POST['newpassword2'])) {
        $password1 = sha1($_POST['newpassword1']);
        $password2 = sha1($_POST['newpassword2']);
        if ($password2 == $password1) {
            $insertpassword = $bdd -> prepare("UPDATE users SET password_users = ? WHERE id_account_users = ?");
            $insertpassword -> execute(array($password1, $_SESSION['id_account_users']));
            header('Location: profil_app.php?id='.$_SESSION['id_account_users']);
        }
        else {
            $msg = "Vos 2 mdp doivent être identiques";
        }
    }
    if (isset($_POST['newusername']) AND $_POST['newusername'] == $user['username']) {
        header('Location: profil_app.php?id='.$_SESSION['id_account_users']);

    }
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
                color: white;
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
                font-weight: lighter;
            }
            button {
                font-family: "Archivo Narrow", sans-serif;
                font-size: 14px;
                margin: 10px;
                height: 24px;
                width: 146px;
            }
            form input {
                background-color: #0F0426;
                border: none;
            }
            form::placeholder {
                color: white;
            }
        </style>
    </head>
    <body>
    <header>
        <img src="img/logo_blanc_sanstxt.png" alt="Logo Blanc Save Hit">
        <h2>Profil de <?php echo $userinfo['firstname_users']; ?></h2>
    </header>
    <div class="top" align="center">
        <h3>Modifier mon profil</h3>
        <form method="POST" action="">
            <label>Nom d'utilisateur</label>
            <input type="text" name="newusername" placeholder="Nom d'utilisateur" value="<?php echo $user['username_users'] ?>" style="font-color:white"><br/>
            <label>Adresse mail</label>
            <input type="text" name="newmail" placeholder="Adresse mail" value="<?php echo $user['e_mail_users'] ?>"><br/>
            <label>Mot de passe</label>
            <input type="password" name="newpassword1" placeholder="Nouveau password"><br/>
            <label>Confirmez le mot de passe</label>
            <input type="password" name="newpassword2" placeholder="Nouveau password"><br/>
            <input type="submit" value="Mettre à jour"><br/>
        </form>
        <?php if(isset($msg)) echo $msg; ?>
    </div>
    </body>
    </html>
    <?php

}
else {
    header("Location: connexion_app.php");
}
}
?>