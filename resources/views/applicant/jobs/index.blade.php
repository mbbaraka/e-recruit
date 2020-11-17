@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{ asset('assets/images/resource/mslider1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Jobs Applied For</h3>
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
                            <h3>Manage Jobs</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Position</td>
                                        <td>Date</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $key => $job)
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3>{{ $key + 1}}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="{{ route('job.single', $job->id) }}" title="">
                                                    {{ $job->jobs->title }}
                                                </a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{ date('M d, Y', strtotime($job->created_at)) }}</span><br />
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
               </div>
             </div>
        </div>
    </div>
</section>
@endsection

