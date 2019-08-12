<?php

	include "conexao.php";

    /*Verifica a conexão com o banco de dados*/

    $cpf = $_POST["cpf"];
    $cliente = $_POST["cliente"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $ok = true;

    /*cliente*/

    if(strlen(trim($cpf))==0){
		$msg_erro = "Informe todos os dados;";
		echo "$msg_erro <br>";
					$ok = false;
}

	if(strlen(trim($cliente))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($telefone))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($endereco))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($email))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

					if($ok) {
	
	/*Verifica se os campos foram digitados*/

	$sql = ("UPDATE cliente SET cpf= '$cpf', nome_cliente= '$cliente', fone= '$telefone', endereco_completo= '$endereco', email= '$email' WHERE cpf=$cpf");

	
	/*Salva as informações do formulario no banco*/

	$status = $conexao->query($sql);
	if($status ==0){
		echo "Erro ao inserir: " . $conexao->error;
	}else if ($status == 1){
		echo "<script>alert('Dados atualizados com sucesso!')</script>";
	}
} else {
			echo "<script>alert('Falha em atualizar os dados!')</script>";
} 
	$conexao->close();

	/*Verifica se os dados foram salvos*/

?>

<html>
    <br><br><br><a href="atualizacliente.html">Voltar a página anterior</a>
</html>