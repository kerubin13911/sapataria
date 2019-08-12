<?php

	include "conexao.php";

    /*Verifica a conexão com o banco de dados*/

    $nome = $_POST["cliente"];
    $cpf = $_POST["cpf"];
    $valor = $_POST["valor"];
	$entrada = $_POST["entrada"];
	$retirada = $_POST["retirada"];
	$descricao = $_POST["descricao"];
	$retirar = $_POST["retirar"];
	$pagamento = $_POST["pago"];
	$status = $_POST["status"];
	$ok = true;

	/*servico*/

	if(strlen(trim($nome))==0){

					$ok = false;
	}

	if(strlen(trim($cpf))==0){
		
					$ok = false;
	}

	if(strlen(trim($status))==0){
		
					$ok = false;
	}

	if(strlen(trim($valor))==0){
		
					$ok = false;
	}

	if(strlen(trim($entrada))==0){
		
					$ok = false;
	}

	if(strlen(trim($retirada))==0){
		
					$ok = false;
	}

	if(strlen(trim($descricao))==0){
		
					$ok = false;
	}

	if(strlen(trim($retirar))==0){
		
					$ok = false;
	}
	
	if(strlen(trim($pagamento))==0){
		
					$ok = false;
	}

					if($ok) {

	/*Verifica se os campos foram digitados*/

	$sql = "INSERT INTO ordem (nome_cliente, id_cpf, valor, data_entrada, data_retirada, pago, status_servico, desc_servico, retirada)
	 VALUES ('$nome', '$cpf', '$valor', '$entrada', '$retirada', '$pagamento', '$status', '$descricao', '$retirar')";

	/*Salva as informações do formulario no banco*/

	$status = $conexao->query($sql);
	if($status ==0){
		echo "Erro ao inserir: " . $conexao->error;
	}else if ($status == 1){
		echo "<script>alert('Dados salvos com sucesso!')</script>"
		. "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=index.html'>";
	}
} else {
			echo "<script>alert('Não foi possível salvar os dados!')</script>"
			. "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=cadastrarservico.html'>";
} 
	$conexao->close();

	/*Verifica se os dados foram salvos*/

?>