<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body id="login">
    <div class="center">
        <?php
        include "header.php";
        ?>
        <h2>Veuillez vous connecter</h2>
    </div>
    <form method="post" action="login.php">
        <div class="champ">
            <label>Username : </label>
            <input class="field" type="text" name="username" pattern="[A-Za-z0-9]{2,30}" required />
        </div>
        <div class="champ">
            <label>Mot de passe : </label>
            <input class="field" type="password" name="motdepasse" placeholder="**********" pattern="[A-Za-z0-9 !@#$%?&*()éèà^.,+=_-]{2,30}" required />
        </div>
        <div class="boutton">
            <div class="champ">
                <input class="btn" type="submit" name="login" value="Se connecter" />
            </div>
            <div class="champ">
                <input class="btn" type="submit" name="link" value="Créer un compte" onclick="location.href='register.php';" />
            </div>
        </div>
    </form>
    <?php
    include "connexion.php";
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $motdepasse = $_POST["motdepasse"];

        $login = $dbco->prepare(
            "SELECT username, motDePasse, nomComplet FROM utilisateurs
            WHERE username = '$username' AND motDePasse = '$motdepasse'
            "
        );
        $login->execute();
        $resultat = $login->fetchAll(PDO::FETCH_ASSOC);
        $nom = $resultat[0]["nomComplet"];

        if (count($resultat) === 0) {
            echo ("Les informations entrées<br>ne correspondent à aucun compte sauvegardé.");
        } else {
            echo ("Bienvenue, $nom.<br>Vous pouvez désormait passer à l'<a href='accueil.php'>accueil</a>.");
        }

    }
    ?>
    <?php
    include "footer.php";
    ?>
</body>

</html>