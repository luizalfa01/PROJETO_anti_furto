<?php
	include "templete/topo.php";
	include "valida_sessao.php";
	
	$categoria = $_POST['op'];

	$nome_produto = $_POST["nome_produto"];
	$descricao_produto = $_POST["descricao_produto"];
	$preco_produto = $_POST["preco_produto"];
	$estoque_produto = $_POST["estoque_produto"];
	$fornecedor = $_POST["fornecedor"];
	
	if($_FILES['imagem']['error'] == 0){
		$ext = substr($_FILES['imagem']['name'],
							strpos(strrev($_FILES['imagem']['name']),'.')*-1);
							
		$imagem = md5(time().$_FILES['imagem']['name']).".".$ext;
		move_uploaded_file($_FILES['imagem']['tmp_name'], 'imagens_produtos/' . $imagem);
		
	} else{
		$imagem = 'nouser.png';
	}
	
	if($con){
		$sql = "insert into produto (descricao, nome_produto, preco, foto, estoque, cod_fornecedor, categoria)".
			"values('$descricao_produto', '$nome_produto', '$preco_produto', '$imagem', '$estoque_produto', '$fornecedor', '$categoria')";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Produto cadastrado com sucesso.</h1>";
		}
		else{
			echo "Erro de inclusão: ".mysql_error();
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
	
	include "templete/rodape.php";
?>