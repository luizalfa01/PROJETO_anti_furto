<?php
	include "templete/topo.php";
	include "valida_sessao.php";
?>

	<center><h1>CLIENTES</h1></center><br>
	
	<table class="tabela_cliente" width = 80%>
	<tr>
		<th>Foto</th>
		<th>Nome do Cliente</th>
		<th>Username</th>
		<th>Sexo</th>
		<th>E-mail</th>
		<th>Alterar</th>
		<th>Excluir</th>
	</tr>

<?php
	
	$sql = "select * from tabela_cliente;";
	$rs = mysql_query($sql, $con);
	while($valor = mysql_fetch_array($rs)){ ?>
		<tr>
			<td class="item_tabela_cliente"><img src='fotos_clientes/<?php echo $valor["foto"]==null?"nouser.png":$valor["foto"];?>' alt="X" width="100" height="80"></td>
			<td class="item_tabela_cliente"><?=$valor["nome_cliente"]?></td>
			<td class="item_tabela_cliente"><?=$valor["username"]?></td>
			<td class="item_tabela_cliente"><?=(($valor["sexo"] == "M")?"Masculino":"Feminino")?></td>
			<td class="item_tabela_cliente"><?=$valor["email_cliente"]?></td>
			<td class="item_tabela_cliente" align='center'><a href='alterar.php?cod=<?php echo $valor["username"];?>'><img src='icones/editar.png' alt = 'edit' height='16'></a></td>
			<td class="item_tabela_cliente" align='center'><a href='deletar.php?cod=<?php echo $valor["username"];?>'><img src='icones/deletar.png' alt = 'delet' height='16'></a></td>
		</tr>
		<?php
	}
	mysql_free_result($rs);
?>

</table>
	
<?php
	include "templete/rodape.php";
?>