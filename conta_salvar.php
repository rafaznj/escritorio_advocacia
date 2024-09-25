<?php 

include "config_bd.php";

$oab = $_POST["txtOAB"];
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$cpf = $_POST["txtCPF"];

$sql = "INSERT INTO conta(numero_oab,nome_completo,email,cpf) 
VALUES('$oab','$nome','$email','$cpf')";

if(executarComando($sql)){
    echo "<h1>Conta criada.</h1>";
}

else{
    echo "<h1>Erro ao criar a conta.</h1>";
}

?>