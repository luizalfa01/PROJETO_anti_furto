<?php
	include "templete/topo.php";
?>

	<center><h1>PEDIDOS</h1></center><br>
	
	<table class="tabela_cliente" width = 80%>
	<tr>
		<th>Codigo Pedido</th>
		<th>Data Pedido</th>
		<th>Codigo Cliente</th>
		<th>Nome cliente</th>
		<th>Produto</th>
		<th>Fornecedor</th>
	</tr>
	
	<?php
		$sql = "select * from tabela_pedido;";
		$rs = mysql_query($sql, $con);
		while($valor = mysql_fetch_array($rs)){ ?>
		<tr>
			<td class="item_tabela_cliente"><?=$valor["cod_pedido"]?></td>
			<td class="item_tabela_cliente"><?=$valor["data_pedido"]?></td>
			<td class="item_tabela_cliente"><?=$valor["cod_cliente"]?></td>
			<td class="item_tabela_cliente"><?=$valor["nome_cliente"]?></td>
			<td class="item_tabela_cliente"><?=$valor["nome_produto"]?></td>
			<td class="item_tabela_cliente"><?=$valor["nome"]?></td>
		</tr>
		<?php
			}
			mysql_free_result($rs);
		?>

	</table>
	
<?php
	include "templete/rodape.php";
?>