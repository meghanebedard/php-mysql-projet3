<!DOCTYPE html>
<html>
    <head>
        <title>Créer un compte</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="center">
            <?php
            include "header.php";
            ?>
            <h2>Veuillez vous connecter</h2>
        </div>
        <form method="post" action="register.php">
            <div class="champ">
                <label>Username : </label>
                <input class="field" type="text" name="username" pattern="[A-Za-z0-9]{2,30}" required/>
            </div>
            <div class="champ">
                <label>Mot de passe : </label>
                <input class="field" type="text" name="motdepasse" placeholder="**********" pattern="[A-Za-z0-9 !@#$%?&*()éèà^.,+=_-]{2,30}" required/>
            </div>
            <div class="champ boutton">
                <input class="btn" type="submit" name="login" value="Se connecter" />
            </div>
            <div class="champ boutton">
                <input class="btn" type="submit" name="link" value="Créer un compte" onclick="location.href='register.php';" />
            </div>
        </form>
        <?php
        include "connexion.php";
        if (isset($_POST["register"])) {
            $username = $_POST["username"];
            $motdepasse = $_POST["motdepasse"];

            $registerAccount = $dbco->prepare(
            "INSERT INTO utilisateurs (nomComplet, username, codePostal, email, motDePasse)
            VALUES
            ('$nom', '$username', '$codepostal', '$email', '$motdepasse')
            ");
            $registerAccount -> execute();
        }
        ?>
        <?php
        include "footer.php";
        ?>
    </body>
</html> 