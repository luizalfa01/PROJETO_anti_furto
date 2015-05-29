<?php
	include "conexao/conecta.php";
	
	$username = $_POST['username'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT * FROM usuarios where username='$username'";
	$resultado = mysql_query($sql, $con);
	$linha=mysql_num_rows($resultado);
	if($linha == 0) //testa se a consulta retornou algum registro
	{
		echo "Usuario não encontrado.";
	}
	ELSE{
		if($senha != mysql_result($resultado, 0, "senha")) //confere a senha
		{
			echo "A senha esta incorreta!";
		}
		else // usuario e senha corretos. Vamos criar os cookies
		{
			setcookie("nome_usuario", $username);
			setcookie("senha_usuario", $senha);
			setcookie("logado", "okey");
			header("Location: index.php");
		}
	}
	mysql_close($con);
?>