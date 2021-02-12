@extends('ors.layouts.app')

@section('title')
Manage Jobs
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
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
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
                  <header class="w3-container pt-3 pb-3" style="">
                    <h5>
                        <b><i class="fa fa-dashboard"></i> Manage Jobs</b>
                        <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="{{ route('admin.jobs.new')}}">Add New</a>
                    </h5>
                    <hr>
                  </header>

                  <div class="w3-row-padding w3-margin-bottom">
                    <div class="w3-full">
                        <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-envelope"></i> Applications : </span>
                        <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-eye"></i> Views</span>
                        <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-calendar"></i> Post Date : </span>
                        <span class="p-2 mr-3 w3-card w3-round w3-roundlarge"><i class="fa fa-calendar-alt"></i> Deadline: </span>
                    </div>
                  </div>
                  <br>
                  <div class="w3-panel">
                    <div class="w3-row-padding" style="margin:0 -16px">
                      <div class="w3-full">
                        <h5>Available Jobs</h5>
                        <table class="w3-table w3-striped w3-white w3-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Applications</th>
                                    <th>Deadline</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($jobs as $key => $job)
                                    <tr>
                                        <td>{{ $key + 1 }} &nbsp; &nbsp;</td>
                                        <td>
                                            {{ $job->title }}
                                        </td>
                                        <td>
                                            {{ $job->applications->count() }} Applications
                                        </td>
                                        <td>
                                            <span class="text-info">{{ date('d M, Y', strtotime($job->deadline)) }}</span>
                                        </td>
                                        <td>
                                            @foreach ($job->category as $categories)
                                                <span class="text-info">{{ $categories->title }}, &nbsp;</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <span class="status active">
                                                @if ($job->status == '0')
                                                Not Active
                                                @else
                                                Active
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-light" target="_blank" href="{{ route('job.single', $job->id) }}" title=""><i class="fa fa-eye text-dark"></i></a>
                                                <a class="btn btn-sm btn-light" href="{{ route('admin.jobs.edit', $job->id) }}" title=""><i class="fa fa-edit text-primary"></i></a>
                                                <a class="btn btn-sm btn-light" onclick="confirm('Are you sure of this?')" href="{{ route('admin.jobs.delete', $job->id) }}" title=""><i onclick="confirm('Are you sure?')" class="fa fa-trash text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
   <footer class="w3-container w3-theme-d3 w3-padding-16 w3-center">
     <h5>{{ date('Y') }} &copy; Online Recruitment System </h5>
   </footer>
@endsection
