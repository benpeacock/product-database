<?php



class Answer {
	
	public $id;
	public $country;
	public $program;
	public $year;
	public $question;
	public $answer;
	
	public static function getAnswer($program, $year, $question) {
		$dbh = Database::getPdo();
		try {
			$sql = "SELECT id, answer FROM answer WHERE program = :program AND year = :year AND question = :question LIMIT 1";
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(':program', $program, PDO::PARAM_INT);
			$stmt->bindParam(':year', $year, PDO::PARAM_INT);
			$stmt->bindParam(':question', $question, PDO::PARAM_INT);
			$stmt->execute();
			$answer = new Answer();
			$stmt->setFetchMode(PDO::FETCH_INTO, $answer);
			$result = $stmt->Fetch();
			return $result;
		} catch (PDOException $e) {
			echo 'Unable to get items ' . $e->getMessage();
		}
	}
}


