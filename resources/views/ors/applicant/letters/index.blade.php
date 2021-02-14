@extends('ors.layouts.app')

@section('title')
Cover Letters
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
             <a href="{{ route('applicant.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Available Jobs</a>
             <a href="{{ route('applicant.letters') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Interviews</a>
             <a href="{{ route('applicant.profile.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-user"></i> &nbsp; My Profile</a>
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
                     My Letters
                     <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="#addResume" data-toggle="modal"><i class="fa fa-plus"></i></a>
                 </h2>
                 {{-- <span class="w3-right w3-jumbo"><i class="fa fa-return"></i></span> --}}
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                     @if($letters->count() > 0)
                     @foreach ($letters as $letter)
                        <div class="w3-card p-3 m-3 w3-round">
                            <table class="table table-responsive table-responsive-sm">
                                <tr>
                                  <td width="">#</td>
                                  <td width="">{{ $letter->title }}</td>
                                  <td><a href="{{ URL::to('storageq/letters/2021-02-13-60282591ec030.pdf') }}" target="_blank">Click to view letter</a></td>
                                  <td>
                                    <button class="btn-sm w3-btn w3-text-light-blue"><a title="View" href="{{-- {{ route('applicant.letter.view', $letter->id) }} --}}"><i class="fa fa-eye"></i></a></button>
                                    <button class="btn-sm w3-btn w3-text-red" onclick="confirm('Are you sure?')"><a title="Delete" href="{{-- {{ route('applicant.letter.delete', $letter->id) }} --}}"><i class="fa fa-trash"></i></a></button>
                                  </td>
                                </tr>
                            </table>
                        </div>
                     @endforeach
                     @else
                        <div class="w3-card p-3">No Letter added yet. <a href="#addResume" data-toggle="modal">Add New</a></div>
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
                       <h5 class="modal-title">Add New Letter</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                   </div>

                   <form action="{{ route('applicant.letter.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="modal-body">
                            <span class="w3-label">Title</span>
                            <div class="w3-container pb-3">
                                <input placeholder="Resume Title.." type="text" name="title" class="w3-input w3-round-large w3-round @error('title') w3-border-red @enderror" value="{{ old('title') }}">
                                <small>E.g Best letter, </small><br>
                                @error('title')
                                    <span class="w3-text-red">{{ $message }}</span>
                                @enderror
                            </div>

                            <span class="w3-label">Description</span>
                            <div class="w3-container pb-3">
                                <textarea placeholder="Resume description.." name="description" class="w3-input w3-round-large w3-round @error('description') w3-border-red @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="w3-text-red">{{ $message }}</span>
                                @enderror
                            </div>

                            <span class="w3-label">Upload Letter</span>
                            <div class="w3-container pb-3">
                                <input type="file" name="letter" class="w3-input w3-round-large w3-round @error('letter') w3-border-red @enderror">
                                @error('letter')
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
   <footer class="w3-container w3-theme-d3 w3-padding-16 text-center">
     <h5>Online Recruitment System (ORS) &copy; {{ date('Y') }}</h5>
   </footer>
@endsection
