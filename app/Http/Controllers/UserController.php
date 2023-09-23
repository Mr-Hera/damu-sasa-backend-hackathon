<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Show user login form.
     */
    public function login()
    {
        return view('users.login');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show user registration form.
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // hash password
        $formData['password'] = bcrypt($formData['password']);

        // create user
        $user = User::create($formData);

        // login user
        auth()->login($user);

        return redirect('/')->with('message', 'User Created & Logged in Successfully!');
    }

    /**
     * Logout User.
     */
    public function logout(Request $request)
    {
        // remove authentication info
        auth()->logout();

        // invalidate session & regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect
        return redirect('/')->with('message', 'Logged Out Successfully!');
    }

    /**
     * login User.
     */
    public function authenticate(Request $request)
    {
        // validate
        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Log In Successful!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials!'])->onlyInput('email');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
