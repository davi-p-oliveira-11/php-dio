<?php
  
  $nota = 5;

  if ($nota >= 7) {
    echo "Aluno(a) aprovado !";
  } else if ( ($nota < 7) && ($nota >= 4)){
    echo "Aluno(a) em recuperação ";
  } else if ( ($nota < 4) && ($nota >= 2)){
    echo "Aluno(a) em conselho de classe. ";
  } else {
    echo "Aluno(a) reprovado ";
  }
  
?>