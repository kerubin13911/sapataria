<?php

	include "conexao.php";
    
    /*Verifica a conexão com o banco de dados*/

	$nome = $_POST["nome"];
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
		$msg_erro = "Informe todos os campos;";
		echo "$msg_erro <br>";

					$ok = false;
	}

	if(strlen(trim($cpf))==0){
		echo "$msg_erro <br>";
		
					$ok = false;
	}

	if(strlen(trim($status))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($valor))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($entrada))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($retirada))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($descricao))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

	if(strlen(trim($retirar))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}
	
	if(strlen(trim($pagamento))==0){
		echo "$msg_erro <br>";
					$ok = false;
	}

					if($ok) {

	/*Verifica se os campos foram digitados*/

	$sql = ("UPDATE ordem SET nome_cliente= '$nome', id_cpf= '$cpf', valor= '$valor', data_entrada= '$entrada', data_retirada= '$retirada', pago= '$pagamento', status_servico= '$status', desc_servico= '$descricao', retirada= '$retirar' WHERE id_cpf= $cpf");

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
    <br><br><br><a href="buscaservico.html">Voltar a página anterior</a>
</html>