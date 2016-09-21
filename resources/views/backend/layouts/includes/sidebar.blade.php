<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Navigation</h3>
    <ul class="nav side-menu">
      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a></li>
      @role('member')
        <li><a href="{{ route('profile.show', encrypt(Auth::user()->id ))}}"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="{{ route('upload.edit', encrypt(Auth::user()->id ))}}"><i class="fa fa-upload"></i> Upload Presentation</a></li>
      @endrole
      @role('jury')
        <li><a href="{{ url('participant') }}"><i class="fa fa-user-md"></i> Participant</a></li>
        <li><a href="{{ url('scoresheets') }}"><i class="fa fa-bar-chart"></i> Scoresheets</a></li>
        <li><a href="{{ url('session') }}"><i class="fa fa-bookmark-o"></i> Session</a></li>
      @endrole
      @role('admin')
        <li><a href="{{ url('scoresheets') }}"><i class="fa fa-bar-chart"></i> Scoresheets</a></li>
        <li><a href="{{ url('session') }}"><i class="fa fa-bookmark-o"></i> Session</a></li>
        <li><a href="{{ url('category') }}"><i class="fa fa-tags"></i> Category</a></li>
        <li><a href="{{ url('master-data') }}"><i class="fa fa-star"></i> Master Data</a></li>
        <li><a href="{{ url('users') }}"><i class="fa fa-users"></i> Users</a></li>
      @endrole
    </li>     
  </ul>
</div>
</div>
