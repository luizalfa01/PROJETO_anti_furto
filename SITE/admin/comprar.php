<?php
	include "templete/topo.php";
	include "valida_sessao.php";
	
	$cod_produto = $_GET['cod'];
?>

	<center><h1>CONFIRMAÇÃO DA COMPRA</h1></center>
	
	<form name="confirmacaoCompra" action="confirmacao_compra.php" method="POST" enctype = "multipart/form-data">
	<table class="tabela_cadastro" width="50%" height="450px">
		
		<tr><td>Nome</td><td><input type="text" name="nome_cliente" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Username</td><td><input type="text" name="username" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>Senha</td><td><input type="password" name="senha" size=40 maxlength=80 class="caixa"></td></tr>
		<tr><td>E-mail</td><td><input type="text" name="email" size=40 class="caixa"></td></tr>
			<input type ='text' name = 'cod_produto' value='<?php echo $cod_produto?>' hidden>
		
	</table>
	
	<center>
	<input type = "reset" value = "Apagar" class="botao">
	<input type = "submit" value = "Enviar" class="botao">
	</center>
	</form>

<?php
	include "templete/rodape.php";
?>