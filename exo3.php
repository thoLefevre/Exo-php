<html>
    
    <head><title>Exercice 3</title></head>

    <body>
        <?php
                $Table[0] = array ("Nom" => "Lefevre", "Prénom" => "Thomas", "MDP" => "7590");
                $Table[1] = array ("Nom" => "Jolibois", "Prénom" => "Maxence", "MDP" => "6385");
                $Table[2] = array ("Nom" => "Godefroy",  "Prénom" =>  "Jules", "MDP" => "8241");
        
                echo "<table>";

                for ($i = 0; $i <3; $i++) {
            
    
                    echo "<tr></tr>";
            
        
                foreach ($Table[$i] as $value) {
            
                    echo "<td>";
                    echo "$value";
                }
            }
                echo "</table>";

            ?>

            <a href="/Godefroy/">Acceuil</a>

    </body>

</html>