<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie3 Exo 2</title>
    </head>
    <body>
        <?php
        $x = 0;
        $y = 5;
        while($x < 20){
       ?><p><?php echo $x * $y;?></p><?php
        $x++;
        }
        ?>
    </body>
</html>


<?php
// method 2
    // On ouvre notre boucle while dans le php 
        $number = 0;
        $secondNumber = rand(0, 100);
        while($number < 20){ ?>
        <!-- on peut ajouter du php dans le html pour un affichage clair-->
            <p><?php echo $number * $secondNumber; ?></p>
            <?php $number++;
        }
    ?>

 














