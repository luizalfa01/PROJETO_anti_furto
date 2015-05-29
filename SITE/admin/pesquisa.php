<?php
	include "templete/topo.php";
	include "valida_sessao.php";
?>
		
	<h1>Pesquisa...</h1><br>
	
	<?php
	if(empty($_POST['procurar'])){ echo "<center><h3>Campo de pesquisa vazio</h3></center>";}
	else { 
	
	$procurar = $_POST['procurar']; 
	
	$sql = "select * from produto WHERE nome_produto LIKE '%$procurar%'";
	$rs = mysql_query($sql, $con);
	if($rs){ 
		if(mysql_fetch_array($rs) != 0){ ?>
	
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
		$sql = "select * from produto WHERE nome_produto LIKE '%$procurar%'";
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
	
	<?php } 
		else{
			echo "<center><h3>Item não encontrado</center></h3>";
		}
		}
		} ?>
	
<?php
	include "templete/rodape.php";
?>