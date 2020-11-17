<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\Job;
use App\Models\Home\JobView;
use App\Models\Home\Subscription;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::where('status', '1')->where('deadline', '>', now())->get()->take(5);
        return view('home.index', compact('jobs'));
    }

    public function singleJob($id)
    {
        $view = new JobView();
        $view->job_id = $id;
        $view->save();
        $job = Job::find($id);
        $views = JobView::where('job_id', $id)->count();
        return view('home.jobs.single', compact('job', 'views'));
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [ 'subscription' => 'required|email']);

        $email = Subscription::where('email', $request->subscription)->first();
        if ($email) {
            Alert::warning('Already Subscribed', 'You are already subscribed to our newsletter! If you are not getting emails, please confirm your subscription');;
            return redirect()->back();
        }else{
            $subscription = new Subscription();
            $subscription->email = $request->subscription;
            $subscription->verified = '0';

            if ($subscription->save()) {
                Alert::success('Subscribed', 'You have subscribed to our newsletter. Check your email to verify email address');;
                return redirect()->back();
            }
        }
    }


    // search jobs
    public function searchJob()
    {
        $search = $_GET['query'];
        if ($search == "") {
            toast('Please enter any text to search job', 'warning');
            return redirect()->back();
        }
        $results = Job::where('title', 'LIKE', '%'.$search.'%')->where('status', '1')->where('deadline', '>', now())->get();

        return view('home.search', compact('results', 'search'));

    }
}
