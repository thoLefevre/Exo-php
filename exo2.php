<html>
 <head> <title>exo1</title> </head>
<link rel="stylesheet" href="exo.css"
<body>
<?php
        $NombreAléatoire = rand ( 0 , 100 );
        if ($NombreAléatoire % 2 == 0)
        { 
        echo "<p class=red>$NombreAléatoire est Paire</p>";
        }
        else
        {
        echo "<p class=blue>$NombreAléatoire est  Impaire</p>";
        }
    ?>
</body>
    </html> 