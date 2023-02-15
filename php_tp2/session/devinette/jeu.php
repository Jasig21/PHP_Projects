<?php
session_start();
?>
 
<!doctype html>
<head>
    <title>Nombre à deviner</title>
</head>
 
<body>
    
    
    <form action="" method="GET">
        
        <label for="guessNumber"> Please Guess A Number </label>
        <input type="text" name="guessNumber" placeholder="Guess A Number between 1 to 100">
        <button type="submit" name="submit"> See The Result </button>

    </form>
           
 
 
 
    <?php

    $rand = $_SESSION['rand'];
    $guessNumber = 0;



    if (isset($_GET['submit']) && isset($_SESSION['counter'])) {
        //echo " Clicked <br>";
        $counter = $_SESSION['counter'];
        
        $guessNumber = $_GET['guessNumber'];
        //echo "guess number " . $guessNumber . "<br>";
        $_SESSION['counter'] = $_SESSION['counter'] + 1;
        //echo "Counter " . $_SESSION['counter'] . "<br>";
        if ($guessNumber < $rand) {
            echo "<h2>Supérieur</h2>";
            
        }else if($guessNumber > $rand){
            echo "<h2>Inférieur</h2>"; 
        }
        else if($rand == $guessNumber) {
            echo "<h2>Bravo !</h2>"."Vous avez réussi au bout de " . $_SESSION['counter'] . " fois <br>";
            $_SESSION['counter'] = 0;
            echo "<a href='index.php'>Rejouer</a>";
        }
    }

    ?>

</body>
 
</html>