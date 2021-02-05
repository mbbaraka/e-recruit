<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Shortlist;
use App\Models\Admin\Notification;
use App\Models\Applicant\Particular;
use App\Models\Home\Application;
use App\Models\Home\Job;
use App\User;
use Alert;
use Illuminate\Support\Facades\Auth;

class ShortlistController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->get()->take(5);
        $user =  User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $jobs = Job::latest()->paginate(10);
        $shortlist = Shortlist::paginate(); 
        return view('ors.admin.shortlist.index', compact('user', 'particulars', 'applications', 'jobs', 'shortlist'));
    }

    public function store(Request $request)
    {
    	$applicant = $request->user;
    	$job = $request->job;
        $title = Job::where('id', $job)->first()->title;

    	$check = Shortlist::where('applicant_id', $applicant)->where('job_id', $job)->first();

    	if ($check) {
    		toast('Applicant already shorlisted', 'warning');
            return redirect()->back();
    	}else{
	    	$list = new Shortlist();
	    	$list->job_id = $job;
	    	$list->applicant_id = $applicant;
	    	$save = $list->save();

	    	if($save){
                $notifications = new Notification();
                $notifications->sender_id = Auth::user()->id;
                $notifications->receiver_id = $applicant;
                $notifications->message = "Hello<br>You have been shortlisted for the ". $title .". You will be notified for an interview.<br>Thanks. ";

                $notifications->save();
	            toast('Successfully added to shortlist', 'success');
	            return redirect()->back();
	        }
	    }

    }
}
