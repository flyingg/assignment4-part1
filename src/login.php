<?php
error_reporting(E_ALL);
ini_set('display_erros', 'On');
if(isset($_GET['logout'])){
	session_start();
	session_destroy();}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Login - Gale</title>
	</head>
<body>

<p>testing</p>


<div>
	<form method="post" action="content1.php">
		<fieldset>
			<legend>Login</legend>
			<p>Username: <input type="text" name="username"/></p>
		</fieldset>
		<p><input type="submit" value="Login"/></p>
	</form>
</div>

</body>
</html>