@extends('ors.layouts.app')

@section('title')
Jobs
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
             <a href="{{ route('applicant.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('applicant.resume.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Resume</a>
             <a href="{{ route('applicant.jobs.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Available Jobs</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Interviews</a>
             <a href="{{ route('applicant.profile.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-file"></i> &nbsp; My Profile</a>
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
                 <h2>Available Opportunities</h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     <div class="w3-full">
                         <p>Filter By : </p>
                     </div>
                     @foreach ($jobs as $job)
                        {{-- <div class="w3-container w3-card w3-round p-3">
                            <h5>Title : {{ $job->title }}  </h5>
                            <span class="fa fa-calendar-alt badge badge-dark">Date Posted : &nbsp;{{ $job->created_at }}</span>
                            <span class="w3-right fa fa-calendar-alt badge badge-dark">Deadline : &nbsp;{{ $job->deadline }}</span>

                        </div> --}}
                        <div class="w3-container w3-card w3-round w3-margin p-3 w3-hover-shadow">
                            <div class="">
                                <h5><a style="text-decoration: none" href="{{ route('job.single', $job->id) }}" title="">{{ $job->title }}</a>
                                    <span class="w3-right btn btn-sm w3-round w3-light-blue"><small>{{ $job->job_type }}</small></span>
                                </h3>
                                <p class="w3-row">
                                    <div class="w3-quarter"><span class="btn btn-sm btn-warning w3-round">{{ $job->level }}</span></div>
                                    <div class="w3-quarter"><span class="text-muted fa fa-map-marker">&nbsp;{{ $job->location }}</span></div>
                                    <div class="w3-third"><span class="text-muted"><i class="fa fa-calendar-alt">&nbsp;Deadline</i>  : {{ $job->deadline }}</span></div>
                                </p>
                            </div>
                            <div class="w3-row">
                                <div class="w3-third"><span class="pt-2 text-muted"><strong>Posted: </strong> {{ $job->created_at->diffForHumans() }}</span></div>
                                <div class="w3-twothird"><a class="w3-right w3-btn btn-sm w3-round btn-success" href="{{ route('job.single', $job->id) }}">View Details</a></div>

                            </div>
                        </div>
                     @endforeach
                     {{ $jobs->links() }}
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
