<div class="container down40">
	<form action="#" method="post"></form>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs"> 
		<?php 
		$tabs = array('Dates', 'Message', 'Academics', 'Life', 'People', 'Other');  // replace this with results from db.
		foreach ($tabs as $tab) {
			echo '<li>';
				echo '<a href="#' . strtolower($tab) . '" data-toggle="tab">' . $tab . '</a>';
			echo '</li>';
		}
		?>
		</ul>
		<div class="tab-content">
		<?php
		foreach ($tabs as $tab) {
					echo '<div class="tab-pane" id="' . strtolower($tab) . '">'; // This gets the individual tabs.
						echo '<div class="container">'; // This positions content within the tab
							echo '<div class="row">'; // Row for cancel/save buttons at top of questions
								echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>';
							echo '</div>'; // end top row of buttons
							echo 'd';
							
							echo '<div class="row">'; // begin bottom row of buttons
								echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>';
							echo '</div>'; // end bottom row of buttons
						echo '</div>'; // end container
					echo '</div>'; //end tab-pane
		}
		?>
		</div>
	</form>
</div>
