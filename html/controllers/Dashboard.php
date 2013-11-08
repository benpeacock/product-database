<?php
require_once '../../config.php';

if (isset($_POST)) {
	$action = $_POST['action'];

} // end POST actions

include '../inc/header.inc.php';
include '../views/dashboard.php';
if (isset($program->id) && isset($year->year)) {
	include '../inc/programform.inc.php';
}
include '../inc/footer.inc.php';



