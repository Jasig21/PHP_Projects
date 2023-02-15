<?php

    // exemple func-num-args() de base 

    function foo()
    {
        $numargs = func_num_args();
        echo "Nombre d'arguments : $numargs \n";
        if ($numargs >= 2) {
            echo "Le second argument est : " . func_get_arg(1) . "\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "L'argument $i est : " . $arg_list[$i] . "\n";
        }
    }
    foo(1, 2, 3);

    //-----------------------------------

    // exemple func-num-args() du cours 

    function foo($a,$b="atre")
    {
        $numargs = func_num_args();
        echo "Nombre d'arguments : $numargs <br />";
        if ($numargs >= 2) {
            echo "Le second argument est : " . func_get_arg(1) . "<br />";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "<br />L'argument $i est : " . $arg_list[$i] . "<br />";
        }
    
        echo "le type de c est", gettype($c);
        echo "<br /> b=$b";
    }

    foo("kiki",12.8);


?>