<?php
error_reporting(E_ALL);
ini_set('display_erros', 'On');
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<title>LoopBack - Gale</title>
</head>
<body>

<?php

$getVariable = $_GET['hello'];

echo $getVariable;

echo "<br>I just wanted to say a few thing to you";


/***Helper Section to let you know what you've typed in***/
echo "<br><br>";
echo '<p><h3>Your Entered parameters</h3>
<p>
<table border="1">
<tr>
<td>key
<td>Value';

foreach ($_GET as $key => $value) {
	echo '<tr><td>' . $key . '<td>' . $value;
}
echo '<table>';
echo '</table>';
?>

