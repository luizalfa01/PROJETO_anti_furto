<?php
	include "templete/topo.php";
?>
	<center><h1>PRODUTOS BIKE</h1></center><br>
	
	<div style="height:60px; margin-bottom:20px">
		<a href="categoria_bike.php"> <img src="image/bicicleta.gif" class="categoria_menu"> </a>
		<a href="categoria_casa.php"> <img src="image/casa.gif" class="categoria_menu"> </a>
		<a href="categoria_carro.php"> <img src="image/carro.jpg" class="categoria_menu"> </a>
		<a href="categoria_moto.php"> <img src="image/moto.jpg" class="categoria_menu"> </a>
	</div>
	
	<table class="tabela_cliente" width = 80%>
		<tr>
			<td>Imagem</td>
			<td>Nome</td>
			<td>Caracteristicas</td>
			<td>Preço</td>
			<td>Estoque</td>
			<td>Comprar</td>
		</tr>
		
	<?php
		$sql = 'select * from produto WHERE (categoria = "Bicicleta") and (estoque > 0);';
		$rs = mysql_query($sql, $con);
		while($valor = mysql_fetch_array($rs)){ ?>
		<tr>
			<td class="item_tabela_cliente"><img src='imagens_produtos/<?php echo $valor["foto"]==null?"nouser.png":$valor["foto"];?>' alt="X" width="100" height="80"></td>
			<td class="item_tabela_cliente"><?=$valor["nome_produto"]?></td>
			<td class="item_tabela_cliente"><?=$valor["descricao"]?></td>
			<td class="item_tabela_cliente"><?=$valor["preco"]?></td>
			<td class="item_tabela_cliente"><?=$valor["estoque"]?></td>
			<td class="item_tabela_cliente" align='center'><a href='comprar.php?cod=<?php echo $valor["cod_produto"];?>'><img src='icones/carrinhu_de_compras2.jpg' alt = 'comprar' height='50'></a></td>
		</tr>
	<?php
		}
		mysql_free_result($rs);
	?>
	
	</table>
	
<?php
	include "templete/rodape.php";
?>