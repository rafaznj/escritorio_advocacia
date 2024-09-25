<?php 

include "config_bd.php"; 

$nome_completo = $_POST["txtNome"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];
$telefone = $_POST["txtTelefone"];
$turno_contato = $_POST["txtTurno"];
$vara_processual = $_POST["txtVara"];
$descricao_processo = $_POST["txtDescricao"];

$sql = "INSERT INTO orcamento(nome_completo,cpf,email,telefone,turno_contato,vara_processual,descricao_processo) 
VALUES('$nome_completo','$cpf','$email','$telefone','$turno_contato','$vara_processual','$descricao_processo')";

if(executarComando($sql)){
    echo "<h1>Orçamento enviado.</h1>";
}

else{
    echo "<h1>Erro ao enviar o orçamento.</h1>";
}

?>