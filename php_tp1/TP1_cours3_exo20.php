<!DOCTYPE html>
<html>
    <body>

        <?php

        //20.
        
        echo "tableau 1 : </br>";
            echo "<div><table border=\"1\">";
            $tab = array();
                echo "<tr>";
                echo "<td>",$tab[0][0] = "","</td>";
                echo "<td>",$tab[0][1] = "col1","</td>";
                echo "<td>",$tab[0][2] = "col2","</td>";
                echo "<td>",$tab[0][3] = "col3","</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>",$tab[1][0] = "A","</td>";
                echo "<td>",$tab[1][1] = "X","</td>";
                echo "<td>",$tab[1][2] = "0","</td>";
                echo "<td>",$tab[1][3] = "X","</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>",$tab[2][0] = "B","</td>";
                echo "<td>",$tab[2][1] = "X","</td>";
                echo "<td>",$tab[2][2] = "X","</td>";
                echo "<td>",$tab[2][3] = "0","</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>",$tab[3][0] = "C","</td>";
                echo "<td>",$tab[3][1] = "X","</td>";
                echo "<td>",$tab[3][2] = "0","</td>";
                echo "<td>",$tab[3][3] = "0","</td>";
                echo "</tr>";
            echo "</table></div>";

        //-----------------------------------

            //methode foreach()
            echo "tableau 2 : </br>";
            $tab = array (
                " " => array("col1", "col2","col3"),
                "A" => array("X", "O","X"),
                "B" => array("X", "X","O"),
                "C" => array("X", "O","O"),
            );
            //print_r($tab);
    
            echo "<div><table border=\"1\">";
            foreach($tab as $cle => $valeur) {
                echo "<tr>";
                echo "<td>".$cle."</td>";
                foreach($valeur as $valeur2){
                    if (strlen($valeur2)>1) {
                        echo "<th>".$valeur2."</th>";
                    }
                    else {
                        echo "<td>".$valeur2."</td>";
                    } 
                };
                echo "</tr>";
            }
            echo "</table></div>";

        //-----------------------------------

            //methode classique
            echo "tableau 3 isis:";
            function remplirTableau() {
                /* $tab = array();
                $tab[0][0]="&nbsp;";
                $tab[0][1]="col1";
                $tab[0][2]="col2";
                $tab[0][3]="col3";
                ...  */
                $tab = [
                   ["&nbsp;", "col1", "col2", "col3" ],
                   ["A","X","O","X"],
                   ["B","X","X","O"],
                   ["C","X","O","O"]
                ];
        
                echo "<div><table border=\"1\">";
                echo "<tr>";
                for ($j = 0; $j<4; $j++) {
                    echo "<th>",$tab[0][$j],"</th>";
                } 
                echo "</tr>"; // table head rempli
                for ($i=1; $i<4; $i++) { // je remplis les lignes suivantes
                    echo "<tr>";
                    for ($j = 0; $j<4; $j++) {
                        echo "<td>",$tab[$i][$j],"</td>";
                    }
                    echo "</tr>";
                }
                echo "</table></div>";
            }
            
            echo "</br>";
            remplirTableau();
        
        ?>
    </body>
</html>