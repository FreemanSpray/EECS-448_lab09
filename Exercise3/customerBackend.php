<?php

$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];
$user = $_POST["username"];
$pass = $_POST["password"];
$shipping = $_POST["shippings"];

if($shipping == "$5.00 3 day"){
	$shipPrice = 5;
}
else if($shipping == "$50.00 over night"){
	$shipPrice = 50;
}
else {
	$shipPrice = 0;
}

$APrice = 5 * $item2;
$BPrice = 10 * $item3;
$totalPrice = $shipPrice + $APrice + $BPrice;

echo '<link href="style.css" rel="stylesheet" type="text/css"/>';
echo "<h1>Welcome valued customer! Your password is: " . $pass . "</h1><br>";
echo "<table>";
echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Cost Per Item</th>";
echo "<th>Sub Total</th>";

echo "<tr>";
echo "<th>Nothing</th>";
echo "<td>" . $item1 . "</td>";
echo "<td>Free</td>";
echo "<td>Free</td>";

echo "<tr>";
echo "<th>Pale Orb</th>";
echo "<td>" . $item2 . "</td>";
echo "<td>$5.00</td>";
echo "<td>$" . 5 * $item2 .".00</td>";

echo "<tr>";
echo "<th>Tiny Hedgehog Figurine</th>";
echo "<td>" . $item3 . "</td>";
echo "<td>&10.00</td>";
echo "<td>$" . 10 * $item3 . ".00</td>";

echo "<tr>";
echo "<th>Shipping</td>";
echo "<td colspan='2'>" . $shipping . "</td>";
if($shipping == "$5.00 3 day"){
	echo "<td>$5.00</td>";
}
else if($shipping == "$50.00 over night"){
	echo "<td>$50.00</td>";
}
else {
	echo "<td>Free</td>";
}

echo "<tr>";
echo "<th colspan='3'>Total Cost</th>";
echo "<td>$" . $totalPrice . ".00</td>";


?>
