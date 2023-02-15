<?php 
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['mdp'] = $_POST['mdp'];

// On récupère nos variables de session
if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['mdp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre nom est <b>'.$_SESSION['nom'].'</b> , votre prénom est <b>'.$_SESSION['prenom'].'</b> et votre mot de passe est <b>'.$_SESSION['mdp'].'<b/>.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="./logout.php">Déconnexion</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>