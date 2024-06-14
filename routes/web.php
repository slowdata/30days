<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', ['jobs' => Job::with('employer')->paginate(3)
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    dd(request()->all());
});

Route::get('/contact', function () {
    return view('contact');
});
