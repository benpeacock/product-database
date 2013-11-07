<?php
require_once '../config.php';

if (isset($_POST)) {
	$action = $_POST['action'];

} // end POST actions

include '../html/inc/header.inc.php';
include '../html/views/dashboard.php';
if (isset($program->id) && isset($year->year)) {
	include '../html/inc/programform.inc.php';
}
include '../html/inc/footer.inc.php';



