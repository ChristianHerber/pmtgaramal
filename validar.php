<?php
	
	require('cnx.php');

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	/**
	* Teste para login e sessão
	**/

	// $sqlQueryLogin = 'SELECT * FROM login where user_login = "$user" AND pass_login = "$pass"';
	// $result = mysqli_query($mysqli, $sqlQueryLogin);
	// $recordCount = mysqli_num_rows($result);
	// if ($recordCount > 0) {

	// 	echo "certo";
	// } else {
	// 	echo "erro";
	// }

	if( $user == 'admin' && $pass == 'admin'){
		header('location: listarramal.php');
	} else {
		header('location: login?msg=erro');
	}