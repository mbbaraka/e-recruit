@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{ asset('assets/images/resource/mslider1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Resumes</h3>
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
                        <div class="profile-title">
                            <h3>My Profile</h3>
                        </div>
                        <div class="profile-form-edit">
                            <form class="pb-5" method="POST" action="{{ route('applicant.profile.update', $user->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="pf-title">First Name</span>
                                        <div class="pf-field">
                                            <input class="@error('f_name') is-invalid @enderror" type="text" name="f_name" value="{{ $user->first_name }}" placeholder="First Name" />
                                            @error('f_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Last Name</span>
                                        <div class="pf-field">
                                            <input class="@error('l_name') is-invalid @enderror" type="text" name="l_name" value="{{ $user->last_name }}" placeholder="Last Name" />
                                            @error('l_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Email Address</span>
                                        <div class="pf-field">
                                            <input type="text" name="email" class="@error('email') is-invalid @enderror " value="{{ $user->email }}" placeholder="Email Address ..." />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Phone Number</span>
                                        <div class="pf-field">
                                            <input type="text" name="phone" class="@error('phone') is-invalid @enderror" value="{{ $particulars->phone }}" placeholder="Phone Number" />
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Date of Birth</span>
                                        <div class="pf-field">
                                            <input type="date" name="dob" class="@error('dob') is-invalid @enderror" value="{{ $particulars->date_of_birth }}"/>
                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Address</span>
                                        <div class="pf-field">
                                            <input type="text" name="address" class="@error('address') is-invalid @enderror" value="{{ $particulars->address }}"/>
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
               </div>
             </div>
        </div>
    </div>
</section>
@endsection

