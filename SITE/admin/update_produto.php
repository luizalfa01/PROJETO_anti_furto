<?php
	include('templete/topo.php');
	include "valida_sessao.php";
	
	$cod_produto = $_POST['cod_produto'];
	$nome_produto = $_POST['nome_produto'];
	$descricao_produto = $_POST['descricao_produto'];
	$preco_produto = $_POST['preco_produto'];
	$estoque_produto = $_POST['estoque_produto'];
	$fornecedor = $_POST['fornecedor'];
	
	
	if($_FILES['foto']['error'] == 0){
		$ext = substr($_FILES['foto']['name'],
								strpos(strrev($_FILES['foto']['name']),'.')*-1);
		
		$foto = md5(time().$_FILES['foto']['name']).".".$ext;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'imagens_produtos/' . $foto);
		if($_POST['fotovelha'] != "nouser.png"){
			unlink('imagens_produtos/'.$_POST['fotovelha']);	
		}		
	} else{
		$foto = -1;
	}
	
	if($con){
		$sql = "update produto set
				nome_produto = '$nome_produto',
				descricao = '$descricao_produto',
				preco = $preco_produto,
				estoque = $estoque_produto,
				cod_fornecedor = '$fornecedor'".
				($foto == -1? "" : ", foto = '$foto'")."
			where cod_produto = \"$cod_produto\";";
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Produto Atualizado com sucesso.</h1>";
		} else {
			echo "Erro de Alteração :" . mysql_error();
		}
	}else{
		echo "Erro de conexão: ".mysql_error();
	}
	
	include('templete/rodape.php');
?>