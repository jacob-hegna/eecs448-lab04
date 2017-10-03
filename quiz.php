<?php

/* START QUIZ DEFINITIONS */

// Questions
$questions[1] = "Q1";
$questions[2] = "Q2";
$questions[3] = "Q3";
$questions[4] = "Q4";

// Answers
$answers['a'] = "A";
$answers['b'] = "B";
$answers['c'] = "C";
$answers['d'] = "D";

// Answer key
$answer_key[1] = 'a';
$answer_key[2] = 'b';
$answer_key[3] = 'c';
$answer_key[4] = 'd';

/* END QUIZ DEFINITIONS */

// Array of user-given answers
$answer_user[1] = $_POST["q1"];
$answer_user[2] = $_POST["q2"];
$answer_user[3] = $_POST["q3"];
$answer_user[4] = $_POST["q4"];

$score = 0;
$document = "";

// Iterate through each question, add the feedback to $document, modify $score
for($i = 1; $i <= 4; $i++) {
    $document .= "Question " . $i . ": " . $question_user[$i]         . "<br>";
    $document .= "You answered: "        . $answers[$answer_user[$i]] . "<br>";
    $document .= "Correct answer: "      . $answers[$answer_key[$i]]  . "<br>";

    // If they got this question correct
    if($answer_user[$i] == $answer_key[$i]) {
        $score++;
    }

    $document .= "<br>";
}

// Give the user their percentage score
$document .= "<br> You answered " . $score . " out of 5 correct, which is a " . 100*($score / 5.0) . "%! <br>";

// send the page back!
echo $document;

?>