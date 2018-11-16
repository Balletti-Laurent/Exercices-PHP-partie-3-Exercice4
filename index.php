<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <div>
            <?php
            $count = 1;
            while ($count <= 10) {
                echo '<p>Résultat ' . $count . '</p>';
                $count = $count + $count / 2;
            }
            ?>
        </div>
    </body>
</html>