<?php

namespace App\src\Domain\JobListing\Controller;

use App\Http\Controllers\Controller;
use App\src\Domain\JobListing\Models\JobListing;
use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function index()
    {
       return view('welcome');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(JobListing $jobListing)
    {
        //
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
