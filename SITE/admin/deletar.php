<?php
	include "templete/topo.php";
	include "valida_sessao.php";

	$username = $_GET['cod'];
	
	if($con){
		$sql = 'SELECT * from cliente WHERE username ="'. $username .'";';
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){
				$sql = 'DELETE FROM cliente where username ="'.$username.'";';
				$rs = mysql_query($sql, $con);
				if($rs){
					echo "<h1>Cliente Excluido com sucesso</h1>";
					if(($valor['foto']!='nouser.png') and ($valor['foto']!=null)){
						unlink('fotos_clientes/'.$valor['foto']);
					}
					else{
						"Erro de exclusão do cliente: ". mysql_error();
					}
				}
			}
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
			
	include "templete/rodape.php";
?>