<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Education;
use App\Models\Applicant\Experience;
use App\Models\Applicant\Resume;
use App\Models\Applicant\Skills;
use App\Models\Home\Application;
use App\Models\Home\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $count = 0;
        $jobs = Job::where('status', '1')->where('deadline', '>', now())->paginate(5);
        $job = Job::where('status', '1')->where('deadline', '>', now())->get();
        foreach ($job as $value) {
            $count += Application::where('job_id', $value->id)->get()->count();
        }
        return view('admin.applications.index', compact('jobs', 'count', 'job'));
    }

    public function view($id)
    {
        $job =Job::find($id);
        $applications = Application::where('job_id', $id)->paginate(5);
        return view('admin.applications.list', compact('applications', 'job'));
    }

    public function resume($application, $user_id)
    {
        $user = User::find($user_id);
        $item = Application::find($application);
        $resume = Resume::find($item->resume_id);
        $experiences = Experience::where('user_id', $user_id)->where('resume_id', $resume->id)->get();
        $educations = Education::where('user_id', $user_id)->where('resume_id', $resume->id)->get();
        $skills = Skills::where('user_id', $user_id)->where('resume_id', $resume->id)->get();

        return view('admin.applications.view-resume', compact(
            'resume', 'educations', 'experiences', 'skills', 'user'
        ));
    }
}
