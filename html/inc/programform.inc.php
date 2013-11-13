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
		if (isset($_GET['action']) && $_GET['action'] == 'edit') {
			
			include 'program_edit.inc.php';
		} else {
		echo 'flurm';
		}
		?>
		</div>
	</form>
</div>
