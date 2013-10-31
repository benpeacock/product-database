<?php
if (isset($_POST)) {
	$action = $_POST['action'];
	
}

if (isset($_GET['action'])) {
	$action = $_GET['action'];
	
	
}
// no CSS because not including header yet

include BASE . '/views/login.php';