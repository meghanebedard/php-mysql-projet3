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
            <h2>Veuillez créer un compte</h2>
        </div>
        <form method="post" action="register.php">
            <div class="champ">
                <label>Nom complet : </label>
                <input class="field" type="text" name="nom" pattern="[A-Za-z èéà^-]{2,30}" required/>
            </div>
            <div class="champ">
                <label>Username : </label>
                <input class="field" type="text" name="username" pattern="[A-Za-z0-9]{2,30}" required/>
            </div>
            <div class="champ">
                <label>Code postal : </label>
                <input class="field" type="text" name="codepostal" placeholder="A1A 1A1" pattern="[A-Z 9-0]" min="7" max="7" required/>
            </div>
            <div class="champ">
                <label>Email : </label>
                <input class="field" type="text" name="email" placeholder="@hotmail.com" pattern="[A-Za-z @._-]{2,50}" required/>
            </div>
            <div class="champ">
                <label>Mot de passe : </label>
                <input class="field" type="text" name="motdepasse" placeholder="**********" pattern="[A-Za-z0-9 !@#$%?&*()éèà^.,+=_-]{2,30}" required/>
            </div>
            <div class="champ boutton">
                <input class="btn" type="submit" name="register" value="S'enregistrer" />
            </div>
        </form>
        <?php
        include "connexion.php";
        if (isset($_POST["register"])) {
            $nom = $_POST["nom"];
            $username = $_POST["username"];
            $codepostal = $_POST["codepostal"];
            $email = $_POST["email"];
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