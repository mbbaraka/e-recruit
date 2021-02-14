<?php

namespace App\ORS;


use App\Models\Admin\Notification;
use App\User;
use App\Models\Home\Job;
use Illuminate\Support\Facades\Facade;
use App\Models\Home\Application;
use Auth;

class Ors extends Facade
{
     //Achivement for descriptions
    public static function notification()
    {
        $notification = Notification::where('receiver_id', Auth::user()->id)->where('status', '0')->get()->count();

        return $notification;
    }

    public static function available_jobs()
    {
    	$jobs = Job::where('deadline', '>=', now())->latest()->get()->count();
    	return $jobs;
    }

    public static function applications($user)
    {
        $applications = Application::where('user_id', $user)->get()->count();
        return $applications;
    }
}
