<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant\Particular;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Alert;

class ParticularsController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        return view('applicant.profile.index', compact('user', 'particulars'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find($id);
        $user->first_name = $request->f_name;
        $user->last_name = $request->l_name;
        $user->email = $request->email;

        $save = $user->save();

        if($save){
            $particulars = Particular::where('user_id', $id)->first();
            $particulars->phone = $request->phone;
            $particulars->date_of_birth = $request->dob;
            $particulars->address = $request->address;

            $save = $particulars->save();
            toast('Successfully updated your details', 'success');
            return redirect()->back();
        }
    }
}
