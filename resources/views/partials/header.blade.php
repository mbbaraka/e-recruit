
   <div class="w3-top ">
      <div class="w3-bar p-2 w3-white w3-card" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button w3-wide"><img class="m-0 p-0" src="{{ asset('ors/logotr.png') }}"></a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
          <a href="{{ url('/') }}" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
          <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-bell"></i> Notifications<sup class="badge badge-danger text-light">{{ ORS::notification() }}</sup></a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar mt-07 w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none;" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
      <a href="{{ route('applicant.index') }}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home"></i> &nbsp; Home</a>
      <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-bell"></i> &nbsp; Notifications <sup class="badge badge-danger text-light">{{ ORS::notification() }}</sup></a>
      <a href="{{ route('applicant.resume.index') }}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-paper-plane"></i> &nbsp; My Resume</a>
      <a href="{{ route('applicant.jobs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-briefcase"></i> &nbsp; Available Jobs</a>
      <a href="{{ route('applicant.letters') }}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
      <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-question"></i> &nbsp; My Interviews</a>
      <a href="{{ route('applicant.profile.index') }}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> &nbsp; My Profile</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i> &nbsp; Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    </nav>