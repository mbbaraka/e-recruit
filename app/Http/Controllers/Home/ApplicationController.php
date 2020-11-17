<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Resume;
use App\Models\Home\Application;
use App\Models\Home\Job;
use App\Models\Home\JobView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        if (!$this->middleware('auth')) {
            return redirect()->route('login');
        }


    }

    public function index($id)
    {

        $job = Job::find($id);
        $views = JobView::where('job_id', $id)->count();
        $resumes = Resume::where('user_id', Auth::user()->id)->get();
        return view('home.jobs.apply', compact('job', 'resumes', 'views'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'resume' => 'required',
            'description' => 'required'
        ]);

        $application = new Application();
        $application->job_id = $request->job_id;
        $application->user_id = Auth::user()->id;
        $application->resume_id = $request->resume;
        $application->description = $request->description;

        $save = $application->save();

        if($save){
            return redirect()->route('apply.success');
        }
    }

    public function applySuccess()
    {
        return view('home.jobs.success');
    }
}
