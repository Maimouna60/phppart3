<?php
$number = 0
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie3 Exo 3</title>
    </head>
    <body>
        <?php
       for ( $number = 0; $number < 10;) // avec des nombres mieux vaut utiliser des for à la place de While
            {
            ?><p><?= $number;?></p><?php
            $number++; //nombre de ligne +1
            }
            ?>
    </body>
</html>
