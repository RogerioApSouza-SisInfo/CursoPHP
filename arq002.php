<?php

$hello = "Hello";
$world = "world";

echo "<h1>$hello $world!</h1>";

$$hello = "Olá mundo!";

echo "<br>";

echo "$Hello";
echo "<br>";

var_dump($Hello);

echo "<br>";

var_dump($hello);
echo "<br>";
$anoNasc = 1973;
$sal = 8933.56;
var_dump($anoNasc);
echo "<br>";
var_dump($sal);

echo "<br>";
echo "R$ " . number_format($sal, 2, ",", ".");
echo "<br>";

?>
