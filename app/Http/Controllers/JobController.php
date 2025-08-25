<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Index - show all jobs in the database
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    //Create - show form to create a job
    public function create()
    {
        return view('jobs.create');
    }

    //Show - show single job
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    //Store - store new job in database
    public function store(){
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1 // hardcoded for now
        ]);

        return redirect('/jobs');
    }

    //Edit - show form to edit a job
    public function edit(Job $job){
        return view('jobs.edit', [
        'job' => $job
    ]);
    }

    //Update - update a job
    public function update(Job $job){
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
        
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect("/jobs/{$job->id}");
    }

    //Delete - delete an existing job
    public function destroy(Job $job){
        $job->delete();

        return redirect('/jobs');   
    }
}
