<?php
	include "templete/topo.php";
?>

	<center><h1>CADASTRO</h1></center><br>
	
	<form name="cadastroCliente" action="insere.php" method="POST" enctype = "multipart/form-data">
	<table class="tabela_cadastro" width="50%" height="450px">
	
		<tr><td>Nome: </td><td><input type="text" name="nome_cliente" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Sexo: </td><td><input type="radio" name="sexo_cliente" value = "M"
			CHECKED> Masculino</input>
			<input type="radio" name="sexo_cliente" value = "F"> Feminino</input></td></tr>
		<tr><td>E-mail: </td><td><input type="email" name="email" size=40 class="caixa"></td></tr>
		<tr><td>Username: </td><td><input type="text" name="username" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Senha: </td><td><input type="password" name="senha" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>CPF: </td><td><input type="text" name="cpf" size=40 maxlength=14 class="caixa"></td></tr>
		<tr><td>Telefone: </td><td><input type="text" name="telefone" size=40 maxlength=20 class="caixa"></td></tr>
		<tr><td>Endereço: </td><td><input type="text" name="end_cliente" size=40 maxlength=80 class="caixa"></td></tr>
		
		<tr><td>Estado: </td><td><input type="text" name="estado" size=40 maxlength=20 class="caixa"></td></tr>
		<tr><td>Cidade: </td><td><input type="text" name="cidade" size=40 maxlength=40 class="caixa"></td></tr>
		
		<tr><td>Foto: </td><td><input type = "file" name = "foto" id = "foto"/></td></tr>
		
	</table>
	<center>
	<input type = "reset" value = "Apagar" class="botao">
	<input type = "submit" value = "Enviar" class="botao">
	</center>
	</form>

<?php
	include "templete/rodape.php";
?>