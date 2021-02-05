<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Education;
use App\Models\Applicant\Experience;
use App\Models\Applicant\Resume;
use App\Models\Applicant\Skills;
use App\Models\Home\Application;
use App\Models\Home\Job;
use App\Models\Admin\Shortlist;
use App\User;
use App\Models\Applicant\Particular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $user =  User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $count = 0;
        $jobs = Job::where('status', '1')->where('deadline', '>', now())->paginate(5);
        $job = Job::where('status', '1')->where('deadline', '>', now())->get();
        foreach ($job as $value) {
            $count += Application::where('job_id', $value->id)->get()->count();
        }
        return view('ors.admin.applications.index', compact('jobs', 'count', 'job', 'user', 'particulars'));
    }

    public function view($id)
    {
        // $check = "";
        $user =  User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $job =Job::find($id);
        $applications = Application::where('job_id', $id)->paginate(5);

        return view('ors.admin.applications.list', compact('applications', 'job', 'user', 'particulars'));
    }

    public function resume($application, $user_id)
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $applicant = User::find($user_id);
        $item = Application::find($application);
        $resume = Resume::find($item->resume_id);
        $experiences = Experience::where('user_id', $user_id)->where('resume_id', $resume->id)->get();
        $educations = Education::where('user_id', $user_id)->where('resume_id', $resume->id)->get();
        $skills = Skills::where('user_id', $user_id)->where('resume_id', $resume->id)->get();

        return view('ors.admin.applications.view', compact(
            'resume', 'educations', 'experiences', 'skills', 'user', 'particulars', 'applicant'
        ));
    }
}
