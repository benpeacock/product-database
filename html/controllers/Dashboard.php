<?php
require_once '../../config.php';

if(isset($_POST['submit'])) {
	echo '<pre>';
	var_dump($_POST);
	echo '</pre>';
}

include '../inc/header.inc.php';
include '../views/dashboard.php';
if (isset($program->id) && isset($year->year)) {
	include '../inc/programform.inc.php';
}
include '../inc/footer.inc.php';



