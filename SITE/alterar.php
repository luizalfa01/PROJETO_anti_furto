<?php
	include "templete/topo.php";
	if($con){
		$sql = "select * from cliente WHERE cod_cliente=".$_GET['cod'].";";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){?>

				<form name="incCliente" action="update_cliente.php" method="POST" enctype = "multipart/form-data">
					<table class="tabela_cadastro" width="50%" height="450px">
					
							<input type ='text' name = 'cod_cliente' value='<?php echo $valor['cod_cliente']?>' hidden>
						<tr><td>Nome: </td><td><input type="text" name="nome_cliente" size=40 maxlength=80 class="caixa" value="<?php echo $valor['nome_cliente'];?>"></td></tr>
						<tr><td>Sexo: </td><td><input type="radio" name="sexo_cliente" value = "M"
								<?php echo ($valor['sexo']=="M"?"CHECKED":"");?> > Masculino</input>
							<input type="radio" name="sexo_cliente" value = "F"
								<?php echo ($valor['sexo']=="F"?"CHECKED":"");?> > Feminino</input></td></tr>
						<tr><td>E-mail: </td><td><input type="text" name="email" size=40 class="caixa" value="<?php echo $valor['email_cliente'];?>"></td></tr>
						<tr><td>Senha: </td><td><input type="password" name="senha" size=40 maxlength=80 class="caixa" value="<?php echo $valor['senha'];?>"></td></tr>
						<tr><td>CPF: </td><td><input type="text" name="cpf" size=40 maxlength=14 class="caixa" value="<?php echo $valor['CPF'];?>"></td></tr>
						<tr><td>Telefone: </td><td><input type="text" name="telefone" size=40 maxlength=20 class="caixa" value="<?php echo $valor['telefone'];?>"></td></tr>
						<tr><td>Endereço: </td><td><input type="text" name="end_cliente" size=40 maxlength=80 class="caixa" value="<?php echo $valor['end_cliente'];?>"></td></tr>
						<tr><td>Estado: </td><td><input type="text" name="estado" size=40 maxlength=20 class="caixa" value="<?php echo $valor['estado'];?>"></td></tr>
						<tr><td>Cidade: </td><td><input type="text" name="cidade" size=40 maxlength=40 class="caixa" value="<?php echo $valor['cidade'];?>"></td></tr>
							
							<input type ='text' name = 'fotovelha' value='<?php echo $valor['foto']?>' hidden>
						<tr><td>Foto: </td><td><img src='fotos_clientes/<?php echo $valor['foto']?>' alt='imagem' height='50'>
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