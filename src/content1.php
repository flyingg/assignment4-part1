<?php
error_reporting(E_ALL);
ini_set('display_erros', 'On');

	echo "HI, im PHP yo";
	echo "string";
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<title>PHP Demo </title>
</head>
<body>
<?php
$foo = 5;


//variables and strings
echo $bar;
echo $foo + 15 . ' it the initial value of foo <br> summed with 15';
echo "<p>If we use a double quotes \$foo will be evaluated. \$foo = $foo";
$foo = '<p>$foo is now a string ';
echo "<p>if we use double quotes we can make newlines with \\n \n like this. <br> but ";

//Arrays 
$myArray = array();

$aPopulatedArray = array(
	'foo' => 'THIS',
	'baz' => 5,
	6 => ' I am index 6'
);

$aPopulatedArray[] = 'last pushed';

echo "<p><b>$aPopulatedArray[foo]</b> is associated to the key 'foo'. ";
echo "The value using the key 'baz' i <b>$aPopulatedArray[baz]</b><br>";
echo "The last value of the array is: <b>$aPopulatedArray[6]</b> That is also slang for pinkman yo!";
echo "<br><br><b>Yeah SCIENCE mr. Whtie.<b>";



//$_GET is an array containing variables passed in the URL 

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

echo '</body>
</html>';

?>

