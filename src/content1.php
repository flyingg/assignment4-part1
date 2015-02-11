<?php
error_reporting(E_ALL);
ini_set('display_erros', 1);
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Content1 - Gale</title>
	</head>
<body>


<?php

echo "testing";


session_start();
if(isset($_POST['action']) && $_POST['action'] == 'end'){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	die();
}

if(session_start() == PHP_SESSION_ACTIVE){
	if(is_integer($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
	}

	if(!is_link($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}

	$_SESSION['visits']++;
	echo "yo dog, $_SESSION[username], you have been to this site like $_SESSION[visits] times boi!! \n";
}

echo "testing";

?>
