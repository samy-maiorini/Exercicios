<?php
$nome = $_POST["nome"] ?? "Produto 1";
$valor = $_POST["valor"] ?? 0;
$qtde = $_POST["qtde"] ?? 0;
$soma = $valor * $qtde;
//2
$nome2 = $_POST["nome2"] ?? "Produto 2";
$valor2 = $_POST["valor2"] ?? 0;
$qtde2 = $_POST["qtde2"] ?? 0;
$soma2 = $valor2 * $qtde2;
//3
$nome3 = $_POST["nome3"] ?? "Produto 3";
$valor3 = $_POST["valor3"] ?? 0;
$qtde3 = $_POST["qtde3"] ?? 0;
$soma3 = $valor3 * $qtde3;
?>