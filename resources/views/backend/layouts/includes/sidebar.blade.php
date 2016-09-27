<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <br><h3>Navigation</h3>
    <ul class="nav side-menu">      
      <li class= {{ Request::is('home') ? 'active' : '' }}>
        <a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a>
      </li>
      @role('participant')
      <li class= {{ Request::is('upload') || Request::is('upload/*') ? 'active' : '' }}>
        <a href="{{ route('upload.edit', encrypt(Auth::user()->id ))}}"><i class="fa fa-upload"></i> Upload Presentation</a>
      </li>
      @endrole
      @role('jury')
      <li class= {{ Request::is('participant') || Request::is('participant/*') ? 'active' : '' }}>
        <a href="{{ url('participant') }}"><i class="fa fa-user-md"></i> Participant</a>
      </li>
      <li class= {{ Request::is('scoresheets') || Request::is('scoresheets/*') ? 'active' : '' }}>
        <a href="{{ url('scoresheets') }}"><i class="fa fa-bar-chart"></i> Scoresheets</a>
      </li>
      @endrole
      @role('admin')
      <li class= {{ Request::is('participant') || Request::is('participant/*') ? 'active' : '' }}>
        <a href="{{ url('participant') }}"><i class="fa fa-user-md"></i> Participant</a>
      </li>
      <li class= {{ Request::is('scoresheets') || Request::is('scoresheets/*') ? 'active' : '' }}>
        <a href="{{ url('scoresheets') }}"><i class="fa fa-bar-chart"></i> Scoresheets</a>
      </li>
      <li class= {{ Request::is('unit-score') || Request::is('unit-score/*') ? 'active' : '' }}>
        <a href="{{ url('unit-score') }}"><i class="fa fa-align-center"></i> Unit Score</a>
      </li>
      <li class= {{ Request::is('unit-category') || Request::is('unit-category/*') ? 'active' : '' }}>
        <a href="{{ url('unit-category') }}"><i class="fa fa-list-ul"></i> Unit Category</a>
      </li>
      <li class= {{ Request::is('category') || Request::is('category/*') ? 'active' : '' }}>
        <a href="{{ url('category') }}"><i class="fa fa-tags"></i> Category</a>
      </li>
      <li class= {{ Request::is('itinerary') || Request::is('itinerary/*') ? 'active' : '' }}>
        <a href="{{ url('itinerary') }}"><i class="fa fa-tags"></i> Itinerary</a>
      </li>
      <li class= {{ Request::is('notification') || Request::is('notification/*') ? 'active' : '' }}>
        <a href="{{ url('notification') }}"><i class="fa fa-tags"></i> Notification</a>
      </li>
      <li class= {{ Request::is('users') || Request::is('users/*') ? 'active' : '' }}>
        <a href="{{ url('users') }}"><i class="fa fa-users"></i> Users</a>
      </li>
      @endrole
    </ul>
  </div>
</div>