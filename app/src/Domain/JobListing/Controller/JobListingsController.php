<?php

namespace App\src\Domain\JobListing\Controller;

use App\Http\Controllers\Controller;
use \App\src\Domain\JobListing\Models\JobListing;
use App\src\Domain\JobListing\Requests\StoreListingRequest;
use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function index()
    {
        $joblistings = JobListing::latest()->limit(8)->filter(\request(['tag', 'search']))->get();
        return view('listings.index', ['joblistings' => $joblistings] );
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(StoreListingRequest $request)
    {
        $formStore = $request->validated();
        JobListing::create($formStore);
        return redirect('/');
    }

    public function show(JobListing $jobListing)
    {
        return view('listings.show', ['jobListing' => $jobListing]);
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
