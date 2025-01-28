<?php
 
$frutas = ["banana", "maça", "pera", "uva"];

$contador = count($frutas);

$i = 0;
while ($i < $contador) {

  if ($frutas[$i] ==  "pera") {
    break;
  }

  echo $frutas[$i] . "\n";

  $i++;
}
?>