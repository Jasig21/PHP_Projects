<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
    <form action="cookie.php" method="post">
        <input type="text" name="nom" placeholder="Nom" value="<?php if(isset($_COOKIE["nom"])) { echo $_COOKIE["nom"]; } ?>">
        <br />
        <input type="text" name="prenom" placeholder="Prenom" value="<?php if(isset($_COOKIE["prenom"])) { echo $_COOKIE["prenom"]; } ?>">
        <br />
        <input type="password" name="mdp" placeholder="Mot de passe" value="<?php if(isset($_COOKIE["mdp"])) { echo $_COOKIE["mdp"]; } ?>">
        <br />
        <input type="submit" value="Connexion">
    </form>

</body>
</html>