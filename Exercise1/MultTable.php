
<?php
	echo "Please scroll down to view table";
	echo "<table>";
	for($x = 1; $x <= 100; $x++){
		echo "<tr>";
		for($y = 1; $y <= 100; $y++){
			echo "<td>" . $x * $y. "</td><br>";
		}
		echo "</tr><br>";
	}
	echo "</table>";
?>
