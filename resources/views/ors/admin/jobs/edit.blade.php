@extends('ors.layouts.app')

@section('title')
Edit {{ $job->title }}
@endsection

@section('content')
   <!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
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
             <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-home"></i> &nbsp; Dashboard</a>
             <a href="{{ route('admin.jobs.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Manage Jobs</a>
             <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-th"></i> &nbsp; Job Categories</a>
             <a href="{{ route('admin.applications.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Applications</a>
             <a href="{{ route('admin.shortlist.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fas fa-list"></i> &nbsp; Shortlists</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class=" fas fa-question"></i> &nbsp; Interviews</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
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
                    <h5><b><i class="fa fa-dashboard"></i> New Job</b></h5>
                  </header>
                  <div class="w3-row-padding">
                    <form enctype="multipart/form-data" action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
                        @csrf
                       <div class="w3-container">
                           <label for="title">Job Title <strong class="text-danger">*</strong></label>
                           <input type="text" value="{{ $job->title }}" name="title" class="w3-input w3-round w3-round-large @error('title') w3-border-red @enderror" id="">
                           @error('title')
                               <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                           @enderror
                       </div>
                       <br>
                       <br>
                       <div class="w3-container w3-half pb-3">
                           <label for="salary_range">Salary Range <strong class="text-danger">*</strong></label>
                           <input type="text" value="{{ $job->salary_range }}" name="salary_range" class="w3-input w3-round w3-round-large @error('salary_range') w3-border-red @enderror" id="">
                           @error('salary_range')
                               <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                           @enderror
                       </div>
                       <div class="w3-container w3-half pb-3">
                           <label for="last_name">Location <strong class="text-danger">*</strong></label>
                           <input type="text" value="{{ $job->location }}" name="location" class="w3-input w3-round w3-round-large @error('location') w3-border-red @enderror" id="">
                           @error('location')
                               <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                           @enderror
                       </div>
                       <br>
                       <br>
                       <div class="w3-container">
                           <label for="email">Description <strong class="text-danger">*</strong></label>
                           <textarea name="description" id="" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror" id="">{{ $job->description }}</textarea>
                           @error('description')
                               <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                           @enderror
                       </div>
                       <br>
                       <br>
                       <div class="w3-container">
                           <label for="categories">Categories <strong class="text-danger">*</strong></label>
                           <select multiple name="category[]" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                            </select>
                            @error('category')
                               <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                           @enderror
                       </div>
                       <br>
                       <br>
                        <div class="w3-container w3-half pb-3">
                            <label for="deadline">Application Deadline <strong class="text-danger">*</strong></label>
                            <input type="date" value="{{ $job->deadline }}" name="deadline" class="w3-input w3-round w3-round-large @error('deadline') w3-border-red @enderror" id="">
                            @error('deadline')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="w3-container w3-half pb-3">
                            <label for="vacancies">Positions <strong class="text-danger">*</strong></label>
                            <input type="text" value="{{ $job->vacancies }}" name="vacancies" class="w3-input w3-round w3-round-large @error('vacancies') w3-border-red @enderror" id="">
                            @error('vacancies')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <br>
                        <div class="w3-container">
                             <label for="title">Job Type <strong class="text-danger">*</strong></label>
                             <select name="type" value="{{ $job->type }}" class="w3-input w3-round w3-round-large @error('type') w3-border-red @enderror">
                                 <option value="Full Time">Full Time</option>
                                 <option value="Part Time">Part Time</option>
                                 <option value="Contract">Contract</option>
                                 <option value="Parmanent">Parmanent</option>
                             </select>
                             @error('type')
                                 <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                             @enderror
                         </div>
                         <br>
                         <br>
                        <div class="w3-container w3-half pb-3">
                            <label for="qualification">Qualification <strong class="text-danger">*</strong></label>
                            <select name="qualification" value="{{ $job->qualification }}" class="w3-input w3-round w3-round-large @error('qualification') w3-border-red @enderror">
                                <option value="No Qualification">No Qualification</option>
                                <option value="Certificate">Certificate</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Degree">Degree</option>
                            </select>
                            @error('qualification')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="w3-container w3-half pb-3">
                            <label for="experience">Experience <strong class="text-danger">*</strong></label>
                            <select name="experience" value="{{ $job->experience }}" class="w3-input w3-round w3-round-large @error('experience') w3-border-red @enderror">
                                <option value="0">No Experience</option>
                                <option value="< 1">Less than 1 Year</option>
                                <option value="< 3">Less than 3 Years</option>
                                <option value="> 3">More than 3 Years</option>
                            </select>
                            @error('experience')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <br>
                        <div class="w3-container">
                             <label for="status">Status <strong class="text-danger">*</strong></label>
                             <select name="status" value="{{ $job->status }}" class="w3-input w3-round w3-round-large @error('status') w3-border-red @enderror">
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                             @error('status')
                                 <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                             @enderror
                         </div>
                         <br>
                         <br>

                        <div class="w3-container">
                            <label for="status">Supporting Document <i> &nbsp; (optional)</i></label>
                            <input type="file" name="document" value="{{ old('document') }}"  class="w3-input w3-round w3-round-large @error('document') w3-border-red @enderror" />
                            @error('status')
                                <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <br>
                        <button type="reset" class="w3-btn btn-dark w3-round">Cancel</button>
                       <button type="submit" class="w3-right w3-btn w3-light-blue w3-round">Submit</button>


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
   <footer class="w3-container w3-theme-d3 w3-padding-16 w3-center">
     <h5>{{ date('Y') }} &copy; Online Recruitment System </h5>
   </footer>
@endsection
