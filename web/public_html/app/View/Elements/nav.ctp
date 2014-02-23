<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		 	<span class="sr-only">Toggle navigation</span>
		 	<span class="icon-bar"></span>
		 	<span class="icon-bar"></span>
		 	<span class="icon-bar"></span>
		 </button>

		 <a class="navbar-brand" href="#">
		 	<img border="0" src="/img/logo.png" alt="Logo">  Geek Portal
		 </a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right more">
			<!--<li>
				<a href="#">Link</a>
			</li> -->
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">More<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Login'), array('controller' => 'main','action' => 'login'));?></li>
					<li><?php echo $this->Html->link(__('SignUp'), array('controller' => 'main','action' => 'signup'));?></li>
					<li class="divider"></li>
					<li><a href="#">For Chinese</a></li>
					<li><a href="#">For American</a></li>
					<li class="divider"></li>
					<li><?php echo $this->Html->link(__('About'), array('controller' => 'main','action' => 'about'));?></li>
					<li><a href="#">Feedback</a></li>
				</ul>
			</li>
		</ul>

		<form class="navbar-form navbar-right search" role="search">
			<div class="form-group">
				<input type="text" class="form-control">
			</div>
			<button type="submit" class="btn btn-default">Search</button>
		</form>

	</div>
</nav>