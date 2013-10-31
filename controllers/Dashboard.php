<?php
if (isset($_GET['action'])) {
	$action = $_GET['action'];

} //end GET actions

if (isset($_POST)) {
	$action = $_POST['action'];

} // end POST actions

include_once '../html/inc/header.inc.php';
echo 'display';


