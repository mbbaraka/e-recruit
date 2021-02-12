@extends('ors.layouts.app')

@section('title')
Manage Applicants
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
                        <b><i class="fa fa-envelope"></i> Applicants for  {{ $job->title }}</b>
                        <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="#">Back</a>
                    </h5>
                    <hr>
                  </header>
                  <br>
                  <div class="w3-panel">
                    <div class="w3-row-padding">
                      <div class="w3-full">
                        <table class="w3-table w3-striped w3-white w3-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Applicant Names</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            @foreach ($applications as $key => $item)
                              <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $item->users->first_name.' '.$item->users->last_name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="w3-btn btn btn-sm btn-light" href="{{ route('admin.applications.resume', [$item->id, $item->users->id]) }}" target="_blank" title="View Resume"><i class="fa fa-eye"></i></a>
                                       {{--  @if($check == 1)
                                          <form method="post" action="{{ route('admin.shortlist.add') }}">
                                            @csrf
                                            <input type="hidden" name="user" value="{{ $item->users->id}}">
                                            <input type="hidden" name="job" value="{{ $item->jobs->id}}">
                                            <button class="w3-btn btn btn-sm btn-success" title="Already Shortlisted" ><i class="fa fa-check"></i></button><button class="w3-btn btn btn-sm btn-danger" title="Remove from Shortlist" type="submit"><i class="fa fa-times"></i></button>
                                          </form>
                                        @else --}}
                                          <form method="post" action="{{ route('admin.shortlist.add') }}">
                                            @csrf
                                            <input type="hidden" name="user" value="{{ $item->users->id}}">
                                            <input type="hidden" name="job" value="{{ $item->jobs->id}}">
                                            <button class="w3-btn btn btn-sm btn-light" title="Shortlist Applicant" type="submit"><i class="fa fa-check"></i></button>
                                          </form>
                                        {{-- @endif --}}
                                    </div>
                                </td>
                              </tr>
                            @endforeach
                        </table>
                        {{ $applications->links() }}
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
