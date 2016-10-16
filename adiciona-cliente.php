<html>
<?php
$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$conta = $_GET["conta"];
$senha = $_GET["senha"];
?>
Cliente <?= $nome; ?> cadastrado com sucesso! <br/>
O número da sua conta é: <?= $conta; ?>.
