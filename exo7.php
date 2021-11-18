
<?php   

   session_start();
   if (isset($_POST['Nom'])) {
      echo"votre nom est: ".$_POST['Nom'];
   }

   if (isset($_POST['Prénom'])) {
       echo"votre prénom est: " .$_POST['Prénom'];
   }
  
?>

<html>

<head><title>Exercice 7</title></head>

<body>

<form method="POST">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">

<a href="/Lefevre/">Acceuil</a>

</body> 

</html>