<?php


$localhost="localhost";
$user="root";
$password="";
$db="corrida";



$conexao = mysqli_connect($localhost,$user,$password,$db);

if(!$conexao){
    echo 'Sem conexao';
}