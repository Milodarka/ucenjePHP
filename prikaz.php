<html>
    <body>
<!--
        <p> 
        Dobrodosli!
        <?php
        echo $_GET["Ime"];
        ?>
        </p>


        <p>
            Vasa e-mail adresa je :
            <?php
        echo $_GET["mail"];
                ?>
         </p>


         <p> 
        Dobrodosli!
        </p>
        -->
        <?php

         $a= $_GET["broj1"];
         $b= $_GET["broj2"];
         $op= $_GET["operacija"];
        

        switch ($op)
        {
            case "-":
            $rez= $a-$b;
            echo $rez;
            break;

            case "*":
            $rez=$a*$b;
            echo $rez;
            break;

            case "/":
            $rez=$a/$b;
            echo $rez;
            break;

            case "+":
             $rez=$a+$b ;
            echo $rez;
            break;

            default:
            echo "nevalidan unos";

        }


        ?>
       

    </body>
</html>