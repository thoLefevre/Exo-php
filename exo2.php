<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleexo2.css" />
    <title>Exercice 2</title>
</head>

<body>
    <?php
    $tableau = array(6,7,8,9,10);
    echo '<tr><table>';
    for ($i =0; $i<5; $i++){
        echo '<td>'.$tableau[$i]."</td>";
    }
    echo '</tr></table>';


    echo "<br>";
    
    ?>
</body>
</html>
