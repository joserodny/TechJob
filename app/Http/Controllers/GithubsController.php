<?php

namespace App\Http\Controllers;

use App\Models\Github;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubsController extends Controller
{
    public function redirectGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function GithubCallBack()
    {
        $githubUser  = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'provider_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
