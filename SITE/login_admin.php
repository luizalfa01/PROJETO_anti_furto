<?php
	include "templete/topo.php";
?>

	<form name="incUser" action ="admin/verifica_sessao_admin.php" method="POST">
	<center><h1 style="margin-bottom: 50px">LOGIN ADMINISTRADOR</h1></center>
	<center><table class="tabela_login" width="50%" height="100px">
	<tr><td>Username: </td><td><input type="text" name="username" size="20" class="caixa"></td></tr>
	<tr><td>Senha: </td><td><input type="password" name ="senha" size="20" class="caixa"></td></tr>
	</center></table>
	<input type="reset" value="Apagar" class="botao_login" > <input type="submit" value="Logar" class="botao_login">
	</form>

<?php
	include "templete/rodape.php";
?>