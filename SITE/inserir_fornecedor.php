<?php
	include "templete/topo.php";
?>

	<center><h1>INSERIR FORNECEDOR</h1></center>
	
	<form name="cadastroFornecedor" action="insere_fornecedor.php" method="POST" enctype = "multipart/form-data">
	<table class="tabela_cadastro" width="50%" height="450px">
	
		<tr><td>Nome: </td><td><input type="text" name="nome" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Telefone: </td><td><input type="text" name="telefone" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Endereço: </td><td><input type="text" name="end_fornecedor" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>E-mail: </td><td><input type="text" name="email" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Cidade: </td><td><input type="text" name="cidade" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Estado: </td><td><input type = "text" name = "estado" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Pais: </td><td><input type = "text" name = "pais" size=40 maxlength=80 class="caixa"></td></tr>
		
	</table>
	
	<center>
	<input type = "reset" value = "Apagar" class="botao">
	<input type = "submit" value = "Enviar" class="botao">
	</center>
	</form>
	
<?php
	include "templete/rodape.php";
?>