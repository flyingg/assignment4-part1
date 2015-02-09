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
<?php
/***Start of propgram - Check input and keep track of errors***/
$numberOfErrors = 0;

$casted_minMultiplicand = isset($_GET['min-multiplicand']) ? (int) $_GET['min-multiplicand'] : null;
$minMultiplicand = $_GET['min-multiplicand'];
$casted_maxMultiplicand = isset($_GET['max-multiplicand']) ? (int) $_GET['max-multiplicand'] : null;
$maxMultiplicand = $_GET['max-multiplicand'];
$casted_minMultiplier = isset($_GET['min-multiplier']) ? (int) $_GET['min-multiplier'] : null;
$minMultiplier = $_GET['min-multiplier'];
$casted_maxMultiplier = isset($_GET['max-multiplier']) ? (int) $_GET['max-multiplier'] : null;
$maxMultiplier = $_GET['max-multiplier'];

//Check input in the URL for the following: min-multiplicand
if($_GET['min-multiplicand'] == null){
	echo 'Missing parameter [min-multiplicand].';
	$numberOfErrors++;
}

if($minMultiplicand!=(integer)$minMultiplicand || !$casted_minMultiplicand){
	echo '[min-multiplicand] must be an integer.';
	$numberOfErrors++;
}

echo "<br><br>";

//Check input in the URL for the following: max-multiplicand
if($_GET['max-multiplicand'] == null){
	echo 'Missing parameter [max-multiplicand].';
	$numberOfErrors++;
}

if($maxMultiplicand!=(integer)$maxMultiplicand || !$casted_maxMultiplicand){
	echo '[max-multiplicand] must be an integer.';
	$numberOfErrors++;
}

echo "<br><br>";

//Check input in the URL for the following: min-multiplier
if($_GET['min-multiplier'] == null){
	echo 'Missing parameter [min-multiplier].';
	$numberOfErrors++;
}

if($minMultiplier!=(integer)$minMultiplier || !$casted_minMultiplier){
	echo '[min-multiplier] must be an integer.';
	$numberOfErrors++;
}

echo "<br><br>";

//Check input in the URL for the following: max-multiplier
if($_GET['max-multiplier'] == null){
	echo 'Missing parameter [max-multiplier].';
	$numberOfErrors++;
}

if($maxMultiplier!=(integer)$maxMultiplier || !$casted_maxMultiplier){
	echo '[max-multiplier] must be an integer.';
	$numberOfErrors++;
}

$i; 
$j; 
$productResult;

if ($minMultiplicand > $maxMultiplicand){
	echo "Minimum [multiplicand] larger than maximum.";
	$numberOfErrors++;
}

if ($minMultiplier > $maxMultiplier){
	echo "Minimum [multiplier] larger than maximum.";
	$numberOfErrors++;
}




if($numberOfErrors > 0){
	echo "<table>";
	echo "<caption>PHP MultTable</capation>";
	echo "<thead>";
	echo "<tr>";
	echo "<th></th>";
	for($i = $minMultiplier; $i <= $maxMultiplier; $i++){
		echo "<th>$i</th>";
	}
	echo "</tr>";
	echo "</thead>";
	echo "</tbody>";
	for ($j = $minMultiplicand; $j <= $maxMultiplicand; $j++){
		echo "<tr>";
		echo "<th>$j</th>";
		for ($i = $minMultiplier; $i <= $casted_maxMultiplier; $i++){
			$productResult = $i * $j;
			echo "<td>$productResult</td>";
		}
		echo "</tr>";
	}












	//echo "";

	//echo "</table>";
}



// /***Helper Section to let you know what you've typed in***/
// echo '<p><h3>Your Entered parameters</h3>
// <p>
// <table border="1">
// <tr>
// <td>key
// <td>Value';

// foreach ($_GET as $key => $value) {
// 	echo '<tr><td>' . $key . '<td>' . $value;
// }
// echo '<table>';
?>

</body>
</html>