<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">Programs</a>
  </div>
  
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <?php
    $session->user_id = true; //testing only
    if (isset($session->user_id)) { 
		Menu::makeMenu(); 
	}
	?>
	</ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="mailto:bpeacock@academic-travel.com">Help</a></li>
      <li><a href="logout">Log Out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
