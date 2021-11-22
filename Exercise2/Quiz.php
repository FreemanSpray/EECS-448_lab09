<?php
$a1 = $_POST["q1"];
$a2 = $_POST["q2"];
$a3 = $_POST["q3"];
$a4 = $_POST["q4"];
$a5 = $_POST["q5"];

$score = 0;
if($a1 == "Rhydon"){
	$score = $score + 1;
}
if($a2 == "Saturday"){
	$score = $score + 1;
}

if($a3 == "Morton's Fork"){
	$score = $score + 1;
}

if($a4 == "Dune"){
	$score = $score + 1;
}

if($a5 == "Jeepers"){
	$score = $score + 1;
}

$percent = $score * 20;



echo "Question 1:<br> You answered: " . $a1 . "<br> Correct answer: Rhydon<br><br> 
	Question 2:<br> You answered: " . $a2 . "<br> Correct answer: Saturday<br><br> 
	Question 3: <br> You answered: " . $a3 . "<br> Correct answer: Morton's Fork<br><br> 
	Question 4: <br> You answered: " . $a4 . "<br> Correct answer: Dune<br><br> 
	Question 5:<br> You answered: " . $a5 . "<br> Correct answer: Jeepers<br><br>
	Your Score: " . $score . "<br><br>Percent correct: " . $percent . "%<br>";
?>

