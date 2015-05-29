<?php
session_start();
?>

<?php

if(isset($_SESSION["nome_admin"])) $nome_admin = $_SESSION["nome_admin"];
if(isset($_SESSION["senha_admin"])) $senha_admin = $_SESSION["senha_admin"];

if(!(empty($nome_admin) or (empty($senha_admin)))) {
	$resultado = mysql_query("SELECT * FROM admin WHERE username = '$nome_admin'" );
	if(mysql_num_rows($resultado)==1) {
		if($senha_admin != mysql_result($resultado, 0, "senha")){
			unset ($_SESSION['nome_admin']);
			unset ($_SESSION['senha_admin']);
			echo "Você não efetuou o login";
			exit;
		}
	}
	else{
		unset ($_SESSION['nome_admin']);
		unset ($_SESSION['senha_admin']);
		echo "Você não efetuou o login";
		exit;
	}
}
else{
	echo "Você não efetuou login";
	exit;
}
?>