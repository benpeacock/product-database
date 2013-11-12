<div class="container down40">
	<form action="#" method="post"></form>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs"> 
		<?php 
		$tabs = Tab::getTabs();
		foreach ($tabs as $tab) {
			echo '<li>';
				echo '<a href="#' . $tab . '" data-toggle="tab">' . ucfirst($tab) . '</a>';
			echo '</li>';
		}
		?>
		</ul>
		<div class="tab-content">
		<?php
		foreach ($tabs as $tab) {
					echo '<div class="tab-pane" id="' . $tab . '">';
						echo '<div class="container">';
							echo '<div class="row">';
								echo '<button type="button" class="btn btn-default margin15" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>';
							echo '</div>'; // end top row of buttons
							echo 'd';
							//$items = Item::getItems($tab['id']);
// 							foreach ($items as $item) {
// 								var_dump($item);
// 								// echo question text as label
// 								// switch ($question_type) {
// 								case (1):
// 									echo '<input type="text" value="">';
// 									break;
// 								case (2):
// 									echo '<textarea value=""></textarea>';
// 									break;
// 								case (3):
// 									echo '<input type="date" value="" />';
// 								}
// 							}							
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
