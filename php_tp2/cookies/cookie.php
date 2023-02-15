<?php 
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['mdp'] = $_POST['mdp'];

setcookie ("nom",$_POST["nom"],time()+ 3600);
setcookie ("prenom",$_POST["prenom"],time()+ 3600);
setcookie ("mdp",$_POST["mdp"],time()+ 3600);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookies</title>
</head>
<body>
	<?php
		// On récupère nos variables de session
		if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['mdp'])) {
			echo 'Voici les variables de session <br>';
			echo 'Votre nom est <b>'.$_SESSION['nom'].'</b> , votre prénom est <b>'.$_SESSION['prenom'].'</b> et votre mot de passe est <b>'.$_SESSION['mdp'].'</b>.<br><br>';
		}
		else {
			echo 'Les variables de session ne sont pas déclarées.';
		}

		if (isset($_COOKIE['nom']) && isset($_COOKIE['prenom']) && isset($_COOKIE['mdp'])) {
			echo 'Voici les cookies enregistrés : <br>';
			echo $_COOKIE['nom'].'<br>';
			echo $_COOKIE['prenom'].'<br>';
			echo $_COOKIE['mdp'].'<br><br>';
		}
		else {
			echo 'Les variables de cookies ne sont pas déclarées.';
		}
	
		//Modification de la valeur d'un cookie
		setcookie ("prenom","Emilie");
		echo 'Voici un cookie modifié : <br>';
		echo $_COOKIE['prenom'];
	?>
</body>
</html>