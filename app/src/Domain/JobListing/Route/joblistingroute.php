<?php

use Illuminate\Support\Facades\Route;
use App\src\Domain\JobListing\Controller\JobListingsController;

    Route::get('/', [JobListingsController::class, 'index']);

