<?php
$nome = $_POST["nome"];
$profissao = $_POST["profissao"];

echo "$nome - $profissao";

$arquivo = fopen("clientes.txt","a");

fwrite($arquivo, $nome . "/t");
fwrite($arquivo, $profissao . "/n");

fclose($arquivo);

//header("location:index5.php");
?>