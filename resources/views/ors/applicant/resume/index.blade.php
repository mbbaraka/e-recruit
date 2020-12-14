@extends('ors.layouts.app')

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
             <a href="{{ route('applicant.profile.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-file"></i> &nbsp; My Profile</a>
             <a href="{{ route('applicant.resume.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; My Resume</a>
             <a href="{{ route('applicant.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-dollar"></i> &nbsp; Available Jobs</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; Short Listed Jobs</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Interviews</a>
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
                     My Resumes
                     <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="#addResume" data-toggle="modal"><i class="fa fa-plus"></i></a>
                 </h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     @if($resumes->count() > 0)
                     @foreach ($resumes as $resume)
                        <div class="w3-card p-3 m-3 w3-round">
                            <div class="row">
                                <span class="col-md-1 col-1">#</span>
                                <span class="col-md-8 col-8"><a title="View Resume" href="{{ route('applicant.resume.view', $resume->id) }}" class="text-primary" style="text-decoration: none;">{{ $resume->title }}</a></span>
                                <span class="col-md-3 col-3">
                                    <button class="btn-sm w3-btn w3-text-light-blue"><a title="View" href="{{ route('applicant.resume.view', $resume->id) }}"><i class="fa fa-eye"></i></a></button>
                                    <button class="btn-sm w3-btn w3-text-red" onclick="confirm('Are you sure?')"><a title="Delete" href="{{ route('applicant.resume.delete', $resume->id) }}"><i class="fa fa-trash"></i></a></button>
                                </span>
                            </div>
                        </div>
                     @endforeach
                     @else
                        <div class="w3-card p-3">No Resume added yet. <a href="#addResume" data-toggle="modal">Add New</a></div>
                     @endif
                 </div>
               </div>
             </div>
           </div>
         </div>

       <!-- End Middle Column -->
       </div>
       <!-- Modal -->
       <div class="modal fade" id="addResume" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Add New Modal</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                   </div>

                   <form action="{{ route('applicant.resume.store') }}" method="POST">
                    @csrf
                        <div class="modal-body">
                            <span class="w3-label">Title</span>
                            <div class="w3-container pb-3">
                                <input placeholder="Resume Title.." type="text" name="resume" class="w3-input w3-round-large w3-round @error('resume') w3-border-red @enderror">
                                <small>E.g Best resume, </small><br>
                                @error('resume')
                                    <span class="w3-text-red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                   </form>
               </div>
           </div>
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
