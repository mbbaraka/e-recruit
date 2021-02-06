@extends('ors.layouts.app')

@section('title')
Apply for Job
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
                 <h2>
                     Applying for {{ $job->title }}
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

                        @if (count($resumes) > 0)
                        <h3>Application Form</h3>
                           <form action="{{ route('apply.store') }}" method="POST">
                               @csrf
                               <input type="hidden" name="job_id" value="{{ $job->id }}">
                               <div class="w3-container pb-3">
                                   <span class="w3-label">Select Resume *</span>
                                   <select class="w3-input w3-round w3-round-large @error('resume') w3-border-red @enderror" name="resume" id="">
                                       @foreach ($resumes as $resume)
                                           <option value="{{ $resume->id }}">{{ $resume->title }}</option>
                                       @endforeach
                                   </select>
                                   @error('resume')
                                       <span class="w3-text-red" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                               <div class="w3-container pb-3">
                                   <span class="w3-label">Describe Yourself *</span>
                                   <textarea name="description" id="" cols="30" rows="10" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror"></textarea>
                                   @error('description')
                                       <span class="w3-text-red" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                               </div>
                               <button type="submit" class="btn btn-primary btn-block">Submit</button>
                           </form>
                        @else
                           <span><strong>You have no resume yet. <a href="{{ route('applicant.resume.index') }}">Click here to create one</a></strong></span>
                        @endif
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
