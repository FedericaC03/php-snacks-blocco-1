<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
  "First match" => [
    "home" => "monaco",
    "visitor" => "barcelona",
    "score" => "86|60"
  ],

  "Second match" => [
    "home" => "roma",
    "visitor" => "venezia",
    "score" => "72|74"

  ],

  "Third match" => [
    "home" => "sassari",
    "visitor" => "trieste",
    "score" => "92|102"

  ],
];

$total_matches = array_merge($matches);

var_dump($total_matches);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>backet</title>

  </head>
  <body>
    <h1>
       <?php echo $total_matches["First match"]; ?>
     </h1>
  </body>
</html>
