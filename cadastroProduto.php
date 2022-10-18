<?php

	$codigo = $_POST['codigo'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];
	$quantEstoque = $_POST['quantEstoque'];
	$dataRegistro = $_POST['dataRegistro'];
	
	$con = mysqli_connect("localhost", "root", "", "Produtos");
	$insert = "insert into Produtos values ($codigo, '$descricao', $valor, $quantEstoque, '$dataRegistro')";
	$query = mysqli_query($con, $insert);
	
	if($query){
			echo "Dados inseridos com sucesso!";
	}
	else{
		echo "Erro ao cadastrar no banco!";
	}
	
/*	echo "Codigo: " . $codigo . "<br/>";
	echo "Descricao: " . $descricao . "<br/>";
	echo "Valor: " . $valor . "<br/>";
	echo "Quantidade de Estoque: " . $quantEstoque . "<br/>";
	echo "Data de Registro:  " . $dataRegistro . "<br/>";
*/
	
?> 