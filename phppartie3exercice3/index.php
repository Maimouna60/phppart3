<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie3 Exo 3</title>
    </head>
    <body>
        <?php
        $numberfirst= 100;
        $numbersecond= 5;
        while($numberfirst >=10) {
            ?><p><?php echo $numberfirst * $numbersecond; ?></p><?php
            $x--;
        }
        ?>
    </body>
</html>
<?php
        $number = 100;
        $secondNumber = rand(1, 100);// rand function pour chiffre aléatoire
        while($number >= 10){ ?>
            <p><?php echo $number * $secondNumber;?></p>
            <?php $number--;
        }
        ?>
 














