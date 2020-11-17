@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Viewing resume for {{ $user->first_name . ' ' . $user->last_name}}</h3>
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
                                 <li><a href="{{ route('admin.jobs.index') }}"><i class="la la-briefcase"></i>Manage Jobs</a></li>
                                 <li><a href="{{ route('admin.categories.index') }}" title=""><i class="la la-briefcase"></i>Manage Categories</a></li>
                                 <li><a href="{{ route('admin.applications.index') }}" title=""><i class="la la-envelope"></i>Applications</a></li>
                                 <li><a href="#" title=""><i class="la la-flash"></i>Schedule Interviews</a></li>
                                 <li><a href="#" title=""><i class="la la-lock"></i>Change Password</a></li>
                                 <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
                             </ul>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec">
                            <div class="border-title"><h3>Profile</h3></div>
                            <div class="edu-history-sec">
                                <ul>
                                    <li>First Name: <strong>{{ $user->first_name }}</strong></li>
                                    <li>Last Name: <strong>{{ $user->last_name }}</strong></li>
                                    <li>Email Address: <strong>{{ $user->email }}</strong></li>
                                    <li>Phone Number: <strong>{{ $user->particulars->phone }}</strong></li>
                                    <li>Date of Birth: <strong>{{ date('M d, Y', strtotime($user->particulars->date_of_birth)) }}</strong></li>
                                    <li>Address: <strong>{{ $user->particulars->address }}</strong></li>
                                </ul>
                            </div>
                            <div class="border-title"><h3>Education Background</h3></div>
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
                                    </div>
                                    @endforeach
                                @else
                                    <span>No education level added yet</span>
                                @endif
                            </div>
                            <div class="border-title"><h3>Work Experience</h3></div>
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
                                        </div>
                                        @endforeach
                                    @else
                                        <span>No work experience added yet</span>
                                    @endif
                            </div>
                            <div class="border-title"><h3>Professional Skills</h3></div>
                            <div class="progress-sec">
                                @if (count($skills) > 0)
                                    @foreach ($skills as $skill)
                                    <div class="progress-sec with-edit">
                                        <span>{{ $skill->skill }}</span>
                                    <div class="progressbar"> <div class="progress" style="width: {{ $skill->level }}%;"><span>{{ $skill->level }}%</span></div> </div>
                                    <small class="text-muted">{!! $skill->description !!}</small>
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
               <br>
               <br>
             </div>
        </div>
    </div>
</section>
@endsection

