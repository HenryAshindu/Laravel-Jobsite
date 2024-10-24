<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $query = request("q");
    
        // Check if query is provided
        if ($query) {
            $jobs = Job::where("title", "LIKE", "%" . $query . "%")->get();
        } else {
            // Fetch all jobs if no query is provided
            $jobs = Job::all();
        }
    
        return view("results", ['jobs' => $jobs]);
    }
    
}
