<div class="container down40">
	<form class="form-horizontal" action="#" method="post"></form>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs"> 
		<?php 
		$tabs = Tab::getTabs();
		foreach ($tabs as $tab) {
			echo '<li>';
				echo '<a href="#' . $tab['name'] . '" data-toggle="tab">' . ucfirst($tab['name']) . '</a>';
			echo '</li>';
		}
		?>
		</ul>
		<div class="tab-content">
		<?php
		foreach ($tabs as $tab) {
					echo '<div class="tab-pane" id="' . $tab['name'] . '">';
						echo '<div class="container form-group">';
							echo '<div class="row">';
								echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>';
							echo '</div>';
							$questions = Question::getQuestions($tab['id']);
 							foreach ($questions as $question) {
 								$answer = Answer::getAnswer($program->id, $year->id, $question['id']);
 								echo '<label>' . $question['question'] . '</label>';
								switch ($question['type']) {
								case (1):
									echo '<input type="text" name="' . $question['id'] . '" class="form-control" value="' . $answer->answer . '">';
									break;
								case (2):
									echo '<textarea class="form-control" name="' . $question['id'] . '" value="' . $answer->answer . '"></textarea>';
									break;
								case (3):
									echo '<input type="date" class="form-control" name="' . $question['id'] . '" value="' . $answer->answer . '" />';
								}
 							}							
							echo '<div class="row">';
								echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
		}
		?>
		</div>
	</form>
</div>
