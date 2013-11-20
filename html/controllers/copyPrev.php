<?php
$q = intval($_GET['q']);

$dbh = Database::getPdo();

$sql="SELECT * FROM answer WHERE id = '".$q."'";

$result = $dbh->query($sql);

echo "got something";
