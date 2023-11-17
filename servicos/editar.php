<?php

include './conexao.php';
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_DEFAULT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$local = filter_input(INPUT_POST, 'local', FILTER_DEFAULT);
$distancia = filter_input(INPUT_POST, 'distancia', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
$largada = filter_input(INPUT_POST, 'largada', FILTER_DEFAULT);

$consulta = "UPDATE corridas SET nome='$nome',local='$local',distancia='$distancia',data='$data',largada='$largada' WHERE idCorrida='$codigo'";
$consulta = mysqli_query($conexao, $consulta);
echo '1';