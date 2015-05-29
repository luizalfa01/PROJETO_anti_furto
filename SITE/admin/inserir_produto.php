<?php
	include "templete/topo.php";
	include "valida_sessao.php";
?>
	<center><h1>INSERIR PRODUTO</h1></center>
	
	<form name="cadastroCliente" action="insere_produto.php" method="POST" enctype = "multipart/form-data">
	<table class="tabela_cadastro" width="50%" height="450px">
	
		<tr><td>Nome: </td><td><input type="text" name="nome_produto" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Categoria: </td><td>
			<input type="radio" name = "op" value = "bicicleta" checked>Bicicleta
			<input style= "margin-left:10px;" type="radio" name = "op" value = "casa">Casa
			<input style= "margin-left:10px;" type="radio" name = "op" value = "carro">Carro
			<input style= "margin-left:10px;" type="radio" name = "op" value = "moto">Moto
		</td></tr>	
		<tr><td>Descrição: </td><td><input type="text" name="descricao_produto" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Preço: </td><td><input type="text" name="preco_produto" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Estoque: </td><td><input type="text" name="estoque_produto" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Cod. Fornecedor: </td><td><input type="text" name="fornecedor" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Imagem: </td><td><input type = "file" name = "imagem" id = "imagem"/></td></tr>
		
	</table>
	
	<center>
	<input type = "reset" value = "Apagar" class="botao">
	<input type = "submit" value = "Enviar" class="botao">
	</center>
	</form>
	
<?php
	include "templete/rodape.php";
?>