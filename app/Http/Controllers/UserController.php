<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.login');
    }

    public function create()
    {
        return view('users.register');
    }

    public function store(RegisterFormRequest $request)
    {
        $formFields = $request->validated();
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

}