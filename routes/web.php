<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

//Homepage
Route::get('/', function () {
    return view('home');
});

//Index - show all jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Create - show form to create a job
Route::get('jobs/create', function () {
    return view('jobs.create');
});

//Show - show single job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job
    ]);
});

//Store - store new job
Route::post('/jobs', function () {
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
});

//Edit - show form to edit a job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', [
        'job' => $job
    ]);
});

//Update - update a job
Route::patch('/jobs/{id}', function ($id) {
     request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required'
    ]);
    
    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect("/jobs/{$job->id}");
});

//Delete - delete a job
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

//Contact page
Route::get('/contact', function () {
    return view('contact');
});

