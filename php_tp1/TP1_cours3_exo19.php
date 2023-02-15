<!DOCTYPE html>
<html>
    <body>

        <?php

        //avec foreach()

        $tab = array (
            "teinte" => array("rouge", "orange","vert","bleu"),
            "intensite" => array("faible", "moyenne","forte")
        );
        //print_r($tab);

        echo "tableau:";
        echo "<div><table border=\"1\">";
        foreach($tab as $cle => $valeur) {
            echo "<tr>";
            echo "<th>".$cle."</th>";
            foreach($valeur as $valeur2){
                echo "<td>".$valeur2."</td>";
            };
            echo "</tr>";
        };

        //-----------------------------------

        
        //avec array_walk_recursive()
        echo "<br /><br />var_dump :<br />";
        $couleurs = array('teintes' => array("vert", "orange", "bleu", "jaune"
									), 
				  'luminances' => array("faible", "moy", "foncé"
                  					   )
                 );
        var_dump($couleurs);

        echo "<br /><br />print_r :<br />";
        print_r($couleurs);

        echo "<br /><br />array_walk_recursive :<br />";

        function test_print($item, $key)
        {
            echo "$key contient $item\n<br />";
        }

        array_walk_recursive($couleurs, 'test_print');
        ?>

    </body>
</html>