<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Home\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Applicant\Particular;
use App\Models\Home\Job;

class JobController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $jobcount = Job::get();
        $jobs = Job::paginate(5);
        $applications = Application::get()->count();
        $active_jobs = $jobcount->where('status', 1)->count();
        return view('ors.applicant.jobs.index', compact('jobs', 'user', 'particulars'));
    }
}
