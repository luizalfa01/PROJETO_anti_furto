<html>
	<head>
		<meta charset="utf-8"/>
		<title>ANTI FURTO</title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />

	</head>
	<body>
		
		<div id = "header">		
			<div style="float:left; margin-left: 80px;"><h1 class = "titulo">ANTI FURTO COMPANY</h1></div>
			
			<div style="float:right; margin-top: 30px; margin-right:5px;">
				<a href="logout.php" style="color: white; text-decoration:none; margin-left:50px;">Sair</a>
			</div>
			
			<div style="float:right; margin-right: 80px;"> 
				<form method="POST" action="pesquisa.php">
					<div style="margin-left:5px; margin-top:10px;float: left;"><input class ="form" type="text" name="procurar" size="20px"></div>
					<div style="margin-left:5px; margin-top:10px; float:left"><button type="submit" class="botao1"><img src="lupa.png" style="width:24px;"></button></div>
				</form> 
			</div>
		</div><!-- /header-->
		
		<div id = "nav">
			<table class="tablelinks" width="50%" style="float:left">
				<tr><th><a class="link" href="index.php">INICIO</a></th>
				<th><a class="link" href="produtos.php">PRODUTOS</a></th>
				<th><a class="link" href="clientes.php" style ="margin-right: 25px" >CLIENTES</a></th>
			</table>
			<table class="tablelinks" width="50%" style="float:left">
				<th><a class="link" href="fornecedor.php" style="font-size:15px; margin-left:35px">FORNECEDOR</a></th>
				<th><a class="link" href="pedidos.php">PEDIDOS</a></th>
				<th><a class="link" href="lista_admin.php" style="font-size:15px">ADMIN</a></th></tr>
			</table>
		</div><!-- /nav-->
		
		<center><img src ="logo.png" style="position:fixed; right: 46.5%;"></center>
		
		<div id="wrapper">
			
			<div id = "suport">
			</div><!-- /suport-->
			
			<div id = "content">
				<?php
					include "conexao/conecta.php";
				?>