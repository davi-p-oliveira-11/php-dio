<html>
  <head> </head>

  <body>

    <?php
        $string = "Curso DIO";
        $numeros = 50;
        $array = array("php", "html", "css", "java");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");
    ?>
    <h4>
      Essa é uma variavel do tipo string,
      para implementar uma variável do tipo string
      utilizamos aspas simples ('') ou duplas ("") 
      :
      <?php
          echo $string;
      ?>
    </h4>
    <h4>
      Essa é uma variável  do tipo numeros/integer 
      para implementar essa variável utitlizamos
      somente os números desta forma:
      <?php
        echo $numeros;
      ?>
     </h4>
     <h4>
       Essa é uma variável com um array,
       para implementar um array em uma variável
       ultilizamos desta forma
      <?php
        print_r($array);
      ?>
     </h4>
     <h4>
       Vamos agora implementar uma variavel do tipo
       datas, para implementar a variavel com datas
       utilizamos uma função  propria do PHP desta forma
       :
       <?php
          print $data;
       ?>
     </h4>
  </body>
</html>
