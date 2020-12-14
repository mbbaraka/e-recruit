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
        return view('ors.applicant.profile.index', compact('user', 'particulars'));
    }

    public function update(Request $request, $id)
    {
        // dd(var_dump($request));
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        $save = $user->save();

        if($save){
            $particulars = Particular::where('user_id', $id)->first();
            $particulars->phone = $request->phone_number;
            $particulars->date_of_birth = $request->date_of_birth;
            $particulars->address = $request->address;

            $save = $particulars->save();
            toast('Successfully updated your details', 'success');
            return redirect()->back();
        }else{
            toast('Some error occured. Try again later', 'success');
            return redirect()->back();
        }
    }
}
