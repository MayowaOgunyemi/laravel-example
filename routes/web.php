<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Software Engineer',
                'salary' => '100,000',
            ],
            [
                'title' => 'Data Scientist',
                'salary' => '120,000',
            ],
            [
                'title' => 'Product Manager',
                'salary' => '110,000',
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
