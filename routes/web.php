<?php


use App\Http\Controllers\GithubsController;
use App\Http\Controllers\UserController;
// use App\src\Domain\JobListing\Controller\JobListingsController;
use Illuminate\Support\Facades\Route;


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


//routes::resource('listings', JobListingsController::class);
// socialite

Route::controller(GithubsController::class)->group(function(){
    Route::get('/github', 'redirectGithub')->name('git');
    Route::get('/auth/github/callback', 'GithubCallBack');
});



//user Register
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::get('/register', [UserController::class, 'create']);
});

Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'destroy']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


