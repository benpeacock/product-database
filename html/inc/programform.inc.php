<div class="container down40">
	<form action="#" method="post"></form>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		<?php 
		$tabs = array('Dates', 'Message', 'Academics', 'Life', 'People', 'Other');
		foreach ($tabs as $tab) {
			echo '<li><a href="#' . strtolower($tab) . '" data-toggle="tab">' . $tab . '</a></li>';
		}
		?>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane" id="dates">
		  	<div class="container">
		  		<div class="row">
		  			<button type="button" class="btn btn-default" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>
		  		</div>
		  		<label for="question1">Question 1</label>
		  		<input type="text" name="question1" />
		  		<div class="row">
		  			<button type="button" class="btn btn-default" value="cancel">Cancel</button><button type="button" class="btn btn-primary" value="save">Save</button>
		  		</div>
		  	</div>
		  </div>
		  <div class="tab-pane" id="message">
		  	<p>foo</p>
		  </div>
		  <div class="tab-pane" id="academics">
		  	<p>bar</p>
		  </div>
		  <div class="tab-pane" id="life">
		  	<p>lorem</p>
		  </div>
		   <div class="tab-pane" id="people">
		  	<p>lorem</p>
		  </div>
		   <div class="tab-pane" id="other">
		  	<p>lorem</p>
		  </div>
		</div>
	</form>
</div>
