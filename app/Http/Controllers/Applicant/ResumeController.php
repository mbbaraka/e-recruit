<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Applicant\Resume;
use App\Http\Controllers\Controller;
use App\Models\Applicant\Education;
use App\Models\Applicant\Experience;
use App\Models\Applicant\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Applicant\Particular;
use Alert;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::where('user_id', Auth::user()->id)->get();
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        return view('ors.applicant.resume.index', compact(
            'resumes', 'user', 'particulars'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'resume' => 'required|unique:resumes,title',
        ]);

        $resume = new Resume();
        $resume->user_id = Auth::user()->id;
        $resume->title = $request->resume;

        $save = $resume->save();

        if($save){
            // Alert Alert
            toast('Successfully created a resume', 'success');
            return redirect()->back();
        }
    }

    public function view($id)
    {
        $user = User::find(Auth::user()->id);
        $particulars = Particular::where('user_id', $user->id)->first();
        $resume = Resume::find($id);
        $experiences = Experience::where('user_id', Auth::user()->id)->where('resume_id', $id)->get();
        $educations = Education::where('user_id', Auth::user()->id)->where('resume_id', $id)->get();
        $skills = Skills::where('user_id', Auth::user()->id)->where('resume_id', $id)->get();
        return view('ors.applicant.resume.view', compact(
            'resume', 'educations', 'experiences', 'skills', 'user', 'particulars'
        ));
    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $delete = $resume->delete();

        if($delete){
            toast('Successfully deleted the resume', 'success');
            return redirect()->back();
        }
    }


    // Education level attained

    public function storeEducation(Request $request, $id)
    {
        $this->validate($request, [
            'level' => 'required',
            'attain' => 'required',
            'school' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education->resume_id = $id;
        $education->level = $request->level;
        $education->attained = $request->attain;
        $education->school = $request->school;
        $education->from = $request->from;
        $education->description  = $request->description;
        $education->to = $request->to;

        $save= $education->save();

        if($save){
            toast('Successfully added education level', 'success');
            return redirect()->back();
        }
    }


    // Experience level attained

    public function storeExperience(Request $request, $id)
    {
        $this->validate($request, [
            'workplace' => 'required',
            'title' => 'required',
            'from' => 'required',
            'to' => 'required',
            'description' => 'min:30',
        ]);

        $experience = new Experience();
        $experience->user_id = Auth::user()->id;
        $experience->resume_id = $id;
        $experience->title = $request->title;
        $experience->company = $request->workplace;
        $experience->from = $request->from;
        $experience->description  = $request->description;
        $experience->to = $request->to;

        $save= $experience->save();

        if($save){
            toast('Successfully added work experience', 'success');
            return redirect()->back();
        }
    }

    // Professional Skills

    public function storeSkill(Request $request, $id)
    {
        $this->validate($request, [
            'skill' => 'required',
            'level' => 'required|numeric',
            'description' => 'min:30',
        ]);

        $skill = new Skills();
        $skill->user_id = Auth::user()->id;
        $skill->resume_id = $id;
        $skill->skill = $request->skill;
        $skill->level = $request->level;
        $skill->description  = $request->description;

        $save= $skill->save();

        if($save){
            toast('Successfully added professional skill', 'success');
            return redirect()->back();
        }
    }
}
