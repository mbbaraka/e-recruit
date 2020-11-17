<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Home\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Application::where('user_id', Auth::user()->id )->get();
        return view('applicant.jobs.index', compact('jobs'));
    }
}
