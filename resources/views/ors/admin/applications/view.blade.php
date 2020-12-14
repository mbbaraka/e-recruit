@extends('ors.layouts.app')


@section('title')
View Resume
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
             <li class="w3-center list-group-item list-group-item-action w3-light-blue">Quick Links</li>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
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
                  <header class="w3-container pt-3" style="">
                    <h5>
                        <b><i class="fa fa-envelope"></i> Resume for {{ $applicant->first_name . ' ' .$applicant->last_name }}</b>
                        <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="#">Back</a>
                    </h5>
                    <hr>
                  </header>
                  <br>
                  <div class="w3-panel">
                    <div class="w3-row-padding">
                        <div class="w3-row-padding">
                            <div class="w3-container w3-card w3-white">
                                <h2 class="w3-text-grey w3-padding-16">
                                    <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
                                </h2>
                                @if ($educations->count() > 0)
                                    @foreach ($educations as $education)
                                    <div class="w3-container">
                                      <h5 class="w3-opacity">
                                          <b>{{ $education->school }}</b>
                                    </h5>
                                      <h6 class="w3-text-teal">
                                          <i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ date('M Y', strtotime($education->from)). ' to ' .date('M Y', strtotime($education->to)) }}
                                          <span class="w3-right"><i class="fas fa-graduation-cap fa-fw w3-margin-right"></i>{{ $education->attained }}</span>
                                      </h6>
                                      <p>{{ Str::limit($education->description, 100 , '....') }}</p>
                                      <hr><br>
                                    </div>
                                    @endforeach
                                @else
                                <div class="w3-container">
                                  <p>Education level not added yet</p>
                                </div>
                                @endif
                              </div>
                              <div class="w3-container w3-card w3-white w3-margin-top">
                                <h2 class="w3-text-grey w3-padding-16">
                                    <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience
                                </h2>

                                @if ($experiences->count() > 0)
                                    @foreach ($experiences as $experience)
                                      <div class="w3-container">
                                        <h5 class="w3-opacity"><b>{{ $experience->title }} / {{ $experience->company }}</b></h5>
                                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ date('M Y', strtotime($experience->from)) . ' - ' . date('M Y', strtotime($experience->to)) }}</h6>
                                        <p>
                                            {!! Str::limit($experience->description, 100, '...') !!}
                                        </p>
                                        <hr><br>
                                      </div>
                                    @endforeach
                                @else
                                <div class="w3-container">
                                  <p>Work experience not added yet</p>
                                </div>
                                @endif
                              </div>

                         </div>
                    </div>
                  </div>

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
   <footer class="w3-container w3-theme-d3 w3-padding-16 w3-center">
     <h5>{{ date('Y') }} &copy; Online Recruitment System </h5>
   </footer>
@endsection
