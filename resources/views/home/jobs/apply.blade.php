@extends('layouts.app')

@section('content')


<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Job Application Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 column">
                     <div class="job-single-sec style3">
                         <div class="job-head-wide">
                             <div class="row">
                                 <div class="col-lg-8">
                                     <div class="job-single-head3">
                                             <h3>You are applying as {{ $job->title }}</h3>
                                         </div>
                                     </div><!-- Job Head -->
                                 </div>
                             </div>
                         </div>
                         <div class="job-wide-devider">
                             <div class="row">
                                 <div class="col-lg-8 column">
                                     <div class="job-details">
                                         <h3>Application Form</h3>
                                         @if (count($resumes) > 0)
                                            <form action="{{ route('apply.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                <div class="cfield">
                                                    <span class="pf-title">Select Resume *</span>
                                                    <select class="form-control @error('resume') is-invalid @enderror" name="resume" id="">
                                                        @foreach ($resumes as $resume)
                                                            <option value="{{ $resume->id }}">{{ $resume->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('resume')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="pf-field">
                                                    <span class="pf-title">Describe Yourself *</span>
                                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                            </form>
                                         @else
                                            <span><strong>You have no resume yet. <a href="#">Click here to create one</a></strong></span>
                                         @endif
                                     </div>
                                 </div>
                                 <div class="col-lg-4 column">
                                     <div class="job-overview">
                                         <h3>Job Overview</h3>
                                         {{-- <span><i class="la la-map-marker"></i>{{ $job->location }}</span><span class="job-is ft">{{ $job->job_type }}</span>
                                             <ul class="tags-jobs">



                                             </ul> --}}
                                         <ul>
                                            <li><i class="la la-calendar-o"></i><h3> Post Date: </h3><span> {{ date('M d, Y', strtotime($job->created_at)) }}</span></li>
                                             <li><i class="la la-money"></i><h3>Offerd Salary</h3><span>{{ $job->salary_range }}</span></li>
                                             {{-- <li><i class="la la-thumb-tack"></i><h3>Career Level</h3><span>Executive</span></li> --}}
                                             <li><i class="la la-file-text"></i><h3> Applications</h3><span>1</span></li>
                                             <li><i class="la la-puzzle-piece"></i><h3>Industry</h3><span>Management</span></li>
                                             <li><i class="la la-shield"></i><h3>Experience</h3><span>{{ $job->experience }} years</span></li>
                                             <li><i class="la la-line-chart "></i><h3>Qualification</h3><span style="text-transform: capitalize">{{ $job->qualification }}</span></li>
                                             <li><i class="la la-eye"></i> <h3>Views</h3><span> {{ $views }}</span></li>
                                         </ul>
                                     </div><!-- Job Overview -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color green2"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 column">
                    <div class="detailbar">
                        <h3>Are You Hiring?</h3>
                        <p>Find everything you need to post a job and receive the best candidates by visiting our Empl oyer website. We offer small business and enterprise options.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
