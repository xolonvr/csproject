<!-- CHECKING QUIZ ANSWERS  -->

<?php 
session_start();

$ans = array(
    "question1" => "a",
    "question2" => "a",
    "question3" => "a",
    "question4" => "a",
    "question5" => "a",
    "question6" => "a",
    "question7" => "a",
    "question8" => "a",
    "question9" => "a",
    "question10" => "a"

);

$personans = $_POST;
$score = 0;

foreach ($ans as $q => $a) {
    if (isset($personans[$q]) && $personans[$q] === $a) {
        $score++;
    }
}
$_SESSION['results'] = $score;
header("Location: ../quiz.php");
?>