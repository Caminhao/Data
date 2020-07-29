<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $data1 = "25/02/2013";
  $data2 = "22/02/2013";
  // transforma a data do formato BR para o formato americano, ANO-MES-DIA
  $data1 = explode('-', array_reverse(explode('/', $data1)));
  $data2 = explode('-', array_reverse(explode('/', $data2)));
  // converte as datas para segundos
  $d1 = strtotime($data1); 
  $d2 = strtotime($data2);
  // transforma de volta em dias
  $dataFinal = ($d2 - $d1) /86400;
  // caso a data 2 seja menor que a data 1, multiplica o resultado por -1
  if($dataFinal < 0){
    $dataFinal *= -1;
  }
  echo "$dataFinal dias de diferença.";
  ?>
</body>
</html>