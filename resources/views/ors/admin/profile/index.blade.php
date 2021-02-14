@extends('ors.layouts.app')

@section('title')
Profile
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
             <li class="w3-center list-group-item list-group-item-action w3-theme-d2">Quick Links</li>
             <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
             <a href="{{ route('admin.shortlist.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-list"></i> &nbsp; Shortlists</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class=" fas fa-question"></i> &nbsp; Interviews</a>
             <a href="{{ route('admin.profile.index' )}}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
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
                 <h2>Profile</h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     <form action="{{ route('applicant.profile.update', $user->id) }}" method="post">
                        @csrf
                        <div class="w3-container w3-half pb-3">
                            <label for="first_name">First Name <strong class="text-danger">*</strong></label>
                            <input type="text" value="{{ $user->last_name }}" name="first_name" class="w3-input w3-round w3-round-large @error('first_name') w3-border-red @enderror" id="">
                            @error('first_name')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="w3-container w3-half pb-3">
                            <label for="last_name">Last Name <strong class="text-danger">*</strong></label>
                            <input type="text" value="{{ $user->first_name }}" name="last_name" class="w3-input w3-round w3-round-large @error('last_name') w3-border-red @enderror" id="">
                            @error('last_name')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="w3-container w3-half pb-3">
                            <label for="email">Email <strong class="text-danger">*</strong></label>
                            <input type="email" value="{{ $user->email }}" name="email" class="w3-input w3-round w3-round-large @error('email') w3-border-red @enderror" id="">
                            @error('email')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="w3-container w3-half pb-3">
                            <label for="phone_number">Phone Number <strong class="text-danger">*</strong></label>
                            <input type="text" value="{{ $particulars->phone }}" name="phone_number" class="w3-input w3-round w3-round-large @error('phone_number') w3-border-red @enderror" id="">
                            @error('phone_number')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <div class="w3-container">
                            <label for="date_of_birth">Date of Birth <strong class="text-danger">*</strong></label>
                            <input type="date" value="{{ $particulars->date_of_birth }}" name="date_of_birth" class="w3-input w3-round w3-round-large @error('date_of_birth') w3-border-red @enderror" id="">
                            @error('date_of_birth')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <div class="w3-container">
                            <label for="email">Address <strong class="text-danger">*</strong></label>
                            <textarea name="address" id="" class="w3-input w3-round w3-round-large @error('address') w3-border-red @enderror" id="">{{ $particulars->address }}</textarea>
                            @error('address')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <div class="w3-container">
                            <input class="w3-check" type="checkbox" type="button" data-toggle="collapse" data-target="#changePassword" aria-expanded="false"
                            aria-controls="changePassword">
                            <label>Change Password</label>
                        </div>
                        <br>
                        <div class="collapse w3-container" id="changePassword">
                            <div class="w3-container w3-half">
                                <label for="password">New Password <strong class="text-danger">*</strong></label>
                                <input type="password" name="password" id="" class="w3-input w3-round w3-round-large @error('password') w3-border-red @enderror" id="">
                                @error('password')
                                    <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="w3-container w3-half">
                                <label for="confirm">Confirm Password <strong class="text-danger">*</strong></label>
                                <input type="password" name="confirm_password" id="" class="w3-input w3-round w3-round-large @error('confirm_password') w3-border-red @enderror" id="">
                                @error('confirm_password')
                                    <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="w3-right w3-btn w3-light-blue w3-round w3-round-xxlarge">Submit</button>


                     </form>
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
