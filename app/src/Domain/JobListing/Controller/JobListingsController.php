<?php

namespace App\src\Domain\JobListing\Controller;

use App\Http\Controllers\Controller;
use \App\src\Domain\JobListing\Models\JobListing;
use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function index()
    {
        $joblisting = JobListing::get();
        return view('JobListing', ['joblisting' => $joblisting] );
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(JobListing $jobListing, $id)
    {
        $jobList = JobListing::find($id);
        return view('JobList', ['jobList' => $jobList]);
    }

    public function edit(JobListing $jobListing)
    {
        //
    }

    public function update(Request $request, JobListing $jobListing)
    {
        //
    }

    public function destroy(JobListing $jobListing)
    {
        //
    }
}
