<?php
	if(empty($_SESSION["privilegio"])){
		$con = mysql_connect("localhost", "visitante", "visitante") or die ("A conexão com o servidor não foi executado com sucesso!");
		$db = mysql_select_db("anti_furto", $con) or die ("Não foi possivel selecionar o banco de dados!");
	}
	else if($_SESSION["privilegio"] == "cliente"){
		$con = mysql_connect("localhost", "cliente", "cliente") or die ("A conexão com o servidor não foi executado com sucesso!");
		$db = mysql_select_db("anti_furto", $con) or die ("Não foi possivel selecionar o banco de dados!");
	}
	else if($_SESSION["privilegio"] == "master"){
		$con = mysql_connect("localhost", "webmaster", "webmaster") or die ("A conexão com o servidor não foi executado com sucesso!");
		$db = mysql_select_db("anti_furto", $con) or die ("Não foi possivel selecionar o banco de dados!");
	}
	
?>