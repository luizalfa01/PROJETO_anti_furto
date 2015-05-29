<?php
	include "templete/topo.php";
	include "valida_sessao.php";
	if($con){
		$sql = 'select * from produto WHERE cod_produto='.$_GET['cod'].';';
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){?>

				<form name="incCliente" action="update_produto.php" method="POST" enctype = "multipart/form-data">
					<table class="tabela_cadastro" width="50%" height="450px">
					
							<input type ='text' name = 'cod_produto' value='<?php echo $_GET['cod']?>' hidden>
						<tr><td>Nome: </td><td><input type="text" name="nome_produto" size=40 maxlength=80 class="caixa" value="<?php echo $valor['nome_produto'];?>"></td></tr>
						
						<tr><td>Descrição: </td><td><input type="text" name="descricao_produto" size=40 maxlength=80 class="caixa" value="<?php echo $valor['descricao'];?>"></td></tr>
						<tr><td>Preço: </td><td><input type="text" name="preco_produto" size=40 maxlength=80 class="caixa" value="<?php echo $valor['preco'];?>"></td></tr>
						<tr><td>Estoque: </td><td><input type="text" name="estoque_produto" size=40 maxlength=80 class="caixa" value="<?php echo $valor['estoque'];?>"></td></tr>
						<tr><td>Cod. Fornecedor: </td><td><input type="text" name="fornecedor" size=40 maxlength=80 class="caixa" value="<?php echo $valor['cod_fornecedor'];?>"></td></tr>
						
							<input type ='text' name = 'fotovelha' value='<?php echo $valor['foto']?>' hidden>
						<tr><td>Imagem: </td><td><img src='imagens_produtos/<?php echo $valor['foto']?>' alt='imagem' height='50'>
								<input type ='file' name = 'foto' id = 'foto'></td></tr>
						
					</table>
					
					<center>
						<input type = "reset" value = "Apagar" class="botao">
						<input type = "submit" value = "Enviar" class="botao">
					</center>
				</form>

<?php
			}
		}
	}
	
	include "templete/rodape.php";
?>