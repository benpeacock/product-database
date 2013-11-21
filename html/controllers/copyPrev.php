<?php
$id = $_GET['id'];
$program = $_GET['program'];
$year = ($_GET['year'] - 1);

$dbh = Database::getPdo();

$sql="SELECT * FROM answer WHERE program = $program AND year = $year AND question = '".$id."'";

$result = $dbh->query($sql);

echo "got something";
