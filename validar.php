<?php
	
	require('cnx.php');

	$user = trim($_POST['user']);
	$pass = trim($_POST['pass']);

	$sqlQueryLogin = "SELECT * FROM login WHERE user_login = '$user' AND pass_login = '$pass'";

	$result = mysqli_query($mysqli, $sqlQueryLogin);
	$recordCount = mysqli_num_rows($result);
	if ($recordCount != 1) {
		header('location: login?msg=erro');
	} else {
		session_start();
		$_SESSION['user_login'] = $user;
		$_SESSION['pass_login'] = $pass;
		header('location: listarramal');
		exit();
	}