<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $jobs = Job::all()->groupBy('featured');
        $jobs = Job::latest()->get()->groupBy('featured');
        return view('jobs.index', [
            'featuredJobs' => $jobs[0],
            'jobs' => $jobs[1]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request-> validate([
            'title' => ['required'],
            'salary'=> ['required', 'numeric'],
            'location'=>['required'],
            'schedule' => ['required', Rule::in('Part Time', 'Full Time')],
            'url'=>['required', 'url'],

        ]);

        $data['employer_id'] = $data['employer_id'] ?? 1;

        $newJob = Job::create($data);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show individual job details
        // Fetch job details using the ID
        $jobs = Job::findOrFail($id);

        // Pass the job details to the view
        return view('jobs.show', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
