@extends('ors.layouts.app')

@section('title')
Home
@endsection

@section('content')
   <!-- Navbar (sit on top) -->
    @include('partials.header')
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

         <div class="w3-card-4 w3-hide-small">
            <div class="list-group w3-round-large">
             <li class="w3-center list-group-item list-group-item-action w3-light-blue">Quick Links</li>
             <a href="{{ route('applicant.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('applicant.resume.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Resume</a>
             <a href="{{ route('applicant.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Available Jobs</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-question"></i> &nbsp; My Interviews</a>
             <a href="{{ route('applicant.profile.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
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
                 <h2>Dashboard</h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     <div class="w3-row-padding w3-margin-bottom w3-hide-small">
                      <a href="{{ route('admin.jobs.index') }}" class="w3-quarter" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-briefcase w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>{{-- {{ count($all_jobs) }} --}}</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>New Jobs</h4>
                        </div>
                      </a>
                      <a href="{{ route('admin.applications.index') }}" class="w3-quarter" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>{{-- {{ count($all_applications) }} --}}</h3>
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
                            <h3>{{ ORS::notification() }}</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>Notifications</h4>
                        </div>
                      </a>
                    </div>
                    <div class="w3-hide-medium w3-hide-large row">
                      <a href="{{ route('admin.jobs.index') }}" class="col-md-3 col-6 pb-2" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-briefcase w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>{{-- {{ count($all_jobs) }} --}}</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>New Jobs</h4>
                        </div>
                      </a>
                      <a href="{{ route('admin.applications.index') }}" class="col-md-3 col-6" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>{{-- {{ count($all_applications) }} --}}</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>Applications</h4>
                        </div>
                      </a>
                      <a href="{{ route('admin.applications.index') }}" class="col-md-3 col-6" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-question w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>23</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>Interviews</h4>
                        </div>
                      </a>
                      <a href="{{ route('admin.notifications') }}" class="col-md-3 col-6" style="text-decoration: none">
                        <div class="w3-container w3-card-4 w3-hover-shadow w3-white w3-theme-d2 w3-padding-16 w3-round w3-round-large">
                          <div class="w3-left"><i class="fa fa-bell w3-xxxlarge"></i></div>
                          <div class="w3-right">
                            <h3>{{-- {{ count($notification) }} --}}</h3>
                          </div>
                          <div class="w3-clear"></div>
                          <h4>Notifications</h4>
                        </div>
                      </a>
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
   <footer class="w3-container w3-theme-d3 w3-padding-16">
     <h5>Footer</h5>
   </footer>
@endsection
