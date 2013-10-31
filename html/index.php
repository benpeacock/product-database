<?php
require '../config.php';
// TESTING ONLY
$logged_in = true;

if ($logged_in == true) {
	include ROOT . '/controllers/Dashboard.php';
} else {
	include ROOT . '/controllers/Login.php';
}
