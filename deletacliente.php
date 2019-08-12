<?php

	include "conexao.php";

/*Verifica a conexão com o banco de dados*/

	$cpf = $_POST["cpf"];

	/*cliente*/

	if(strlen(trim($cpf))==0){
		$msg_erro = "Informe o CPF do cliente;";
		echo "$msg_erro <br>";
	}

	/*Verifica se o camnpo foi prenchido*/

	$sql = ("DELETE  FROM cliente WHERE cpf= $cpf");

	$sql = mysqli_query($conexao, $sql) or
	die(mysqli_error($conexao));
		echo "Dados removidos com sucesso!"

	/*Atualiza os dados do cliente*/

?>

<html>
	<br><br><a href="index.html">Voltar a página principal</a>
</html>