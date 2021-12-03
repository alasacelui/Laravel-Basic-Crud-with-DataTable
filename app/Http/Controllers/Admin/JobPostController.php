<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function index()
    {
        $job_posts = JobPost::all(); // get all job post and display to the index page

        return view('admin.jobpost.index', compact('job_posts'));
    }

    public function create()
    {
        return view('admin.jobpost.create');
    }

    public function store(Request $request)
    {
        $validated_inputs = $request->validate(['title' => 'required', 'description' => 'required']); // input validation

        JobPost::create($validated_inputs);

        return back()->with('message', 'Job Post Added Successfully');
    }

    public function edit(JobPost $jobpost)
    {
        return view('admin.jobpost.edit', compact('jobpost'));
    }

    public function update(Request $request , JobPost $jobpost)
    {
        $validated_inputs = $request->validate(['title' => 'required', 'description' => 'required']); // input validation

        $jobpost->update($validated_inputs);

        return back()->with('message', 'Job Post Updated Successfully');

    }

    public function destroy(JobPost $jobpost)
    {
        $jobpost->delete();

        return back()->with('message', 'Job Post Deleted Successfully');
    }
}
