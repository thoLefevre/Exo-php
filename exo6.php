<html>
    <head><title>Exercice 6</title></head>
    <body>
        <form method="GET">
            <input type="text" id="name" name="Nom">
            <input type="submit" value="Cliquer">
        </form>
        <?php
        if(isset($_GET['Nom'])){
            echo "Votre nom est : " .$_GET['Nom'];
        }
        ?>
        <a href="/Lefevre/">Acceuil</a>
    </body>
</html>  