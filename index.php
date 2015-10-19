<!DOCTYPE html>
<html>
    <head>
        </head>

    <p>
        <?php

        echo $_GET["name"];
        $name = "Edgar";
        $myAge = 16;

        if ($myAge == 16) {
            print "glasses";
            echo "sup";
        }
        else if ($myAge == 18){
        print "Mugs";
        }
        else if ($myAge == 21){
            print "sausage roll";
        }
        ?>
    </p>
    </body>
</html>
