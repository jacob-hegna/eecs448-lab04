<?php

$_POST["q1"] = "a";
$_POST["q2"] = "c";
$_POST["q3"] = "c";
$_POST["q4"] = "r";

$questions[1] = "Q1";
$questions[2] = "Q2";
$questions[3] = "Q3";
$questions[4] = "Q4";

$answer_key[1] = 'a';
$answer_key[2] = 'b';
$answer_key[3] = 'c';
$answer_key[4] = 'd';

$answers[1] = $_POST["q1"];
$answers[2] = $_POST["q2"];
$answers[3] = $_POST["q3"];
$answers[4] = $_POST["q4"];

$score = 0;
$document = "";

for($i = 1; $i <= 4; $i++) {
    $document .= "Question " . $i . ": " . $questions[$i] . "<br>";
    $document .= "You answered: " . $answers[$i] . "<br>";
    $document .= "Correct answer: " . $answer_key[$i] . "<br>";

    // If they got this question correct
    if($answers[$i] == $answer_key[$i]) {
        $score++;
    }

    $document .= "<br>";
}

$document .= "<br> You answered " . $score . " out of 5 correct, which is a " . 100*($score / 5.0) . "%! <br>";

// send the page back!
echo $document;

?>