<div class="container">
	<div class="row">
		<ul style="list-style-type:none">
		<?php
		$years = Year::getYearList();
		foreach ($years as $year) {
			echo '<div class="col-md-1"><a href="' . $year['id'] . '">' . $year['year'] . '</a></div>';
		}
		?>
		</ul>
	</div>
</div>