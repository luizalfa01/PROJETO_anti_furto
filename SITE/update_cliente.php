<?php
	include('templete/topo.php');
	
	$username = $_POST['username'];
	$nome_cliente = $_POST['nome_cliente'];
	$sexo_cliente = $_POST['sexo_cliente'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$end_cliente = $_POST['end_cliente'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	
	if($_FILES['foto']['error'] == 0){
		$ext = substr($_FILES['foto']['name'],
								strpos(strrev($_FILES['foto']['name']),'.')*-1);
		
		$foto = md5(time().$_FILES['foto']['name']).".".$ext;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'admin/fotos_clientes/' . $foto);
		if($_POST['fotovelha'] != "nouser.png"){
			unlink('admin/fotos_clientes/'.$_POST['fotovelha']);
		}
	} else{
		$foto = -1;
	}
	
	if($con){
		$sql = "update cliente set
				nome_cliente = '$nome_cliente',
				sexo = '$sexo_cliente',
				email_cliente = '$email',
				senha = '$senha',
				CPF = '$cpf',
				telefone = '$telefone',
				estado = '$estado',
				cidade = '$cidade',
				end_cliente = '$end_cliente'".
				($foto == -1? "" : ", foto = '$foto'")."
			where username = \"$username\";";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Cadastro Atualizado com sucesso.</h1>";
		} else {
			echo "Erro de Alteração :" . mysql_error();
		}
	}else{
		echo "Erro de conexão: ".mysql_error();
	}
	
	include('templete/rodape.php');
?>