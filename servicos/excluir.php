<?php

include './conexao.php';
$id = filter_input(INPUT_POST, 'codigo_corrida', FILTER_DEFAULT);


$consulta = "DELETE FROM corridas WHERE idCorrida='$id'";
$consulta = mysqli_query($conexao, $consulta);
echo '0';