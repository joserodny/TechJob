<?php

namespace App\src\Domain\JobListing\Controller;

use App\Http\Controllers\Controller;
use App\src\Domain\JobListing\Models\JobListing;
use App\src\Domain\JobListing\Requests\StoreListingRequest;
use App\src\Domain\JobListing\Requests\UpdateListingRequest;
use Illuminate\Http\Request;

class JobListingsController extends Controller
{
    public function index()
    {
        $joblistings = JobListing::select('id', 'location', 'title', 'tags', 'company')->latest()->limit(8)->filter(\request(['tag', 'search']))->paginate(8);

        return view('listings.index', ['joblistings' => $joblistings]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(StoreListingRequest $request)
    {
        $formStore = $request->validated();
        if ($request->hasFile('logo')) {
            $formStore['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $formStore['user_id'] = auth()->id();
        JobListing::create($formStore);

        return redirect('/')->with('message', 'Listing created successfully');
    }

    public function show(JobListing $jobListing)
    {
        return view('listings.show', ['jobListing' => $jobListing]);
    }

    public function edit(JobListing $jobListing)
    {
        return view('listings.edit', ['jobListing' => $jobListing]);
    }

    public function update(UpdateListingRequest $request, JobListing $jobListing)
    {
        if($jobListing->user_id != auth()->id()){
            abort(404, 'Unauthorized action');
        }
        $formUpdate = $request->validated();
        if ($request->hasFile('logo')) {
            $formUpdate['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $jobListing->update($formUpdate);

        return redirect('/')->with('message', 'Listing update successfully');
    }

    public function destroy(JobListing $jobListing)
    {
        if($jobListing->user_id != auth()->id()){
            abort(404, 'Unauthorized action');
        }
        $jobListing->delete();

        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    //custom function
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
