<?php session_start(); ?>
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
				<?php if (@$_SESSION['logado'] != 'okey'){ ?>      
					<a href="login.php" style="color: white; text-decoration:none;">Login</a>        
				<?php } else { ?>      
					<a href="logout.php" style="color: white; text-decoration:none;">Logout</a>         
				<?php } ?>
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
			</table>
			<table class="tablelinks" width="50%" style="float:left;">
				<th><a class="link" href="sobre.php" style ="margin-left: 95px">SOBRE</a></th>
				<th>     <?php if (@$_SESSION['logado'] != 'okey'){ ?>     <a class="link" href="cadastro.php" style="font-size:15px; margin-left:35px">CADASTRAR-SE</a>     <?php } else { ?>      <a class="link" href="perfil.php" style="font-size:15px; margin-left:35px">PERFIL</a>    <?php } ?>      </th>
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