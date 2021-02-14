<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Particular;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Home\Job;
use App\Models\Home\Application;

class HomeController extends Controller
{
    public function index()
    {
    	if (Auth::user()->is_admin == '1') {
            return redirect()->route('admin.index');
        }else{            
            $jobs = Job::where('status', '1')->where('deadline', '>', now())->get()->take(5); 
            $user = Auth::user()->id;
	        $user = User::find($user);
	        $particulars = Particular::where('user_id', $user->id)->first();
	        return view('ors.applicant.index', compact('user', 'particulars', 'jobs'));
        }
        
    }

    public function applications()
    {
        $user = Auth::user()->id;
        $user = User::find($user);
        $particulars = Particular::where('user_id', $user->id)->first();
        $applications = Application::where('user_id', Auth::user()->id)->latest()->get();

        return view('ors.applicant.applications', compact('user', 'particulars', 'applications'));
    }
}
