<?php
foreach ($tabs as $tab) {
	echo '<div class="tab-pane" id="' . $tab['name'] . '">';
	echo '<div class="container">';
	echo '<div class="row">';
	echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="submit" class="btn btn-primary" name="submit">Save</button>';
	echo '</div>';
	echo '<div class="form-group">';
	$questions = Question::getQuestions($tab['id']);
	foreach ($questions as $question) {
		$answer = Answer::getAnswer($program->id, $year->id, $question['id']);
		switch ($question['type']) {
			case (1):
				echo '<label class="col-sm-3 control-label">' . $question['question'] . '</label>';
				echo '<div class="col-sm-9 marginbottom20">';
				echo '<input type="text" name="' . $question['id'] . '" class="form-control" value="' . $answer->answer . '">';
				echo '</div>';
				break;
			case (2):
				echo '<label>' . $question['question'] . '</label>';
				echo '<textarea class="form-control marginbottom20" name="' . $question['id'] . '">' . $answer->answer . '</textarea>';
				break;
			case (3):
				?>
				<div class="clearfix marginbottom20">
				<label class="col-sm-6 control-label"><?php echo $question['question']; ?></label>
				<div class="input-group col-sm-6">
			    	<input type="date" class="form-control" name="<?php echo $question['id']; ?>" value="<?php echo $answer->answer; ?>">
			      	<div class="input-group-btn">
				        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
				        <ul class="dropdown-menu pull-right">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li class="divider"></li>
				          <li><a href="#">Separated link</a></li>
				        </ul>
			      </div><!-- /btn-group -->
			    </div><!-- /input-group -->
			    </div>
			    <?php
				break;
		}
	}
	echo '</div>';
	echo '<div class="row">';
	echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="submit" class="btn btn-primary" name="submit">Save</button>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
?>