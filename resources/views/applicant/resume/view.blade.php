@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{ asset('assets/images/resource/mslider1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Resumes -- {{ $resume->title }} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container">
             <div class="row no-gape">
                 <aside class="col-lg-3 column border-right">
                     <div class="widget">
                         <div class="tree_widget-sec">
                            <ul>
                                <li><a href="{{ route('applicant.profile.index') }}" title=""><i class="la la-file-text"></i>My Profile</a></li>
                               <li><a href="{{ route('applicant.resume.index') }}" title=""><i class="la la-briefcase"></i>My Resume</a></li>
                               <li><a href="candidates_shortlist.html" title=""><i class="la la-money"></i>Shorlisted Job</a></li>
                               <li><a href="{{ route('applicant.jobs.applied') }}" title=""><i class="la la-paper-plane"></i>Applied Job</a></li>
                               <li><a href="candidates_job_alert.html" title=""><i class="la la-user"></i>Job Alerts</a></li>
                               <li><a href="candidates_cv_cover_letter.html" title=""><i class="la la-file-text"></i>Cv & Cover Letter</a></li>
                               <li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li>
                               <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
                            </ul>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec">
                            <div class="border-title"><h3>Education Background</h3><a href="#" data-target="#addEducation" data-toggle="modal" title=""><i class="la la-plus"></i> Add Education</a></div>
                            <div class="edu-history-sec">
                                @if(count($educations) > 0)

                                @foreach ($educations as $education)
                                    <div class="edu-history">
                                        <i class="la la-graduation-cap"></i>
                                        <div class="edu-hisinfo">
                                            <h3>{{ $education->level }}</h3>
                                            <i>{{ $education->from . ' to ' . $education->to}}</i>
                                            <span>{{ $education->school }} <i>{{ $education->attained }}</i></span>
                                            <p>
                                                {!! $education->description !!}
                                            </p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                @else
                                    <span>No education level added yet</span>
                                @endif
                            </div>
                            <div class="border-title"><h3>Work Experience</h3><a href="#" data-target="#addExperience" data-toggle="modal" title=""><i class="la la-plus"></i> Add Experience</a></div>
                            <div class="edu-history-sec">
                                    @if(count($experiences) > 0)
                                        @foreach ($experiences as $experience)
                                        <div class="edu-history style2">
                                            <i></i>
                                            <div class="edu-hisinfo">
                                                <h3>{{ $experience->title }} <span>{{ $experience->company }}</span></h3>
                                                <i>{{ date('M Y', strtotime($experience->from)) . ' to ' . date('M Y', strtotime($experience->to)) }}</i>
                                                <p>{!! $experience->description !!}</p>
                                            </div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        @endforeach
                                    @else
                                        <span>No work experience added yet</span>
                                    @endif
                            </div>
                            <div class="border-title"><h3>Professional Skills</h3><a href="#" title="" data-target="#addSkill" data-toggle="modal"><i class="la la-plus"></i> Add Skills</a></div>
                            <div class="progress-sec">
                                @if (count($skills) > 0)
                                    @foreach ($skills as $skill)
                                    <div class="progress-sec with-edit">
                                        <span>{{ $skill->skill }}</span>
                                    <div class="progressbar"> <div class="progress" style="width: {{ $skill->level }}%;"><span>{{ $skill->level }}%</span></div> </div>
                                    <small class="text-muted">{!! $skill->description !!}</small>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                @else
                                    <span>No Professional Skill added yet</span>
                                @endif
                            </div>
                            <br><br><br><br><br>
                        </div>
                    </div>
               </div>
             </div>
        </div>
    </div>
</section>

{{-- Modals --}}

<!-- Education Modal -->
<div class="modal fade" id="addEducation" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add Education Level Attained</h5>
                        <button type="button" class="close-popup close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"><span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="profile-form-edit">
                            <form action="{{ route('applicant.education.store', $resume->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">School</span>
                                        <div class="pf-field">
                                            <input type="text" name="school" class="@error('school') @enderror" placeholder="School" />
                                            @error('school')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Level</span>
                                        <div class="pf-field">
                                            <select data-placeholder="Please Select School Level" name="level" class="chosen form-control @error('level') is-invalid @enderror">
                                            <option value="Nursery">Nursery</option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="University">University</option>
                                        </select>
                                        @error('level')
                                        <span>{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea name="description" class="@error('description') is-invalid @enderror"></textarea>
                                            @error('description')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">From</span>
                                        <div class="pf-field">
                                            <input type="date" name="from" value="{{ old('from') }}" class="@error('from') is-invalid @enderror" />
                                            @error('from')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">To</span>
                                        <div class="pf-field"><input type="date" name="to" value="{{ old('to') }}" class="@error('to') is-invalid @enderror" />
                                            @error('to')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <span class="pf-title">Attained</span>
                                        <div class="pf-field">
                                            <input type="text" name="attain" class="@error('attain') is-invalid @enderror" placeholder="Attained" />
                                            @error('attain')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
{{-- Work Experience Modal --}}
<div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add Work Experience</h5>
                        <button type="button" class="close-popup close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"><span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="profile-form-edit">
                            <form action="{{ route('applicant.experience.store', $resume->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Company / Work Place</span>
                                        <div class="pf-field">
                                            <input type="text" value="{{ old('workplace') }}" name="workplace" class="@error('workplace') @enderror" placeholder="Work Place/Company" />
                                            @error('workplace')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Title / Position Held</span>
                                        <div class="pf-field">
                                            <input type="text" value="{{ old('title') }}" name="title" class="@error('title') is-invalid @enderror" placeholder="Position held / Title" />
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea name="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">From</span>
                                        <div class="pf-field">
                                            <input type="date" name="from" value="{{ old('from') }}" class="@error('from') is-invalid @enderror" />
                                            @error('from')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">To</span>
                                        <div class="pf-field"><input type="date" name="to" value="{{ old('to') }}" class="@error('to') is-invalid @enderror" />
                                            @error('to')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

{{-- Skills Modal --}}
<div class="modal fade" id="addSkill" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add Professional Skills</h5>
                        <button type="button" class="close-popup close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"><span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="profile-form-edit">
                            <form action="{{ route('applicant.skill.store', $resume->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Skill</span>
                                        <div class="pf-field">
                                            <input type="text" value="{{ old('skill') }}" name="skill" class="@error('skill') @enderror" placeholder="Professional Skill" />
                                            @error('skill')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Percentage Level</span>
                                        <div class="pf-field">
                                            <input type="numer" value="{{ old('level') }}" name="level" class="@error('level') is-invalid @enderror" placeholder="Percentage Level" />
                                            <small>E.g 76%</small>
                                            @error('level')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea name="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection

