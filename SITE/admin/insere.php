<?php
	
	include "templete/topo.php";
	include "valida_sessao.php";
	
	$nome_admin = $_POST['nome_admin'];
	$sexo_admin = $_POST['sexo_admin'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['end_admin'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	
	if($_FILES['foto']['error'] == 0){
		$ext = substr($_FILES['foto']['name'],
							strpos(strrev($_FILES['foto']['name']),'.')*-1);
							
		$foto = md5(time().$_FILES['foto']['name']).".".$ext;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos_clientes/' . $foto);
		
	} else{
		$foto = 'nouser.png';
	}
	
	if($con){
		$sql = "insert into admin (nome_admin, username, senha, telefone, email_admin, estado, cidade, CPF, end_admin, sexo, foto)".
			"values('$nome_admin', '$username', '$senha', '$telefone', '$email', '$estado', '$cidade', '$cpf', '$endereco', '$sexo_admin', '$foto')";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Administrador cadastrado com sucesso.</h1>";
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
