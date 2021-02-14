<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant\Letter;
use App\Models\Applicant\Particular;
use Carbon\Carbon;
use App\User;
use Auth;

class LetterController extends Controller
{
    public function index()
    {
    	$user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $letters = Letter::where('user_id', Auth::user()->id)->get();
        return view('ors.applicant.letters.index', compact('letters', 'user', 'particulars'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'letter' => 'required|mimes:txt,pdf,doc',
        ]);

        $file = $request->file('letter');
         if (isset($file)) {
           $curentdate = Carbon::now()->toDateString();
                $document =  $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();


                $file->move(storage_path('app/public/letters'), $document);
         }else{
          $document = "letter.pdf";
         }

        $letter = new Letter();
        $letter->title = $request->title;
        $letter->description = $request->description;
        $letter->document = $document;
        $letter->user_id = Auth::user()->id;

        $save = $letter->save();

        if ($save) {
            toast('Successfully added new letter', 'success');
            return redirect()->back();
        }
    }
}
