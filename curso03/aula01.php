<?php

function f1()
{
  echo ">F1 is before the exception"."<br/>";
}

function f2($int)
{
  if(!is_int($int)) 
  {
    throw new Exception("O Argumento não é do tipo esperado");
  }
  else 
  {
    echo ">F2 Está na exceção"."<br/>";
  }

  f3();
}

function f3()
{
  echo ">F3 está depois da exceção";
}

f1();
f2(
  int: 5.5
);

?>