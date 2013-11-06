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
echo '<div class="container">';
if (isset($_GET['id'])) {
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	if (filter_var($id, FILTER_VALIDATE_INT) == false) { exit('Invalid program id.'); }
	$program_name = Program::getProgramObject($id);
	echo '<h3>Editing: ' . $program_name->name;
}
if (isset($_GET['year'])) {
	echo ', ' . $year['year'] . '</h3></div>';
} else {
	echo '</h3></div>';
}
include '../html/inc/programform.inc.php';
include '../html/inc/footer.inc.php';



