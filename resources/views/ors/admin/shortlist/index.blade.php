@extends('ors.layouts.app')

@section('title')
Shortlists
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
             <li class="w3-center list-group-item list-group-item-action w3-theme-d2">Quick Links</li>
             <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
             <a href="{{ route('admin.shortlist.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fas fa-list"></i> &nbsp; Shortlists</a>
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
                  <header class="w3-container pt-3 pb-3" style="">
                    <h5><b><i class="fa fa-dashboard"></i> Shortlists</b></h5>
                  </header>

                  <div class="w3-panel">
                    <div class="w3-row-padding" style="margin:0 -16px">
                      <div class="w3-full">
                        <h5>Jobs Lists</h5>
                        <table class="w3-table w3-striped w3-white w3-hoverable">
                          @if(count($jobs) > 0)
                          	<thead>
                               <tr>
                                <th>S/n</th>
                                <th>Job Title</th>
                                <th>No. of Applicants</th>
                                <th>Action</th>
                              </tr> 
                            </thead>
                          @foreach ($jobs as $key => $job)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $job->title }}</td>
                              <td>{{ count($job->shortlist) }}</td>
                              <td>
                              	<button class="btn btn-sm btn-light"><span class="fa fa-eye text-primary" title="View list"></span></button>
                              </td>
                            </tr>
                          @endforeach
                          {{ $jobs->links() }}
                          @else
                          <tr><td>No applications yet! </td></tr>
                          @endif
                        </table>
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
   <footer class="w3-container w3-theme-d3 w3-padding-16 text-center">
     <h5>Online Recruitment System (ORS) &copy; {{ date('Y') }}</h5>
   </footer>
@endsection
