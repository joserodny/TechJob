<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
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

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
           'email' => ['required', 'email'],
           'password' => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerateToken();
            return redirect('/')->with('message', 'You are now logged in!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}
