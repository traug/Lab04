<?php
$cool = $_POST["cool"];
$shades = $_POST["shades"];
$boss = $_POST["boss"];
$shipping = $_POST["ship"];
$username = $_POST["username"];
$password = $_POST["password"];

$coolSub = 20*$cool;
$shadesSub = 35*$shades;
$bossSub = 15*$boss;
$shippingSub = 0;

echo '<link rel="stylesheet" type="text/css" href="style.css">';

echo "<script type='text/javascript'>alert('Hello, $username. Your password is: $password');</script>";

if($shipping == "overnight")
{
	$shippingSub = 50;

}
else if($shipping == "free")
{
	$shippingSub = 0;
}
else if($shipping == "three day")
{
	$shippingSub = 5;
}


$totalCost = $coolSub + $shadesSub + $bossSub + $shippingSub;

echo '<table class = outputForm>';
echo '<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>';

echo '<tr><td>Cool Hat</td><td class = specialCells>'.$cool.'</td><td class = specialCells>$20.00</td><td class = specialCells>$'.$coolSub.'.00</td></tr>';

echo '<tr><td>Shades Hat</td><td class = specialCells>'.$shades.'</td><td class = specialCells>$35.00</td><td class = specialCells>$'.$shadesSub.'.00</td></tr>';

echo '<tr><td>Boss Hat</td><td class = specialCells>'.$boss.'</td><td class = specialCells>$15.00</td><td class = specialCells>$'.$bossSub.'.00</td></tr>';

echo '<tr><td>Shipping</td><td colspan = 2 class = specialCells>'.$shipping.'</td><td class = specialCells>$'.$shippingSub.'.00</td></tr>';

echo '<tr><td colspan = 3>Total Cost</td><td>$'.$totalCost.'.00</td></tr>';

echo '</table>';


?>
