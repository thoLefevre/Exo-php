<?php   

   session_start();
   if (isset($_GET['Nom'])) {
      echo"votre nom est: ".$_GET['Nom'];
   }

   if (isset($_GET['Prénom'])) {
       echo"votre prénom est: " .$_GET['Prénom'];
   }
   if(isset($_GET['cache']) AND $_GET['cache'] == 1)
       session_destroy();
  
?>

<html>

<head><title>Exercice 7</title></head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">
    <input type="submit" id="cache" name="cache"/>

<a href="/Lefevre/">Acceuil</a>

</body> 

</html>