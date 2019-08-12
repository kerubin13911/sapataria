<?php

	include "conexao.php";

    /*Verifica a conexão com o banco de dados*/

    $cpf = $_POST["cpf"];

    if(strlen(trim($cpf))==0){
    	$msg_erro = "Informe o CPF do cliente.";
        echo "$msg_erro <br>";
    }

    /*Verifica se os campos foram digitados*/

    $sql = ("SELECT * FROM cliente WHERE cpf = $cpf");
    $busca = $conexao->query($sql);
    if($busca){
        while ($linha = $busca->fetch_array(MYSQLI_ASSOC)) {
                
                echo $linha["cpf"] . " - CPF do Cliente / " .
                     $linha["nome_cliente"] . " - Nome do cliente / " .
                     $linha["fone"] . " - Telefone / " .
                     $linha["endereco_completo"] . " - Edereço / " .
                     $linha["email"] . " - E-mail / <br> " ;
    }
} else{
    echo "Erro SQL> " . $conexao->error;
}
   $conexao->close();

?>

<html>
    <br><br><br><a href="buscacliente.html">Voltar a página anterior</a>
</html>