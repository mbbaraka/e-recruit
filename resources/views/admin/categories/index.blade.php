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
                    <div class="padding-left">
                        <div class="manage-jobs-sec pb-3">
                            <div class="border-title"><h3>Job Categories</h3><a href="#" data-target="#addCategory" data-toggle="modal" title=""><i class="la la-plus"></i> Add Category</a></div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Category</td>
                                        <td>No. of Jobs</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3>{{ $key + 1 }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3>{{ $category->title }}</h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{ $category->job->count()}}</span><br />
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a onclick="confirm('Are you sure of this?')" href="{{ route('admin.categories.delete', $category->id) }}" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
               <br>
               <br>
             </div>
        </div>
    </div>
</section>
<!-- Education Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add Job Category</h5>
                        <button type="button" class="close-popup close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"><span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="profile-form-edit">
                            <form action="{{ route('admin.categories.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Category</span>
                                        <div class="pf-field">
                                            <input type="text" name="category" class="@error('category') @enderror" placeholder="Category" />
                                            @error('category')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

