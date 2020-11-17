@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Welcome {{ Auth::user()->first_name .' '. Auth::user()->last_name }}</h3>
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
                                 <li><a href="#" title=""><i class="la la-envelope"></i>Applications</a></li>
                                 <li><a href="#" title=""><i class="la la-flash"></i>Schedule Interviews</a></li>
                                 <li><a href="#" title=""><i class="la la-lock"></i>Change Password</a></li>
                                 <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
                             </ul>
                         </div>
                     </div>
                 </aside>
                 <div class="col-lg-9 column pb-3">
                    <div class="padding-left">
                        <div class="border-title">
                            <h3>Editing Job</h3>
                            <a href="{{ route('admin.jobs.index') }}"><i class="la la-close"></i> Back</a>
                        </div>
                        <div class="profile-form-edit">
                            <form enctype="multipart/form-data" action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Job Title <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <input type="text" name="title" value="{{ $job->title }}" placeholder="Job Title" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <textarea name="description">{{ $job->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Salary Range </span>
                                        <div class="pf-field">
                                            <input type="text" name="salary_range" value="{{ $job->salary_range }}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Location</span>
                                        <div class="pf-field">
                                            <input type="text" name="location" value="{{ $job->location }}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Job Category <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                        <select name="category[]" class="chosen form-control">
                                            @foreach($categories as $category)
                                                <option @foreach($job->category as $cat) {{ $cat->id == $category->id ? 'selected' : '' }} @endforeach value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Job Type <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <select name="type" value="{{ $job->job_type }}" class="chosen form-control">
                                               <option @if($job->job_type == 'Full Time') selected @endif value="Full Time">Full Time</option>
                                               <option @if($job->job_type == 'Part Time') selected @endif value="Part Time">Part Time</option>
                                               <option @if($job->job_type == 'Contract') selected @endif value="Contract">Contract</option>
                                               <option @if($job->job_type == 'Parmanent') selected @endif value="Parmanent">Parmanent</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Application Deadline Date <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <input type="date" name="deadline" value="{{ $job->deadline }}"  class="form-control datepicker" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Positions</span>
                                        <div class="pf-field">
                                            <input type="number" name="vacancies" value="{{ $job->vacancies }}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Qualification <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <select name="qualification" value="{{ old('qualification') }}" id="textarea" class="chosen form-control">
                                               <option @if($job->qualification == 'No Qualification') selected @endif value="No Qualification">No Qualification</option>
                                               <option @if($job->qualification == 'Certificate') selected @endif value="Certificate">Certificate</option>
                                               <option @if($job->qualification == 'Diploma') selected @endif value="Diploma">Diploma</option>
                                               <option @if($job->qualification == 'Degree') selected @endif value="Degree">Degree</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Experience <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <select name="experience" value="{{ old('experience') }}" class="chosen form-control">
                                               <option @if($job->experience == '0') selected @endif value="0">No Experience</option>
                                               <option @if($job->experience == '< 1') selected @endif value="< 1">Less than 1 Year</option>
                                               <option @if($job->experience == '< 3') selected @endif value="< 3">Less than 3 Years</option>
                                               <option @if($job->experience == '> 3') selected @endif value="> 3">More than 3 Years</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Status <small class="text-danger">*</small></span>
                                        <div class="pf-field">
                                            <select name="status" value="{{ $job->status }}" class="chosen form-control">
                                               <option value="1">Active</option>
                                               <option value="0">Not Active</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Supporting Document</span>
                                        <div class="pf-field">
                                            <input type="file" name="document" value="{{ old('document') }}"  class="form-control datepicker" />
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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

