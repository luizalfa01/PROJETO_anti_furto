<?php
	include "templete/topo.php";
	include "valida_sessao.php";
	
	$cod_produto = $_POST["cod_produto"];
	$cod_cliente = $_POST["cod_cliente"];
	$nome_cliente = $_POST["nome_cliente"];
	$senha = $_POST["senha"];
	$email = $_POST["email"];
	
	$data = date('Y/m/d');
	
	if($con){
		$sql = "select * from cliente WHERE cod_cliente = $cod_cliente";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){
				if(($nome_cliente == $valor['nome_cliente']) && ($senha == $valor['senha']) && ($email == $valor['email_cliente'])){
					$sql = "INSERT INTO pedido (cod_cliente, data_pedido, cod_produto)".
							"VALUES ('$cod_cliente', '$data', '$cod_produto')";
					$rs = mysql_query($sql, $con);
					if($rs){
						echo "<h1>Compra efetuada com sucesso.</h1>";
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