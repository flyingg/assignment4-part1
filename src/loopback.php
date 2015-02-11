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
/***Variables needed for condition checks***/
$parameters;
$displayParameters = array();

echo "<br>";

/***Actual "POST"/"GET" check***/
if ($_SERVER['REQUEST_METHOD'] == "GET"){
	if ($displayParameters == $_GET) {
		echo "{\"Type\":\"GET\" , \"parameters\" : null}";
	}
	else {
		$parameters = json_encode($_GET);
		echo " {\"Type\":\"GET\" , \"parameters\" : $parameters}";
	}
}
else {
	if ($displayParameters==$_POST) {
		echo " {\"Type\":\"POST\" , \"parameters\" : null}";
	}
	else {
		$parameters = json_encode($_POST);
		echo " {\"Type\":\"POST\" , \"parameters\" : $parameters}";
	}
}

/***Helper Section used to see if "GET" check was working ***/
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

</body>
</html>