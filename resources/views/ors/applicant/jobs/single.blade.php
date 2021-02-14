@extends('ors.layouts.app')

@section('title')
{{ $job->title }}
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
             <a href="{{ route('applicant.letters') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
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
                 <h2>
                     {{ $job->title }}
                     @can('isAdmin', Auth::user()->is_admin)
                     
                     @else
                     <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="{{ route('apply.index', $job->id) }}">Apply Now</a>
                     @endcan
                 </h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     <div class="w3-full">
                         <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-envelope"></i> Applications : {{ $applications }}</span>
                         <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-eye"></i> Views {{ $views }}</span>
                         <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-calendar"></i> Post Date : {{ date('M d, Y', strtotime($job->created_at)) }}</span>
                         <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-calendar-alt"></i> Deadline: {{ date('M d, Y', strtotime($job->deadline)) }}</span>
                     </div>
                     <hr>
                     <div class="w3-full">
                         <h6><strong>Title : </strong>{{ $job->title }}</h6>
                         <h6><strong>Location : </strong>{{ $job->location }}</h6>
                         <h6><strong>Experience : </strong>{{ $job->experience }}</h6>
                         <h6><strong>Qualification : </strong>{{ $job->qualification }}</h6>
                         <h6><strong>Entry Level : </strong>{{ $job->level }}</h6>
                         <h6><strong>Salary Scale : </strong>{{ $job->salary_range }}</h6>
                         <hr>
                         <h6><strong>Description</strong></h6>
                        <p>
                            {!! $job->description !!}
                        </p>
                        <p>
                            @if (file_exists('storage/documents/'. $job->document))
                               <a href="{{ URL('storage/documents/'. $job->document) }}" target="_blank">Click to download descriptions</a>
                            @endif
                        </p>
                     </div>
                     <hr>
                     <div class="w3-container w3-panel">
                       @can('isAdmin', Auth::user()->is_admin)
                     
                       @else
                       <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="{{ route('apply.index', $job->id) }}">Apply Now</a>
                       @endcan
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
   <footer class="w3-container w3-theme-d3 w3-padding-16 text-center">
     <h5>Online Recruitment System (ORS) &copy; {{ date('Y') }}</h5>
   </footer>
@endsection
