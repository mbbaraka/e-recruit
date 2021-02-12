@extends('ors.layouts.app')

@section('title')
View {{ $resume->title }}
@endsection
@section('content')
   <!-- Navbar -->
   <div class="w3-top">
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
             <a href="{{ route('applicant.resume.index') }}" class="list-group-item list-group-item-action active" style="text-decoration: none"><i class="fa fa-paper-plane"></i> &nbsp; My Resume</a>
             <a href="{{ route('applicant.jobs.index') }}" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-briefcase"></i> &nbsp; Available Jobs</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-envelope"></i> &nbsp; Cover Letter</a>
             <a href="#" class="list-group-item list-group-item-action" style="text-decoration: none"><i class="fa fa-question"></i> &nbsp; My Interviews</a>
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
                     Resume : {{ $resume->title }}
                     <a class="btn-sm w3-right w3-btn w3-round w3-light-blue" href="{{ route('applicant.resume.index') }}"><i class="fas fa-reply"></i></a>
                 </h2>
                 <hr class="w3-clear">
                 <div class="w3-row-padding">
                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-grey w3-padding-16">
                            <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
                            <span data-target="#newEducation" data-toggle="modal" class="w3-right btn-sm w3-btn w3-round w3-light-blue"><i class="fa fa-plus"> New</i></span>
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
                            <span data-target="#newExperience" data-toggle="modal" class="w3-right btn-sm w3-btn w3-round w3-light-blue"><i class="fa fa-plus"> New</i></span>
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
                            <span data-target="#newSkill" data-toggle="modal" class="w3-right btn-sm w3-btn w3-round w3-light-blue"><i class="fa fa-plus"> New</i></span>
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

       <!-- End Middle Column -->
       </div>
       <!-- EducationModal -->
       <div class="modal fade" data-backdrop="false" id="newEducation" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">New Education Level</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                   </div>
                    <form action="{{ route('applicant.education.store', $resume->id) }}" method="POST">
                                @csrf
                                <div class="row p-3">
                                    <div class="col-lg-12 m-3">
                                        <div class="w3-container">
                                            <span class="w3-label">School</span>
                                            <input type="text" value="{{ old('school') }}" name="school" class="w3-input w3-round w3-round-large @error('school') w3-border-red @enderror" placeholder="School" />
                                            @error('school')
                                                <span class="w3-text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 m-3">
                                        <div class="w3-container">
                                            <span class="w3-label">Level</span>
                                            <select data-placeholder="Please Select School Level" name="level" class="w3-input w3-round w3-round-large @error('level') w3-border-red @enderror">
                                            <option value="Nursery">Nursery</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="University">University</option>
                                        </select>
                                        @error('level')
                                        <span class="w3-text-red">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 m-3">
                                        <div class="w3-container">
                                            <span class="w3-label">Description</span>
                                            <textarea name="description" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror">{!! old('description') !!}</textarea>
                                            @error('description')
                                                <span class="w3-text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="w3-container">
                                            <span class="w3-label">From</span>
                                            <input type="date" name="from" value="{{ old('from') }}" class="w3-input w3-round w3-round-large @error('from') w3-border-red @enderror" />
                                            @error('from')
                                                <span class="w3-text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">To</span>
                                        <div class="pf-field"><input type="date" name="to" value="{{ old('to') }}" class="w3-input w3-round w3-round-large @error('to') w3-border-red @enderror" />
                                            @error('to')
                                                <span class="w3-text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 m-3">
                                        <div class="w3-container">
                                            <span class="w3-label">Attained</span>
                                            <input type="text" value="{{ old('attain') }}" name="attain" class="w3-input w3-round w3-round-large @error('attain') w3-border-red @enderror" placeholder="Attained" />
                                            @error('attain')
                                                <span class="w3-text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w3-container">
                                        <button class="w3-btn w3-round w3-round-xxlarge w3-light-blue">Submit</button>
                                    </div>

                                </div>
                            </form>
               </div>
           </div>
       </div>
       <!-- Experience Modal -->
       <div class="modal fade" data-backdrop="false" id="newExperience" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" data-backdrop="false" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Work Experience Level</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{ route('applicant.experience.store', $resume->id) }}" method="POST">
                    @csrf
                    <div class="row p-3">
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-label">Company / Work Place</span>
                                <input type="text" value="{{ old('workplace') }}" name="workplace" class="w3-input w3-round w3-round-large @error('workplace') w3-border-red @enderror" placeholder="Work Place/Company" />
                                @error('workplace')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-lable">Title / Position Held</span>
                                <input type="text" value="{{ old('title') }}" name="title" class="w3-input w3-round- w3-roung-large @error('title') w3-border-red @enderror" placeholder="Position held / Title" />
                                @error('title')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-label">Description</span>
                                <textarea name="description" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w3-container">
                                <span class="w3-label">From</span>
                                <input type="date" name="from" value="{{ old('from') }}" class="w3-input w3-round w3-round-large @error('from') w3-border-red @enderror" />
                                @error('from')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="w3-container">
                                <span class="w3-label">To</span>
                                <input type="date" name="to" value="{{ old('to') }}" class="w3-input w3-round w3-round-large @error('to') w3-border-red @enderror" />
                                @error('to')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="w3-container m-3">
                            <button type="submit" class="w3-btn w3-round w3-light-blue w3-roung-large">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div>

       <!-- Skill Modal -->
       <div class="modal fade show" id="newSkill" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Skill</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{ route('applicant.skill.store', $resume->id) }}" method="POST">
                    @csrf
                    <div class="row p-3">
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-label">Skill</span>
                                <input type="text" value="{{ old('skill') }}" name="skill" class="w3-input w3-round w3-round-large @error('skill') w3-border-red @enderror" placeholder="Skill" />
                                @error('skill')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-lable">Level</span>&nbsp;
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label title="struggling" class="btn btn-secondary active">
                                    <input title="" type="radio" value="1" name="level" id="1" autocomplete="off" checked=""> 1
                                  </label>
                                  <label title="poor" class="btn btn-secondary">
                                    <input type="radio" value="2" name="level" id="2" autocomplete="off"> 2
                                  </label>
                                  <label title="fair" class="btn btn-secondary">
                                    <input title="fair" value="3" type="radio" name="level" id="3" autocomplete="off"> 3
                                  </label>
                                  <label title="good" class="btn btn-secondary">
                                    <input type="radio" value="4" name="level" id="4" autocomplete="off"> 4
                                  </label>
                                  <label title="excellent" class="btn btn-secondary">
                                    <input type="radio" value="5" name="level" id="5" autocomplete="off"> 5
                                  </label>
                                </div>
                                @error('level')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 m-3">
                            <div class="w3-container">
                                <span class="w3-label">Description</span>
                                <textarea name="description" class="w3-input w3-round w3-round-large @error('description') w3-border-red @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="w3-text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="w3-container m-3">
                            <button type="submit" class="w3-btn w3-round w3-light-blue w3-roung-large">Submit</button>
                        </div>
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
