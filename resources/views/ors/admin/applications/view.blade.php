@extends('ors.layouts.app')


@section('title')
View Resume
@endsection


@section('content')
   <!-- Navbar (sit on top) -->
    @include('partials.admin-header')

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
             <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
             <a href="{{ route('admin.shortlist.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-list"></i> &nbsp; Shortlists</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class=" fas fa-question"></i> &nbsp; Interviews</a>
             <a href="{{ route('admin.profile.index' )}}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
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
                              <div class="w3-container w3-card w3-white w3-margin-top">
                              <h2 class="w3-text-grey w3-padding-16">
                                  <i class="fas fa-people-carry fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
                                  Relevant Skills
                              </h2>
                              @if ($skills->count() > 0)
                                  @foreach ($skills as $skill)
                                    <div class="w3-container">
                                      <h5 class="w3-opacity"><b>{{ $skill->skill }}</b></h5>
                                      <h6 class="w3-text-teal"><i class="far fa-chart-bar fa-fw w3-margin-right"></i>
                                        Level : {{ ($skill->level/5) * 100 }}%
                                      </h6>
                                      <p>
                                          {!! Str::limit($skill->description, 100, '...') !!}
                                      </p>
                                      <hr><br>
                                    </div>
                                  @endforeach
                              @else
                              <div class="w3-container">
                                <p>Skills not added yet</p>
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
