<!DOCTYPE html>
<html>
    <body>

        <?php
            echo 'Ceci ', 'est ', 'un petit ', 'exemple.<br/>', chr(13);
            //$var=false; echo $var ? 'vrai': 'faux';
            //$var=false; ($var) ? print 'vrai' : print 'faux';

        //-----------------------------------

            /*
            //9.
            $var = 1;
            function testPorteeVar() {
                echo $GLOBALS['var'];
            }
            testPorteeVar();
            echo '<br/>';
            */

        //-----------------------------------

            //10.
            //$var=3.14159265; $retFonc = settype($var,"integer"); echo $var,' ', $retFonc;
            
            /*
            //11.
            function f(&$var) { //&$var peut changer la variable
                $var++;
            }
            $a=1;
            f($a);
            echo "a vaut ".$a;
            */

        //-----------------------------------

            /*
            // 12.
            $var1 = 1;
            $var2 = 1.0;
            $var3 = "bonjour";
            $var4 = false;
            $var5 = "123bonjour";

            echo "var2: ", gettype($var2), "<br/>";

            function t(&$var) {
                return echo "var1: ", gettype($var), "<br/>";
                $var++;
            }
            t($var1, $var2, $var3, $var4, $var5);
            */

        //-----------------------------------

            /*
            //13.
            function donner_fruit ($fruit = "orange") {
                return "Donner un(e) $fruit.<br/>";
                }
            echo donner_fruit();
            echo donner_fruit(null);
            echo donner_fruit("citron");
            */

        //-----------------------------------

            /*
            //14.
            $var1 = 1;
            $var2 = &$var1 ;
            echo "$var1, $var2, <br/>";
            $var1 = 2;
            echo "$var1, $var2, <br/>" ;
            */

        //-----------------------------------

            /*
            //15. ne fonctionne pas dans l'exercice
            $var1= " ";
            $ret = isset($var1);
            print "isset".$ret."<br/>";
            
            unset($var1);
            if (!isset($var1)) {
                echo "isset a renvoyé faux";
            }
            */
            
        //-----------------------------------
            
            /*
            //16.
            $var1= 5;
            echo "var1", gettype($var1), "<br/>";
            $var1 /= 7;
            echo "var2", gettype($var1), "<br/>";
            unset($var1);
            echo "unset var1", gettype($var1);
            */
            

        ?>

    </body>
</html>
