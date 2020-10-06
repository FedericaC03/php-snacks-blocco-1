<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
$messaggio = "";

if ((!empty($_GET['email'])) || (!empty($_GET['name'])) || (!empty($_GET['age'])) ){  // se non è vuota

  if ((strpos($email, ".") != false && strpos($email, "@") != false ) && (intval($age)) && (strlen($name) >= 3) )
  {
    $messaggio =  "Accesso riuscito";
  } else {
    $messaggio = "Accesso negato";
  }
} else {  //se è vuoto
  $messaggio = "ti sei dimenticato di passare le credenziali";
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>log in</title>
  </head>
  <body>
    <h1> <?php echo $messaggio; ?>
    </h1>
  </body>
</html>
