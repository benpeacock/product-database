<?php
require_once '../config.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];

} //end GET actions

if (isset($_POST)) {
	$action = $_POST['action'];

} // end POST actions

include_once '../html/inc/header.inc.php';
include_once '../html/inc/yearlist.inc.php';
echo '<div class="container"><h2>Editing: ' . $program['name'] . ', ' . $year['year'] . '</h2></div>';



