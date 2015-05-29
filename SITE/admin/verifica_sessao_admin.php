<?php
include "templete/topo.php";

$username = $_POST['username'];
$senha = $_POST['senha'];

// Acessar a base de dados e verifica login e senha

include "conexao/conecta.php";

$resultado=mysql_query("SELECT * FROM admin WHERE username='$username'");
$linha=mysql_num_rows($resultado);
if($linha==0) { // testa se retornou algum registro
	echo "<p align='center'>Usuario não encontrado</p>";
	echo "<p align='center'><a href='/SITE/login_admin.php'>Voltar</a></p>";
}
else{
	if($senha != mysql_result($resultado, 0, "senha")) { //confere a senha	
		echo "<p align='center'>A senha esta incorreta</p>";
		echo "<p align='center'><a href='/SITE/login_admin.php'>Voltar</a></p>";
	}
	else{
		session_start();
		$_SESSION['nome_admin'] = $username;
		$_SESSION['senha_admin'] = $senha;
		$_SESSION['privilegio'] = "master";
		$_SESSION['logado'] = 'okey';
		header ("location: index.php");
	}
}
mysql_close($con);

include "templete/rodape.php";
?>