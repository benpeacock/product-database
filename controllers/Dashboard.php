<?php
require_once '../config.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];

} //end GET actions

if (isset($_POST)) {
	$action = $_POST['action'];

} // end POST actions

include '../html/inc/header.inc.php';
include '../html/inc/yearlist.inc.php';
echo '<div class="container"><h3>Editing: ' . $program['name'] . ', ' . $year['year'] . '</h3></div>';

include '../html/inc/programform.inc.php';
include '../html/inc/footer.inc.php';



