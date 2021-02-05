@extends('ors.layouts.app')

@section('title')
Administrator
@endsection

@section('content')
   <!-- Navbar -->
   <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
     <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
     <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">
        {{-- <img src="{{ asset('logo.png') }}" class="img-fluid" alt=""> --}}
     </a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
     <div class="w3-dropdown-hover w3-hide-small">
       <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
       <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
         <a href="#" class="w3-bar-item w3-button">One new friend request</a>
         <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
         <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
       </div>
     </div>


     <a href="{ route('logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white" title="Logout"><i class="fa fa-power-off"></i>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
     </a>
     <div class="w3-dropdown w3-hover w3-right w3-hide-small">
       <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>
       <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
         <a href="#" class="w3-bar-item w3-button">One new friend request</a>
         <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
         <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
       </div>
     </div>
    </div>
   </div>

   <!-- Navbar on small screens -->
   <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
     <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
     <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
     <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
     <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
   </div>

   <!-- Page Container -->
   <div class="container w3-content" style="margin-top:80px">
     <!-- The Grid -->
     <div class="w3-row">
       <!-- Left Column -->
       <div class="w3-col m3">
         <!-- Profile -->
         <div class="w3-card w3-round w3-white">
           <div class="w3-container">
            {{-- <h4 class="w3-center">My Profile</h4> --}}
            <p class="w3-center"><img src="{{ asset('default.png') }}" class="w3-circle" style="width:150px;" alt="Avatar"></p>
            <hr>
            <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> {{ $user->first_name. ' ' .$user->last_name }}</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> {{ $particulars->address }}</p>
            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> {{ date('d M, Y', strtotime($particulars->date_of_birth)) }}</p>
           </div>
         </div>
         <br>

         <div class="w3-card-4">
            <div class="list-group w3-round-large">
             <li class="w3-center list-group-item list-group-item-action w3-theme-d2">Quick Links</li>
             <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fas fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
             <a href="{{ route('admin.shortlist.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-list"></i> &nbsp; Shortlists</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class=" fas fa-question"></i> &nbsp; Interviews</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-cogs"></i> &nbsp; Settings</a>
             </div>
         </div>
         <br>

       <!-- End Left Column -->
       </div>

       <!-- Middle Column -->
       <div class="w3-col m9">

         <div class="w3-row-padding">
           <div class="w3-col m12">
             <div class="w3-card w3-round w3-white">
               <div class="w3-container w3-padding">

                  <!-- Header -->
                  <header class="w3-container pt-3 pb-3" style="">
                    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
                  </header>

                  <div class="w3-row-padding w3-margin-bottom">
                    <a href="{{ route('admin.jobs.index') }}" class="w3-quarter" style="text-decoration: none">
                      <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                        <div class="w3-left"><i class="fa fa-briefcase w3-xxxlarge"></i></div>
                        <div class="w3-right">
                          <h3>{{ count($all_jobs) }}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Jobs</h4>
                      </div>
                    </a>
                    <a href="{{ route('admin.applications.index') }}" class="w3-quarter" style="text-decoration: none">
                      <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                        <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
                        <div class="w3-right">
                          <h3>{{ count($all_applications) }}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Applications</h4>
                      </div>
                    </a>
                    <a href="{{ route('admin.applications.index') }}" class="w3-quarter" style="text-decoration: none">
                      <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                        <div class="w3-left"><i class="fa fa-question w3-xxxlarge"></i></div>
                        <div class="w3-right">
                          <h3>23</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Interviews</h4>
                      </div>
                    </a>
                    <a href="{{ route('admin.notifications') }}" class="w3-quarter" style="text-decoration: none">
                      <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                        <div class="w3-left"><i class="fa fa-bell w3-xxxlarge"></i></div>
                        <div class="w3-right">
                          <h3>{{ count($notification) }}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Notifications</h4>
                      </div>
                    </a>
                  </div>
                  <br>
                  <div class="w3-panel">
                    <div class="w3-row-padding" style="margin:0 -16px">
                      <div class="w3-full">
                        <h5>Recent Applications</h5>
                        <table class="w3-table w3-striped w3-white w3-hoverable">
                          @if(count($applications) > 0)
                          @foreach ($applications as $key => $apps)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $apps->jobs->title }}</td>
                              <td>{{ $apps->users->first_name .' '. $apps->users->last_name }}</td>
                              <td><i>{{ $apps->created_at->diffForHumans() }}</i></td>
                            </tr>
                          @endforeach
                          @else
                          <tr><td>No applications yet! </td></tr>
                          @endif
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="w3-container">
                    <h5>Recent Job Opportunities</h5>
                    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                        @if(count($jobs) > 0)
                          @foreach ($jobs as $key => $job)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $job->title }}</td>
                            <td><i class="fa fa-calendar"> &nbsp;</i>{{ date('d M', strtotime($job->deadline)) }}</td>
                          </tr>
                          @endforeach
                        @else
                          <span>No job opportunities added yet! </span>
                        @endif
                    </table>
                  </div>
                  <hr>

               </div>
             </div>
           </div>
         </div>

       <!-- End Middle Column -->
       </div>

     <!-- End Grid -->
     </div>

   <!-- End Page Container -->
   </div>
   <br>

   <!-- Footer -->
   <footer class="w3-bar-block w3-theme-d2 w3-padding-16 w3-center">
     <h5>{{ date('Y') }} &copy; Online Recruitment System </h5>
   </footer>
@endsection
