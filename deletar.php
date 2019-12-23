<?php

	/**
	* chamando o aquivo de conexão com o BD
	**/
	require('cnx.php');

	/**
	* recuperando variável com o id do
	* registro a ser excluído
	**/
	$ram_id = $_GET['ram_id'];

	$sql = "DELETE FROM ramal WHERE ram_id = '$ram_id'";

	/**
	/* verificando se conexão está ativa
	**/
	if($mysqli->query($sql) === TRUE){
		/**
		* caso esteja, exclui no banco
		**/
		echo "Regitro deletado!";
	} else {
		/**
		* caso não, apresenta o erro
		**/
		echo "Erro".$sql." / ".$mysqli->error;
	}

	/**
	* fecha conexão
	**/	
	$mysqli->close();

	/**
	* redirecionando para a listagem
	**/
	header('location: listarramal.php');

// echo 'teste';