<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant\Particular;
use App\Models\Home\Application;
use App\Models\Admin\Notification;
use App\Models\Home\Job;
use App\User;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->get()->take(5);
        $user =  User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $jobs = Job::where('deadline', '>=', now())->latest()->get();
        $notifications = Notification::where('receiver_id', Auth::user()->id)->where('status', '0')->get();
        return view('ors.admin.notification', compact('user', 'particulars', 'applications', 'jobs', 'notifications'));
    }
}
