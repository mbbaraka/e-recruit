@extends('layouts.app')

@section('content')

<section>
    <div class="block double-gap-top double-gap-bottom">
        <div data-velocity="-.1" style="background: url({{ asset('assets/images/resource/bg3.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-location-sec">
                        <h3><strong>Great Job</strong> Greater Talent</h3>
                        <form method="GET" action="{{ route('search') }}">
                            <div class="field-lct">
                                <input type="text" name="query" class="p-2 @error('query') is-invalid @enderror" placeholder="Search Keywords" />
                                @error('query')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit"><i class="la la-search"></i></button>
                            <a href="#" title="">+ Advance Search</a>
                        </form>
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
                <div class="col-lg-9 column">
                    <div class="heading left">
                        <h2>Available Jobs</h2>
                    </div><!-- Heading -->
                    <div class="job-listings-sec style2">
                        @foreach ($jobs as $job)
                        <div class="job-listing">
                            <div class="job-title-sec">
                                <div class="c-logo"> <img style="width: 50px" src="{{ asset('favicon.png') }}" alt="" /> </div>
                                <h3><a href="{{ route('job.single', $job->id) }}" title="">{{ $job->title }}</a></h3>
                                <span>Deadline: {{ date('d M, Y', strtotime($job->deadline )) }}</span>
                                <span class="job-lctn">{{ $job->location }}</span>
                            </div>
                            <a href="#" title="" class="aply-btn">Appy Now</a>
                            <span class="job-is pt">{{ $job->job_type }}</span>
                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                        </div><!-- Job -->
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="heading left">
                        <h2>Help</h2>
                    </div><!-- Heading -->
                    <div class="job-grid-sec">
                        <div class="row">
                            {{-- <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="job-grid style2">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/jg1.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                    <span class="job-lctn">Sacramento, California</span>
                                    <p>Offer strategic and technical health and nutrition advice to headquarters and field staff, as well as training</p>
                                    <div class="grid-info-box">
                                        <span class="job-is">Full Time</span>
                                        <a  href="#" title="">APPLY NOW</a>
                                        <span class="fav-job"><i class="la la-heart-o"></i></span>
                                    </div>
                                </div><!-- JOB Grid -->
                            </div> --}}
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="banner_widget pt-3">
                                        <a href="#" title=""><img src="{{ asset('assets/images/resource/banner.png') }}" alt="" /></a>
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
