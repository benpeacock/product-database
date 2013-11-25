<?php

require_once '../../config.php';

$question = $_GET['question'];
//$question = 1;
$program = $_GET['id'];
$year = $_GET['year'] - 1;


$result = Answer::getAnswer($program, $year, $question);

echo $result->answer;
