<?php
	include "templete/topo.php";
	include "valida_sessao.php";
	
	$cod_produto = $_POST["cod_produto"];
	$username = $_POST["username"];
	$nome_cliente = $_POST["nome_cliente"];
	$senha = md5($_POST["senha"]);
	$email = $_POST["email"];
	
	$data = date('Y/m/d');
	
	if($con){
		$sql = "select * from cliente WHERE username = '$username'";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){
				if(($nome_cliente == $valor['nome_cliente']) && ($senha == $valor['senha']) && ($email == $valor['email_cliente'])){
					$sql = "INSERT INTO pedido (username, data_pedido, cod_produto)".
							"VALUES ('$username', '$data', '$cod_produto')";
					$rs = mysql_query($sql, $con);
					if($rs){
						$sql = "UPDATE produto set estoque = (estoque - 1) WHERE cod_produto = $cod_produto";
						$rs = mysql_query($sql, $con);
						if($rs){
							echo "<h1>Compra efetuada com sucesso.</h1>";
						}
						else{
							echo "<h1>Compra NÃO efetuada com sucesso.</h1>";
						}
					} else {
						echo "Erro na confirmação da compra :" . mysql_error();
					}
				}
				ELSE{
					echo "<h1>DADOS INVALIDOS !!!</h1>";
				}
			};
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}

	include "templete/rodape.php";
?>