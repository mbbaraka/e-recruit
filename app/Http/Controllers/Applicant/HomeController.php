<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Particular;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $user = User::find($user);
        $particulars = Particular::where('user_id', $user->id)->first();
        return view('ors.applicant.index', compact('user', 'particulars'));
    }
}
