<!-- NAVBAR -->
<nav class="navbar navbar-default " role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Toggle Navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<a href="{{ url('/') }}" class="navbar-brand navbar-logo navbar-logo-bigger">
				<h1>Scoresheets System</h1>
			</a>
		</div>
		<!-- MAIN NAVIGATION -->
		<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('registration/create') }}">Pendaftaran</a></li>
				<li><a href="{{ url('login') }}">Login</a></li>
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->