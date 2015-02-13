<?php
session_start();
error_reporting(E_ALL);
ini_set('display_erros', 'On');
?>


<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Login - Gale</title>
	</head>
<body>



<?php

if(isset($_SESSION['User'])){
	session_destroy();
	die();
}

?>


<?php 

session_start();

$_SESSION['youwerehere'] = "yes";




?>




<div>
	<form method='post' action='content1.php'>
		<fieldset>
			<legend>Login</legend>
			<p>Username: <input type='text' name='username'/></p>
		</fieldset>
		<p><input type='submit' value='Login'/></p>
	</form>
</div>


</body>
</html>