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
                        <div class="manage-jobs-sec">
                            @if(count($resumes) <= 0)
                            <div class="border-title"><h3>Add New Resume</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <form action="{{ route('applicant.resume.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Title</span>
                                            <div class="pf-field">
                                                <input placeholder="Resume Title.." type="text" name="resume" class="@error('resume') is-invalid @enderror">
                                                <small>E.g Best resume, </small>
                                                @error('resume')
                                                    <span>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @else
                            <div class="border-title"><h3>My Resumes</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <table>
						 			<thead>
						 				<tr>
						 					<td>#</td>
						 					<td colspan="2">Title</td>
						 				</tr>
						 			</thead>
						 			<tbody>
                                         @foreach ($resumes as $key => $resume)
						 				<tr>
						 					<td>{{ $key + 1}}</td>
						 					<td>
						 						<div class="table-list-title">
						 							<h3><a href="{{ route('applicant.resume.view', $resume->id) }}" title="">{{ $resume->title }}</a></h3>
						 						</div>
						 					</td>
						 					<td>
						 						<ul class="action_job">
                                                     <li><span>View<a href="{{ route('applicant.resume.view', $resume->id) }}" title="View Resume"><i class="la la-bullseye"></i></a></span></li>
						 							<li><span>Delete</span><a onclick="confirm('Are you sure of this?')" href="{{ route('applicant.resume.delete', $resume->id) }}" title="delete"><i class="la la-trash-o"></i></a></li>
						 						</ul>
						 					</td>
                                         </tr>
                                         @endforeach
						 			</tbody>
						 		</table>
                            @endif
                        </div>
                    </div>
               </div>
             </div>
        </div>
    </div>
</section>
@endsection

