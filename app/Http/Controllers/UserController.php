<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    // meantime credentials kasi wala pa tayong database
    $validUser = [
        'username' => 'admin',
        'password' => '123456'
    ];


    if (
        $credentials['username'] === $validUser['username'] &&
        $credentials['password'] === $validUser['password']
    ) {
        return "Welcome, {$credentials['username']}!";
    }

    return redirect('/')->with('error', 'Invalid username or password.');
}

}