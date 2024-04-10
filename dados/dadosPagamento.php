<?php
//Formulario dos dados 
$nome = $_POST['nome'];
$email = $_POST['email'];
$valor = $_POST['valor'];
$metodopagamento = $_POST['metodoPagamento'];

//validação de dados
if(empty($nome) || empty($email) || empty($valor) || empty($metodopagamento) ){
echo 'Erro: Todos os campos devem ser preenchidos ';
exit;
}
?>