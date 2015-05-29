<?php
	include "templete/topo.php";
	include "valida_sessao.php";
?>
	<center><h1>PRODUTOS</h1></center><br>
	
	<div style="height:60px; margin-bottom:20px">
		<a href="categoria_bike.php"> <img src="image/bicicleta.gif" class="categoria_menu"></a>
		<a href="categoria_casa.php"> <img src="image/casa.gif" class="categoria_menu"></a>
		<a href="categoria_carro.php"> <img src="image/carro.jpg" class="categoria_menu"></a>
		<a href="categoria_moto.php"> <img src="image/moto.jpg" class="categoria_menu"></a>
	</div>
	
	<input class="botao_produto" type="submit" value="INSERIR PRODUTO" onclick="location.href='inserir_produto.php'">
	
	<table class="tabela_cliente" width = 80%>
		<tr>
			<th>Imagem</th>
			<th>Nome</th>
			<th>Categoria</th>
			<th>Caracteristicas</th>
			<th>Preço</th>
			<th>Estoque</th>
			<th>Alterar</th>
			<th>Excluir</th>
		</tr>
		
	<?php
		$sql = "select * from produto;";
		$rs = mysql_query($sql, $con);
		while($valor = mysql_fetch_array($rs)){ ?>
		<tr>
			<td class="item_tabela_cliente"><img src='imagens_produtos/<?php echo $valor["foto"]==null?"nouser.png":$valor["foto"];?>' alt="X" width="100" height="80"></td>
			<td class="item_tabela_cliente"><?=$valor["nome_produto"]?></td>
			<td class="item_tabela_cliente"><?=$valor["categoria"]?></td>
			<td class="item_tabela_cliente"><?=$valor["descricao"]?></td>
			<td class="item_tabela_cliente"><?=$valor["preco"]?></td>
			<td class="item_tabela_cliente"><?=$valor["estoque"]?></td>
			<td class="item_tabela_cliente" align='center'><a href='alterar_produto.php?cod=<?php echo $valor["cod_produto"];?>'><img src='icones/editar.png' alt = 'edit' height='16'></a></td>
			<td class="item_tabela_cliente" align='center'><a href='deletar_produto.php?cod=<?php echo $valor["cod_produto"];?>'><img src='icones/deletar.png' alt = 'delet' height='16'></a></td>
	<?php
		}
		mysql_free_result($rs);
	?>
	
	</table>
	
<?php
	include "templete/rodape.php";
?>