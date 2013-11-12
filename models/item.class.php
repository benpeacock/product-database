<?php

class Item extends DatabaseObject {
	
	public $id;
	public $country;
	public $program;
	public $year;
	public $question;
	public $answer;
	
	public static function getItems($id) {
		$sql = "SELECT item.id, item.country, item.program, item.year, item.question, item.answer, question.question, question.type, question.tab FROM item LEFT OUTER JOIN question ON item.question=question.id";
		$dbh = Database::getPdo();
		try {
			$stmt = $dbh->prepare($sql);
			$stmt->execute();
			$result = $stmt->FetchAll();
			return $result;
		} catch (PDOException $e) {
			echo 'Unable to get items ' . $e->getMessage();
		}
	}
	
}


