<?php
session_start();
error_reporting(E_ALL);
ini_set('display_erros', 'On');


// $username = $_POST['username'];

// if(!isset($_SESSION['User']) && $username == null){
// //	$_SESSION = array();
// //	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
// //	$filePath = implode('/', $filePath);
// //	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
// //	$returnLoginURL = $redirect . "/login.php";
// 	echo "<br>A username must be entered. Click <a href='login.php'>here</a> to return to the login screen";
// 	header("Location: http://web.engr.oregonstate.edu/~galeg/CS290/W5/login.php", true);
// 	session_destroy();
// 	die();
// }

if(session_start() == PHP_SESSION_ACTIVE && $_SESSION['youwerehere'] == "yes"){

	// if(isset($_POST['username'])){
	// 	$_SESSION['username'] = $_POST['username'];
	// }


	$_SESSION['youwerehere'] = "yes";

	echo "
	<form method='post' action='content1.php'>
	<input type='submit' value='Back' name='username'> 
	</form>";

	echo "<br><img src='https://s-media-cache-ak0.pinimg.com/236x/5a/bf/61/5abf61bc61d42c2c402408c7b527503f.jpg' alt='Animal' style='width:304px;height:228px'>";
} else{

	echo "You do not have access for this page. You must login - do so by clicking <a href='login.php'>here</a>.";
}


?>