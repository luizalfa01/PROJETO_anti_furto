<?php
	
	include "templete/topo.php";
	
	$nome_cliente = $_POST['nome_cliente'];
	$sexo_cliente = $_POST['sexo_cliente'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['end_cliente'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	
	if($_FILES['foto']['error'] == 0){
		$ext = substr($_FILES['foto']['name'],
							strpos(strrev($_FILES['foto']['name']),'.')*-1);
							
		$foto = md5(time().$_FILES['foto']['name']).".".$ext;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'admin/fotos_clientes/' . $foto);
		
	} else{
		$foto = 'nouser.png';
	}
	
	if($con){
		$sql = "insert into cliente (nome_cliente, username, senha, telefone, email_cliente, estado, cidade, CPF, end_cliente, sexo, foto)".
			"values('$nome_cliente', '$username', '$senha', '$telefone', '$email', '$estado', '$cidade', '$cpf', '$endereco', '$sexo_cliente', '$foto')";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Cliente cadastrado com sucesso.</h1>";
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
