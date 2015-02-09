<?php
error_reporting(E_ALL);
ini_set('display_erros', 'On');
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<title>MultTable - Gale</title>
</head>
<body>
	<br>
	<p><b>You will need to enter in 4 parameters using the GET in the URL</b></p>
	<p><BLOCKQUOTE>They need to be entered in the following sequential order in the URL</BLOCKQUOTE></p>
	<ol>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ol>	

<?php

/*Need 4 parameters 
- min-multiplicand
- max-multiplicand
- min-multiplier
- max-multiplier
*/
$minMultiplicand;
$maxMultiplicand;
$minMultiplier;
$maxMultiplier;






echo '<p><h3>GET variables </h3>
<p>
<table border="1">
<tr>
<td>key
<td>Value';

foreach ($_GET as $key => $value) {
	echo '<tr><td>' . $key . '<td>' . $value;
}
echo '<table>';

?>

</body>
</html>