<?php
	include "templete/topo.php";
	include "valida_sessao.php";

	$cod = $_GET['cod'];
	
	if($con){
		$sql = 'SELECT * from produto WHERE cod_produto ='.$cod.';';
		$rs = mysql_query($sql, $con);
		if($rs){
			if($valor = mysql_fetch_array($rs)){
				$sql = 'DELETE FROM produto where cod_produto ='.$cod.';';
				$rs = mysql_query($sql, $con);
				if($rs){
					echo "<h1>Produto Excluido com sucesso</h1>";
					if(($valor['foto']!='nouser.png') and ($valor['foto']!=null)){
						unlink('imagens_produtos/'.$valor['foto']);
					}
					else{
						"Erro de exclusão do produto: ". mysql_error();
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