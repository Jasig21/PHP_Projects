<!DOCTYPE html>
<html>
    <body>

        <?php

        //17.
            /* 
            $tab = array();
            for ($i=0; $i<10; $i++) {
                for ($j = 0; $j<15; $j++) {
                    $tab[$i][0] = 0;
                    if ($j%2 ==0) {
                        $tab[$i][$j] =0;
                    else
                        $tab[$i][$j] =1;
                }
            }
            echo "</table></div>";
            print_r($tab);
            */


            echo "tableau 1 : </br>";
            // veut faire affichage html du tableau en même temps
            $tab = array();
            echo "<div><table border=\"1\">";
            for ($i=0; $i<10; $i++) {
                echo "<tr>";
                for ($j = 0; $j<15; $j++) {
                    if ($j%2 ==0) {             //regarde si on est dans une colonne paire
                        $tab[$i][$j] =0;
                        echo "<td>",$tab[$i][$j],"</td>";
                    }
                    else {
                        $tab[$i][$j] =1;
                        echo "<td>",$tab[$i][$j],"</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table></div>";

            //-----------------------------------

            //passe en fonction
            //15 et 10 deviennent des variables
            // si passe pas de parametre, rentre des parametres par defaut

            //18.

            function remplirTableau($nbLigne, $nbCol){
                $tab = array();
                echo "<div><table border=\"1\">";
                for ($i=0; $i<$nbLigne; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j<$nbCol; $j++) {
                        if ($j%2 ==0) {             //regarde si on est dans une colonne paire
                            $tab[$i][$j] =0;
                            echo "<td>",$tab[$i][$j],"</td>";
                        }
                        else {
                            $tab[$i][$j] =1;
                            echo "<td>",$tab[$i][$j],"</td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table></div>";
            }
            echo "tableau 2 : </br>";
            remplirTableau(3,5);

        ?>

    </body>
</html>