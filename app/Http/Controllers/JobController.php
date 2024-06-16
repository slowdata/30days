<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(Request $request): View
    {
        return view('jobs.index', ['jobs' => Job::with('employer')->latest()->simplePaginate()
        ]);
    }

    public function show(Job $job): View
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create(Request $request): View
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        // validation ...
        $request->validate([
            'title' => 'required|min:3|max:255',
            'salary' => 'required'
        ]);

        Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    public function edit(Job $job): View
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job, Request $request): RedirectResponse
    {
        // validate (On hold... after learning authentication)
        request()->validate([
            'title' => 'required|min:3|max:255',
            'salary' => 'required'
        ]);


        //    $job->title = request('title');
        //    $job->salary = request('salary');
        //    $job->save();
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect("/jobs/$job->id");
    }


    public function destroy(Job $job): RedirectResponse
    {
        // validate (On hold... after learning authentication)

        $job->delete();
        return redirect('/jobs');
    }
}
