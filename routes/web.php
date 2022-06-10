<?php

use Illuminate\Support\Facades\Route;
use App\src\Domain\JobListing\Controller\JobListingsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [JobListingsController::class, 'index']);
Route::get('/listings/{id}', [JobListingsController::class, 'show']);


