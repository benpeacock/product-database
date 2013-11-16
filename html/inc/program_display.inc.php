<?php
foreach ($tabs as $tab) {
	echo '<div class="tab-pane" id="' . $tab['name'] . '">';
	echo '<div class="container">';
	echo '<div class="down40">';
	$questions = Question::getQuestions($tab['id']);
	foreach ($questions as $question) {
		$answer = Answer::getAnswer($program->id, $year->id, $question['id']);
		switch ($question['type']) {
			case (1):
				echo '<label class="col-sm-3 control-label">' . $question['question'] . '</label>';
				echo '<div class="col-sm-9 marginbottom20">';
				echo $answer->answer;
				echo '</div>';
				break;
			case (2):
				echo '<label>' . $question['question'] . '</label>';
				echo $answer->answer;
				break;
			case (3):
				echo '<label class="col-sm-3 control-label">' . $question['question'] . '</label>';
				echo '<div class="col-sm-9 marginbottom20">';
				echo $answer->answer;
				echo '</div>';
		}
	}
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
?>