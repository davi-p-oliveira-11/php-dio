<?php
  $carros = ['Ferrari', 'BMW', 'Mercedes'];

  $EnderecoPessoas = [
    'pessoa1' => array(
      "cep" => "12312321",
      "cidade" => "Salvador"
    ),
    'pessoa2' => [
      'cep' => "1232321",
      "cidade" => "Sao Paulo"
    ]
  ];

  if(isset($EnderecoPessoas['pessoa1']['cidade'])) {
    print_r($EnderecoPessoas['pessoa1']['cidade']);
  } else {
    echo "Chave Inválida";
  }
  
?>