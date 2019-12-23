<?php
	/**
	* chamando o aquivo de conexão com o BD
	**/
	require('cnx.php');

	/**
	* recuperando o valor dos campos do formulário
	* e atribuindo para as variáveis
	**/
	$secretaria = $_POST["ram_secretaria"];
	$setor 		= $_POST["ram_setor"];
	$nome 		= $_POST["ram_nomepessoa"];
	$ramal 		= $_POST["ram_numero"];
	$telefone 	= $_POST["ram_telefone"];
	$celular 	= $_POST["ram_celular"];

	/**
	* passando o código SQl de inserção no banco
	* para a variável $sql
	**/
	$sql = "INSERT INTO ramal
			(
				ram_secretaria,
				ram_setor,
				ram_nomepessoa,
				ram_numero,
				ram_telefone,
				ram_celular
			)
			VALUES 
			(
				'$secretaria',
				'$setor',
				'$nome',
				'$ramal', 
				'$telefone', 	
				'$celular'
			)";

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