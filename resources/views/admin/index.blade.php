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
                 <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec pb-3">
                            <h3>Human Resource Dashboard</h3>
                            <div class="cat-sec">
                               <div class="row no-gape">
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category">
                                           <a href="#" title="">
                                               <i class="la la-briefcase"></i>
                                               <span>Active Jobs</span>
                                               <p>14 Applications</p>
                                           </a>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category view-resume-list">
                                           <a href="#" title="">
                                               <i class="la la-eye"></i>
                                               <span>View Resume</span>
                                               <p>22 View Statistic</p>
                                           </a>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category">
                                           <a href="#" title="">
                                               <i class="la la-file-text "></i>
                                               <span>My Resume</span>
                                               <p>Create New Resume</p>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="cat-sec">
                               <div class="row no-gape">
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category">
                                           <a href="#" title="">
                                               <i class="la la-check"></i>
                                               <span>Appropriate For Me</span>
                                               <p>(05 Jobs)</p>
                                           </a>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category follow-companies-popup">
                                           <a href="#" title="">
                                               <i class="la la-user"></i>
                                               <span>Follow Companies</span>
                                               <p>56 Companies</p>
                                           </a>
                                       </div>
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                       <div class="p-category">
                                           <a href="#" title="">
                                               <i class="la la-file"></i>
                                               <span>My Profile</span>
                                               <p>View Profile</p>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
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

