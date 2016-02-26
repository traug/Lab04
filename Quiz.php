<?php
//access the global array called $_POST to get the values from the text fields
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo 'Question 1: What was the Win Loss record of the Kansas City Chiefs last season?<br>';
echo 'You answered: ' .$q1. '<br>';
echo 'Correct answer: 11 and 5<br>';

echo 'Question 2: Who is the current starting Quarterback for the Kansas City Chiefs?<br>';
echo 'You answered: ' .$q2. '<br>';
echo 'Correct answer: Alex Smith<br>';

echo 'Question 3: Who is the current starting Runningback for the Kansas City Chiefs?<br>';
echo 'You answered: ' .$q3. '<br>';
echo 'Correct answer: Jamaal Charles<br>';

echo 'Question 4: Who is the current head coach of the Kansas City Chiefs?<br>';
echo 'You answered: ' .$q4. '<br>';
echo 'Correct answer: Andy Reid<br>';

echo 'Question 5: Who is the current punter for the Kansas City Chiefs?<br>';
echo 'You answered: ' .$q5. '<br>';
echo 'Correct answer: Dustin Colquitt<br>';

?>
