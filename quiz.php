<?php

/* START QUIZ DEFINITIONS */

// Questions
$questions[1] = "What is the capital of Kansas?";
$questions[2] = "What city is KU located in?";
$questions[3] = "What is 1+1?";
$questions[4] = "What is 30+20?";

// Answers
$answers[1]['a'] = "Lawrence";
$answers[1]['b'] = "Olathe";
$answers[1]['c'] = "Topeka";
$answers[1]['d'] = "Manhattan";

$answers[2]['a'] = "New York City";
$answers[2]['b'] = "LA";
$answers[2]['c'] = "Lawrence";
$answers[2]['d'] = "Chicago";

$answers[3]['a'] = "1";
$answers[3]['b'] = "2";
$answers[3]['c'] = "3";
$answers[3]['d'] = "4";

$answers[3]['a'] = "50";
$answers[3]['b'] = "60";
$answers[3]['c'] = "55";
$answers[3]['d'] = "45";

// Answer key
$answer_key[1] = 'a';
$answer_key[2] = 'c';
$answer_key[3] = 'b';
$answer_key[4] = 'a';

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
    $document .= "Question " . $i . ": " . $question_user[$i]             . "<br>";
    $document .= "You answered: "        . $answers[$i][$answer_user[$i]] . "<br>";
    $document .= "Correct answer: "      . $answers[$i][$answer_key[$i]]  . "<br>";

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