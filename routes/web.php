<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

//Homepage: using the view helper function
Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

//Resource controller - creates all the above routes automatically and follows RESTful conventions giving standard names to routes
//It also accepts an array as third argument for options like except or only, etc.
Route::resource('jobs', JobController::class);

//Contact page: using the view helper function
Route::view('/contact', 'contact');

