<?php
	/**
	* chamando o aquivo de conexão com o BD
	**/
	require('cnx.php');

	/**
	* recuperando variável com o id do
	* registro a ser excluído
	**/
	$ram_id		= $_GET['ram_id'];
	$secretaria = $_GET["ram_secretaria"];
	$setor 		= $_GET["ram_setor"];
	$nome 		= $_GET["ram_nomepessoa"];
	$ramal 		= $_GET["ram_numero"];
	$telefone 	= $_GET["ram_telefone"];
	$celular 	= $_GET["ram_celular"];

	$sql = "UPDATE ramal
			SET ram_secretaria = '$secretaria',
			ram_setor = '$setor',
			ram_nomepessoa = '$nome',
			ram_numero = '$ramal',
			ram_telefone = '$telefone',
			ram_celular = '$celular'
			WHERE ram_id = '$ram_id'";

	/**
	* verificando se conexão está ativa
	**/
	if($mysqli->query($sql) === TRUE){
		/**
		* caso esteja, insere no banco
		**/
		echo "Sucesso";
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