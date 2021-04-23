<?php
$Q1 = $_POST["q1"];
$Q2 = $_POST["q2"];
$Q3 = $_POST["q3"];
$Q4 = $_POST["q4"];
$Q5 = $_POST["q5"];
$score = 0;

echo "Question 1: What is (25*2)/5?<br>";
echo "You answered: " . $Q1 . "<br>";
echo "Correct answer: 10<br><br>";

echo "Question 2: What is 99-83?<br>";
echo "You answered: " . $Q2 . "<br>";
echo "Correct answer: 16<br><br>";

echo "Question 3:What is 54+89?<br>";
echo "You answered: " . $Q3 . "<br>";
echo "Correct answer: 143<br><br>";

echo "Question 4: What is 36/4?<br>";
echo "You answered: " . $Q4 . "<br>";
echo "Correct answer: 9<br><br>";

echo "Question 5: What is (10/2)*(2+7)?<br>";
echo "You answered: " . $Q5 . "<br>";
echo "Correct answer: 45<br><br>";

if($Q1 == 10)
{
  $score = $score+1;
}
if($Q2 == 16)
{
  $score = $score+1;
}
if($Q3 == 143)
{
  $score = $score+1;
}
if($Q4 == 9)
{
  $score = $score+1;
}
if($Q5 == 45)
{
  $score = $score+1;
}

echo "Total correct: " . $score . "<br>";
echo "Percent correct: " . ($score/5)*100 . "%";
 ?>
