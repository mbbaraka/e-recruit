<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Particular;
use App\Models\Home\Application;
use App\Models\Admin\Notification;
use App\Models\Home\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->get()->take(5);
        $user =  User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $jobs = Job::where('deadline', '>=', now())->latest()->get();
        $all_jobs = Job::get();
        $all_applications = Application::get();
        $notification = Notification::where('receiver_id', Auth::user()->id)->where('status', '0')->get();
        return view('ors.admin.index', compact('user', 'particulars', 'applications', 'jobs', 'all_jobs', 'all_applications', 'notification'));
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        return view('ors.admin.profile.index', compact('user', 'particulars'));
    }
}
