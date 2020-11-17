@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Applications for {{ $job->title }}</h3>
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
                        <div class="emply-resume-sec">
                            <div class="border-title"><h3>Applicants</h3><a href="{{ route('admin.applications.index') }}" title=""><i class="la la-close"></i> Back</a></div>
                            @foreach ($applications as $item)
                                <div class="emply-resume-list">
                                    <div class="emply-resume-info">
                                        <h3><a href="#" title="">{{ $item->users->first_name.' '.$item->users->last_name }}</a></h3>
                                        <p><i class="la la-map-marker"></i>{{ $item->users->particulars->address }}</p>
                                    </div>
                                    <div class="action-resume">
                                        <div class="action-center">
                                            <span>Action <i class="la la-angle-down"></i></span>
                                            <ul>
                                                <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                                <li><a href="{{ route('admin.applications.resume', [$item->id, $item->users->id]) }}" target="_blank" title="">View Resume</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="del-resume">
                                        <a href="#" title=""><i class="la la-trash-o"></i></a>
                                    </div>
                                </div><!-- Emply List -->
                            @endforeach
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

