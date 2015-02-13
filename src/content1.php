<?php
session_start();
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


$username = $_POST['username'];



if(!isset($_SESSION['User']) && $username == null){
//	$_SESSION = array();
//	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
//	$filePath = implode('/', $filePath);
//	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
//	$returnLoginURL = $redirect . "/login.php";
	echo "<br>A username must be entered. Click <a href='login.php'>here</a> to return to the login screen";
	header("Location: http://web.engr.oregonstate.edu/~galeg/CS290/W5/login.php", true);
	session_destroy();
	die();
}



if(session_start() == PHP_SESSION_ACTIVE && $_SESSION['youwerehere'] == "yes"){
	if(isset($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
	}

	$_SESSION['youwerehere'] = "yes";

	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}

	$_SESSION['visits']++;
	echo "<br>Hello, $_SESSION[username], you have visited this page $_SESSION[visits] times before!! Click <a href='login.php'>here</a> to logout.\n";
	echo "<br>I have another page that would be worth your time - Click <a href='content2.php'>here</a> to go there.\n";
}

echo "hello";


?>
