<?php

use Illuminate\Support\Facades\Route;
use App\src\Domain\JobListing\Controller\JobListingsController;

Route::prefix('listings')->controller(JobListingsController::class)->group(function() {
    Route::get('/create',            'create');
    Route::post('/',                 'store');
    Route::get('/{jobListing}',      'show');
    Route::get('/{jobListing}/edit', 'edit');
    Route::put('/{jobListing}',      'update');
    Route::delete('/{jobListing}',   'destroy');
});
