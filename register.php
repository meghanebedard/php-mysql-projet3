<!DOCTYPE html>
<html>
    <head>
        <title>Créer un compte</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Veuillez créer un compte</h2>
        <form method="post" action="register.php">
            <div class="champ">
                <label>Nom complet : </label>
                <input class="field" type="text" name="nom" pattern="[A-Za-z -]{2,30}" required/>
            </div>
            <div class="champ">
                <label>Username : </label>
                <input class="field" type="text" name="username" pattern="[A-Za-z0-9]{2,30}" required/>
            </div>
            <div class="champ">
                <label>Code postal : </label>
                <input class="field" type="text" name="codepostal" placeholder="A1A 1A1" pattern="[A-Z 0-9]" min="7" max="7" required/>
            </div>
            <div class="champ">
                <label>Email : </label>
                <input class="field" type="text" name="email" placeholder="@hotmail.com" pattern="[A-Za-z -]{2,50}" required/>
            </div>
            <div class="champ">
                <label>Mot de passe : </label>
                <input class="field" type="text" name="motdepasse" placeholder="**********" pattern="[A-Za-z0-9 !@#$%?&*()éèà^.,-]{2,30}" required/>
            </div>
            <div class="champ boutton">
                <input class="btn" type="submit" name="register" value="S'enregistrer" />
            </div>
        </form>
    </body>
</html> 