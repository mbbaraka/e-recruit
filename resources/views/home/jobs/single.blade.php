@extends('layouts.app')

@section('content')


<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>{{ $job->title }}</h3>
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
                                         <div class="job-thumb"> <img width="80px;" src="{{ asset('favicon.png') }}" alt="" /><span>{{ $job->vacancies }} Open Position</span> </div>
                                         <div class="job-single-info3">
                                             <h3>{{ $job->title }}</h3>
                                             <span><i class="la la-map-marker"></i>{{ $job->location }}</span><span class="job-is ft">{{ $job->job_type }}</span>
                                             <ul class="tags-jobs">
                                                 <li><i class="la la-file-text"></i> Applications 1</li>
                                                 <li><i class="la la-calendar-o"></i> Post Date: {{ date('M d, Y', strtotime($job->created_at)) }}</li>
                                                 <li><i class="la la-calendar-o"></i> Deadline: {{ date('M d, Y', strtotime($job->deadline)) }}</li>
                                                 <li><i class="la la-eye"></i> Views {{ $views }}</li>
                                             </ul>
                                         </div>
                                     </div><!-- Job Head -->
                                 </div>
                                 <div class="col-lg-4">
                                     <a class="apply-thisjob" href="{{ route('apply.index', $job->id) }}" title=""><i class="la la-paper-plane"></i>Apply for job</a>
                                 </div>
                             </div>
                         </div>
                         <div class="job-wide-devider">
                             <div class="row">
                                 <div class="col-lg-8 column">
                                     <div class="job-details">
                                         <h3>Job Description</h3>
                                         <p>
                                            {!! $job->description !!}
                                         </p>
                                         <p>
                                             @if (file_exists('storage/documents/'. $job->document))
                                                <a target="_blank" href="{{ URL('storage/documents/'. $job->document) }}" download>Click to download descriptions</a>
                                             @endif
                                         </p>
                                     </div>
                                     <div class="share-bar">
                                         <span>Share</span><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
                                     </div>
                                     <div class="extra-job-info">
                                         <span><i class="la la-clock-o"></i><strong>{{ date('d', strtotime($job->deadline)) - date('d') }}</strong> Days</span>
                                         <span><i class="la la-file-text"></i><strong>300-500</strong> Application</span>
                                         <span><i class="la la-search-plus"></i><strong>35697</strong> Displayed</span>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 column">
                                     <div class="job-overview">
                                         <h3>Job Overview</h3>
                                         <ul>
                                             <li><i class="la la-money"></i><h3>Offerd Salary</h3><span>{{ $job->salary_range }}</span></li>
                                             {{-- <li><i class="la la-thumb-tack"></i><h3>Career Level</h3><span>Executive</span></li> --}}
                                             <li><i class="la la-puzzle-piece"></i><h3>Industry</h3><span>Management</span></li>
                                             <li><i class="la la-shield"></i><h3>Experience</h3><span>{{ $job->experience }} years</span></li>
                                             <li><i class="la la-line-chart "></i><h3>Qualification</h3><span style="text-transform: capitalize">{{ $job->qualification }}</span></li>
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
