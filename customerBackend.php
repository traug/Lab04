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

if($shipping == "overnight")
{
	$shippingSub = 50;

}
else if($shipping == "free")
{
	$shippingSub = 0;
}
else if($shipping == "three")
{
	$shippingSub = 5;
}


$totalCost = $coolSub + $shadesSub + $bossSub + $shippingSub;

echo '<table>';
echo '<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>';

echo '<tr><td>Cool Hat</td><td>'.$cool.'</td><td>$20.00</td><td>'.$coolSub.'</td></tr>';

echo '<tr><td>Shades Hat</td><td>'.$shades.'</td><td>$35.00</td><td>'.$shadesSub.'</td></tr>';

echo '<tr><td>Boss Hat</td><td>'.$boss.'</td><td>$15.00</td><td>'.$bossSub.'</td></tr>';

echo '<tr><td>Shipping</td><td colspan = 2>'.$shipping.'</td><td>'.$shippingSub.'</td></tr>';

echo '<tr><td colspan = 3>Total Cost</td><td>'.$totalCost.'</td></tr>';

echo '</table>';


?>
