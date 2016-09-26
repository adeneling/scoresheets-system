<a href="#cd-nav" class="cd-nav-trigger">Menu
	<span class="cd-nav-icon"></span>
	<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
		<circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
	</svg>
</a>
	
<div id="cd-nav" class="cd-nav">
	<div class="cd-navigation-wrapper">
		<div class="cd-half-block">
			<h2>Navigation</h2>

			<nav>
				<ul class="cd-primary-nav">
					<li><a href="{{ url('/home') }}" class="{{ Request::is('/home') ? 'selected' : '' }}">Home</a></li>
					<li><a href="{{ url('bestcs/profile') }}" class="{{ Request::is('bestcs/profile') ? 'selected' : '' }}">Profile</a></li>
					<li><a href="{{ url('bestcs/upload-file') }}" class="{{ Request::is('bestcs/upload-file') ? 'selected' : '' }}">Upload File</a></li>
					<li><a href="{{ url('bestcs/itinerary') }}" class="{{ Request::is('bestcs/itinerary') ? 'selected' : '' }}">Itinerary</a></li>
					<li><a href="{{ url('bestcs/schedules') }}" class="{{ Request::is('bestcs/schedules') ? 'selected' : '' }}">Schedules</a></li>
					<li><a href="{{ url('bestcs/dodonts') }}" class="{{ Request::is('bestcs/dodonts') ? 'selected' : '' }}">Do's &amp; Dont's</a></li>
					<li><a href="{{ url('bestcs/feedback') }}" class="{{ Request::is('bestcs/feedback') ? 'selected' : '' }}">Feedback</a></li>
					<li>
						<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			            	{{ csrf_field() }}
			            </form>
					</li>
				</ul>
			</nav>
		</div><!-- .cd-half-block -->

		<div class="cd-half-block">
			<address>
				
			</address>
		</div> <!-- .cd-half-block -->
	</div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->