<?php

require_once '../../config.php';

$question = 1;
$program = 1;
$year = 1;

$result = Answer::getAnswer($program, $year, $question);

echo $result->answer;
