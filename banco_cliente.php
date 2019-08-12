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
		
				$ok = false;
	}

	if(strlen(trim($cliente))==0){

				$ok=false;
	}

	if(strlen(trim($telefone))==0){
		
				$ok=false;
	}

	if(strlen(trim($endereco))==0){
		
				$ok=false;
	}

	if(strlen(trim($email))==0){
		
				$ok=false;
	}

				if($ok) {

	/*Verifica se os campos foram digitados*/

	$sql = "INSERT INTO cliente (cpf, nome_cliente, fone, endereco_completo, email)
	 VALUES ('$cpf' , '$cliente', '$telefone', '$endereco', '$email')";

	 /*Salva os dados do form no banco*/

	$status = $conexao->query($sql);
	if($status ==0){
		echo "Erro ao inserir: " . $conexao->error;
	}else if ($status == 1){
		echo "<script>alert('Cliente salvo com sucesso!')</script>"
		. "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=cadastrarservico.html'>";
	}
} else {
			echo "<script>alert('Falha ao salvar os dados do cliente!')</script>"
			. "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=cadastrarcliente.html'>";
			
			
} 
	$conexao->close();

	/*Verifica se os dados foram salvos*/

?>