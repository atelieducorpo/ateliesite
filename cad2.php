<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefones = filter_input(INPUT_POST, 'telefones', FILTER_SANITIZE_STRING);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO `contatos` (`nome`, `email`, `telefones`, `assunto`, `mensagem`) VALUES ('{$nome}', '{$email}', '{$telefones}', '{$assunto}', '{$mensagem}');";

include "banco.php";

if ($conn->query($sql) === TRUE) {
  header("Location: cad3.php?nome={$nome}");
}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>