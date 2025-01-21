<?php
  echo date("d");
  echo date("Y");
  echo date("M");
  echo date("d/m/Y");

  date_default_timezone_set('America/Sao_Paulo');
  $data = date("d/m/Y H:i:s");
  echo $data;
?>