<?php
session_start();
?>
 
<!doctype html>
<head>
    <title>Devinez le nombre</title>
    <style>
        body{
            background : url('https://media.senscritique.com/media/000006728127/325/le_juste_prix.jpg') no-repeat center center fixed; 
            background-size: cover;
        }
        h1{
            font-weight : 900;
            margin-top : 300px;
            color: white;
            font-size: 30px;
            text-align: center;
        }

        a{
            text-decoration : none;
            display : block;
            height : 20px;
            width : 100px;
            background-color : white;
            padding : 10px;
            padding-left : 80px;
            border-radius : 50px;
            margin-left : 40%;
        }

    </style>
</head>
 
<body>
 
   
    <h1>Devinez le juste prix entre 1 et 100€ en un minimum de coups possible</h1>
    <a href="jeu.php">Start</a>
           
 
 
    <?php
    $_SESSION['rand'] = rand(1, 100);
    //echo $_SESSION['rand'];
    $_SESSION['counter'] = 0;
    ?>
 
 
</body>
 
</html>