@extends('layouts.app')

@section('content')

<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 column">
                    <div class="heading left">
                        <h2>You searched for {{ $search }}</h2>
                    </div><!-- Heading -->
                    <div class="job-listings-sec style2">
                        @if(count($results) > 0)
                        <p>{{ $results->count() }} results</p>
                        @foreach ($results as $job)
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
                        @else
                        <strong>No results for {{ $search }}. Try searching again from the form below.</strong><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-location-sec">
                                        <form method="GET" action="{{ route('search') }}">
                                            <div class="field-lct">
                                                <input type="text" name="query" class="p-2 form-control @error('query') @enderror" placeholder="Search Keywords" />
                                                @error('query')
                                                    <span>
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <button type="submit"><i class="la la-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 column">
                    <div class="heading left">
                        <h2>Help</h2>
                    </div><!-- Heading -->
                    <div class="job-grid-sec">
                        <div class="row">
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
