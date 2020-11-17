@extends('layouts.app')

@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Application Management</h3>
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
                    <div class="padding-left pb-3">
                        <div class="manage-jobs-sec">
                            <div class="border-title"><h3>Manage Job Applications</h3></div>
                            <div class="extra-job-info">
                                <span><i class="la la-file-text"></i><strong>{{ $count }}</strong> Application</span>
                                <span><i class="la la-users"></i><strong>{{ count($job) }}</strong> Active Jobs</span>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Job Title</td>
                                        <td>Applications</td>
                                        <td>Deadline</td>
                                        <td>Categories</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $key => $application)
                                    <tr>
                                        <td>{{ $key + 1 }} &nbsp; &nbsp;</td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">{{ $application->title }}</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field"><a href="{{ route('admin.applications.view', $application->id) }}">{{ $application->applications->count() }} Applications</a></span>
                                        </td>
                                        <td>
                                            <span class="text-info badge">{{ date('d M, Y', strtotime($application->deadline)) }}</span>
                                        </td>
                                        <td>
                                            @foreach ($application->category as $categories)
                                                <span class="text-info">{{ $categories->title }}, &nbsp;</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a href="{{ route('admin.applications.view', $application->id) }}" title=""><i class="la la-eye"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $jobs->links() }}
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

