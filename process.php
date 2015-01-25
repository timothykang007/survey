<?php

	session_start();

	// echo "Post<br>";
	// var_dump($_POST);

	if(isset($_POST['name'])){
	$_SESSION['name'] = $_POST['name'];
	}
	if(isset($_POST['location'])){
	$_SESSION['location'] = $_POST['location'];
	}
	if(isset($_POST['favorite_language'])){
	$_SESSION['favorite_language'] = $_POST['favorite_language'];
	}
	if(isset($_POST['comment'])){
	$_SESSION['comment'] = $_POST['comment'];
	}

	// echo "Session";
	// var_dump($_SESSION);

	// session_destroy();
	header('Location: result.php');
	exit;
	
?>