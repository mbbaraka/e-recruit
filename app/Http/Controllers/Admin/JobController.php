<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home\Application;
use App\Models\Home\Category;
use App\Models\Home\Job;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;

class JobController extends Controller
{
    public function index()
    {
        $jobcount = Job::get();
        $jobs = Job::paginate(6);
        $applications = Application::get()->count();
        $active_jobs = $jobcount->where('status', 1)->count();
        return view('admin.jobs.index', compact('jobs', 'active_jobs', 'jobcount', 'applications'));
    }

    public function new()
    {
        $categories = Category::get();
        return view('admin.jobs.new', compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::get();
        $job = Job::find($id);
        return view('admin.jobs.edit', compact('categories', 'job'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'type' => 'required',
            'category' => 'required',
            'document' => 'nullable|mimes:txt,pdf,doc',
            'qualification' => 'required',
            'experience' => 'required',
        ]);

        $file = $request->file('document');
         if (isset($file)) {
           $curentdate = Carbon::now()->toDateString();
                $document =  $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();


                $file->move(storage_path('app/public/documents'), $document);
         }else{
          $document = "default.pdf";
         }

        $job = new Job();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->job_type = $request->type;
        $job->deadline = $request->deadline;
        $job->experience = $request->experience;
        $job->qualification = $request->qualification;
        $job->status = $request->status;
        $job->vacancies = $request->vacancies;
        $job->document = $document;
        $job->salary_range = $request->salary_range;
        $job->location = $request->location;
        $job->status = $request->status;

        $save = $job->save();

        if ($save) {
            if ($request->category > 0) {
               $job->category()->sync($request->input('category',[]));
              }
            toast('Successfully added new job', 'success');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'type' => 'required',
            'category' => 'required',
            'document' => 'nullable|mimes:txt,pdf,doc',
            'qualification' => 'required',
            'experience' => 'required',
        ]);

        $job = Job::findOrFail($id);

        $file = $request->file('document');
         if (isset($file)) {
           $curentdate = Carbon::now()->toDateString();
                $document =  $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (file_exists('app/public/documents/'.$job->document)) {
                    unlink('app/public/documents/'.$job->document);
                }
                $file->move(storage_path('app/public/documents'), $document);
         }else{
          $document = $job->document;
         }

        $job->title = $request->title;
        $job->description = $request->description;
        $job->job_type = $request->type;
        $job->deadline = $request->deadline;
        $job->experience = $request->experience;
        $job->qualification = $request->qualification;
        $job->status = $request->status;
        $job->vacancies = $request->vacancies;
        $job->document = $document;
        $job->salary_range = $request->salary_range;
        $job->location = $request->location;
        $job->status = $request->status;

        $save = $job->save();

        if ($save) {
            if ($request->category > 0) {
               $job->category()->sync($request->input('category',[]));
              }
            toast('Successfully updated job details', 'success');
            return redirect()->route('admin.jobs.index');
        }
    }

    public function destroy($id)
    {
        $job = Job::find($id);

        $delete = $job->delete();

        if($delete){
            toast('Successfully deleted job', 'success');
            return redirect()->back();
        }
    }
}
