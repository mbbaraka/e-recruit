<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Particular;
use App\Models\Home\Application;
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
        return view('ors.admin.index', compact('user', 'particulars', 'applications', 'jobs'));
    }
}
