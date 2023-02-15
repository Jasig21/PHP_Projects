<?php  
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];


// On récupère nos variables de session
if (isset($_POST['nom']) && isset($_POST['prenom']) ) {

	$fp = fopen('nomInternautes.txt', 'a');
	fwrite($fp, "$nom, $prenom \n");
	fclose($fp);
	echo "Le fichier a bien été mis à jour !";
}
else {
	echo 'Les variables ne sont pas déclarées.';
}

echo "<br>";
echo "<a href='nomInternautes.php'>Afficher le résultat</a>";
?>