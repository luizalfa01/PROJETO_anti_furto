<?php
	include "templete/topo.php";
?>

	<center><h1>FORNECEDORES</h1></center>
	
	<input class="botao_produto" type="submit" value="INSERIR FORNECEDOR" onclick="location.href='inserir_fornecedor.php'">
	
	<table class="tabela_cliente" width = 80%>
		<tr>
			<td>Cod</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Endereço</td>
			<td>E-mail</td>
			<td>Cidade</td>
			<td>Estado</td>
			<td>Pais</td>
		</tr>
		
		<?php
			$sql = "select * from fornecedor;";
			$rs = mysql_query($sql, $con);
			while ($valor = mysql_fetch_array($rs)){ ?>
			<tr>
				<td class="item_tabela_cliente"><?=$valor["cod_fornecedor"]?></td>
				<td class="item_tabela_cliente"><?=$valor["nome"]?></td>
				<td class="item_tabela_cliente"><?=$valor["telefone"]?></td>
				<td class="item_tabela_cliente"><?=$valor["end_fornecedor"]?></td>
				<td class="item_tabela_cliente"><?=$valor["email"]?></td>
				<td class="item_tabela_cliente"><?=$valor["cidade"]?></td>
				<td class="item_tabela_cliente"><?=$valor["estado"]?></td>
				<td class="item_tabela_cliente"><?=$valor["pais"]?></td>
			</tr>
		<?php
			}
			mysql_free_result($rs);
		?>
			
	</table>
	
<?php
	include "templete/rodape.php";
?>