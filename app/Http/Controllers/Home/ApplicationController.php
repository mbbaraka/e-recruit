<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Resume;
use App\Models\Applicant\Letter;
use App\Models\Home\Application;
use App\User;
use App\Models\Applicant\Particular;
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

        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $job = Job::find($id);
        $applications = Application::where('job_id', $id)->get()->count();
        $views = JobView::where('job_id', $id)->count();
        $resumes = Resume::where('user_id', Auth::user()->id)->get();
        $letters = Letter::where('user_id', Auth::user()->id)->get();
        return view('ors.applicant.jobs.apply', compact('job', 'resumes', 'views', 'user', 'letters', 'particulars', 'applications'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'resume' => 'required',
            'letter' => 'required',
            'description' => 'required'
        ]);

        $application = new Application();
        $application->job_id = $request->job_id;
        $application->user_id = Auth::user()->id;
        $application->resume_id = $request->resume;
        $application->letter_id = $request->letter;
        $application->description = $request->description;

        $save = $application->save();

        if($save){
            return redirect()->route('apply.success');
        }
    }

    public function applySuccess()
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        return view('ors.applicant.jobs.success', compact('user', 'particulars'));
    }
}
