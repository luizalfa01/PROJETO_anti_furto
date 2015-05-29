<?php
	
	include "templete/topo.php";
	
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$end_fornecedor = $_POST['end_fornecedor'];
	$email = $_POST['email'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];
	
	if($con){
		$sql = "insert into fornecedor (nome, telefone, end_fornecedor, email, cidade, estado, pais)".
			"values('$nome', '$telefone', '$end_fornecedor', '$email', '$cidade', '$estado', '$pais')";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Fornecedor cadastrado com sucesso.</h1>";
		}
		else{
			echo "Erro de inclusão: ".mysql_error();
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
	
	include "templete/rodape.php";
	
?>
