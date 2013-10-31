<?php

class Year extends DatabaseObject {
	
	public $id;
	public $year;
	
	const DB_TABLE = 'years';
	
	public static function getYearList() {
		$dbh = Database::getPdo();
		try {
			$sql = "SELECT * FROM years";
			$stmt = $dbh->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		} catch (PDOException $e) {
			echo 'Could not get year list' . $e->getMessage();
		}
	}
}