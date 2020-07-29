<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>As datas devem ser enviadas no formato dd/mm/aaaa</p>
<form action="data.php" method="get">
    <input type="text" placeholder="entre a primeira data:" name="valor"><br>
    <input type="text" placeholder="entre a segunda data:" name="valor2"><br>
        <input type="submit">
        </form>
  <?php
  $data1 = $_GET['valor'];
  $data2 = $_GET['valor2'];
  // transforma a data do formato BR para o formato americano, ANO-MES-DIA
  $data1 = implode('-', array_reverse(explode('/', $data1)));
  $data2 = implode('-', array_reverse(explode('/', $data2)));
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
