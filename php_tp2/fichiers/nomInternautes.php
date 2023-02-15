<?php
$Emplacement = "nomInternautes.txt";
if (file_exists($Emplacement)) {
    $lines = file($Emplacement);
    $count = count($lines);
    echo "<b>Nbr de lignes : ".$count."</b><br /><br />";
    foreach ($lines as $line_num => $line) {
			echo $line."<br>";
    }
}
else {
    echo "Le fichier n'existe pas";
}

?>