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
                            <div class="border-title"><h3>Manage Jobs</h3><a href="{{ route('admin.jobs.new') }}"><i class="la la-plus"></i> Add New Job</a></div>
                            <div class="extra-job-info">
                                <span><i class="la la-clock-o"></i><strong>{{ count($jobcount) }}</strong> Job Posted</span>
                                <span><i class="la la-file-text"></i><strong>{{ $applications }}</strong> Application</span>
                                <span><i class="la la-users"></i><strong>{{ $active_jobs }}</strong> Active Jobs</span>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Title</td>
                                        <td>Applications</td>
                                        <td>Created & Expired</td>
                                        <td>Categories</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $key => $job)
                                    <tr>
                                        <td>{{ $key + 1 }} &nbsp; &nbsp;</td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">{{ $job->title }}</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="applied-field">{{ $job->applications->count() }} Applications</span>
                                        </td>
                                        <td>
                                            <span class="text-primary">{{ date('d M, Y', strtotime($job->created_at)) }}</span><br />
                                            <span class="text-info">{{ date('d M, Y', strtotime($job->deadline)) }}</span>
                                        </td>
                                        <td>
                                            @foreach ($job->category as $categories)
                                                <span class="text-info">{{ $categories->title }}, &nbsp;</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <span class="status active">
                                                @if ($job->status == '0')
                                                Not Active
                                                @else
                                                Active
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>View Job</span><a target="_blank" href="{{ route('job.single', $job->id) }}" title=""><i class="la la-eye"></i></a></li>
                                                <li><span>Edit</span><a href="{{ route('admin.jobs.edit', $job->id) }}" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a onclick="confirm('Are you sure of this?')" href="{{ route('admin.jobs.delete', $job->id) }}" title=""><i class="la la-trash-o"></i></a></li>
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

