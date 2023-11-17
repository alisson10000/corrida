<?php
include './conexao.php';
$consulta = "select * from corridas";

$consulta = mysqli_query($conexao, $consulta);

while ($row = mysqli_fetch_array($consulta)) {
    
  echo   $id = $row['idCorrida'];
   echo  $nome = $row['nome']."#";
}
echo '^';