<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
  [
    "home" => "monaco",
    "visitor" => "barcelona",
    "score_home" => 86,
    "score_visitor" => 60
  ],

  [
    "home" => "roma",
    "visitor" => "venezia",
    "score_home" => 72,
    "score_visitor" => 74

  ],

  [
    "home" => "sassari",
    "visitor" => "trieste",
    "score_home" => 92,
    "score_visitor" => 102

  ],
];
echo "<h1>Elenco partite di oggi: </h1>";
for ($i=0; $i < count($matches) ; $i++) {
  echo $matches[$i]["home"]." - ".$matches[$i]["visitor"]. " | ".$matches[$i]["score_home"]."-".$matches[$i]["score_visitor"]."<br>";
}
 ?>
