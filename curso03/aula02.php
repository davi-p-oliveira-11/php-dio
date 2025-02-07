<?php
  
  function divisao($dividendo, $divisor)
  {
  try{
     if($divisor == 0)
     {
         throw new RangeException("O numero não pode ser dividido por zero.");
     }

     $resultado = $dividendo / $divisor;

     echo "O resultado é:: ".$resultado;
  } catch (Exception) {
    // echo $e -> getMessage();
    echo "O numero não pode ser dividido por 0";
  }
  finally {
     echo "<br/>Tratando exceÇões";
  }

}

divisao(10,0);
?>