<?php
  
  $sorteio = rand(0,5);

  echo "Valor sorteado: " . $sorteio;
  switch($sorteio){
    case 1:
      echo " => Voce ganhou 2 pontos";
      break;
    case 2:
      echo " => Voce perdeu 1 ponto";
      break;
    case 3:
      echo " => Voce ganhou um bonus, parabéns ganhou 3 pontos";
      break;
    default:
      echo " => Jogue novamente";
      break;
  }
?>