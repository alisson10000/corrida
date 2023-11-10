<?php
include './conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$local = filter_input(INPUT_POST, 'local', FILTER_DEFAULT);
$distancia = filter_input(INPUT_POST, 'distancia', FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'data', FILTER_DEFAULT);
$largada = filter_input(INPUT_POST, 'largada', FILTER_DEFAULT);

$consulta = "INSERT INTO corridas VALUES (null,'$nome','$local','$distancia','$data','$largada')";
$consulta = mysqli_query($conexao, $consulta);