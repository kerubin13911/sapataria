<?php

	include "conexao.php";

    /*Verifica a conexão com o banco de dados*/

    $cpf = $_POST["cpf"];

    if(strlen(trim($cpf))==0){
    	$msg_erro = "Informe o CPF;";
        echo "$msg_erro <br>";
    }

    /*Verifica se os campos foram digitados*/

    $sql = ("SELECT * FROM ordem WHERE Id_cpf = $cpf");
    $busca = $conexao->query($sql);
    if($busca){
        while ($linha = $busca->fetch_array(MYSQLI_ASSOC)) {
                
                echo $linha["nome_cliente"] . " - Nome do cliente / " .
                     $linha["id_cpf"] . " - CPF do cliente / " .
                     $linha["valor"] . "- Valor do Serviço / " .
                     $linha["data_entrada"] . " - Data do pedido / " .
                     $linha["data_retirada"] . " - Retirada do Pedido/ " .
                     $linha["pago"] . " - Pagamento adiantado? / " .
                     $linha["status_servico"] . " - Status do Serviço / " .
                     $linha["desc_servico"] . " - Descrição do Serviço / " .
                     $linha["retirada"] . " - Quem pode retirar? / " ; 
    }
} else{
    echo "Erro SQL> " . $conexao->error;
}
   $conexao->close();

?>

<html>
    <br><br><br><a href="buscaservico.html">Voltar a página anterior</a>
</html>