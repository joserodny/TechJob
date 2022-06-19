<?php

use App\src\Domain\JobListing\Controller\JobListingsController;
use Illuminate\Support\Facades\Route;
Route::get('/', [JobListingsController::class, 'index']);
Route::prefix('listings')->controller(JobListingsController::class)->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/create', 'create');
        Route::post('/', 'store');
        Route::get('/{jobListing}/edit', 'edit');
        Route::put('/{jobListing}', 'update');
        Route::delete('/{jobListing}', 'destroy');
        Route::get('/manage', 'manage');
    });
    Route::get('/{jobListing}', 'show');
});
