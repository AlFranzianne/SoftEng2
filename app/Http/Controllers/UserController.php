<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    $validUser = [
        'username' => 'admin',
        'password' => '123456'
    ];


    if (
        // meantime credentials kasi wala pa tayong database
        $credentials['username'] === $validUser['username'] &&
        $credentials['password'] === $validUser['password']
    ) {
        return "Welcome, {$credentials['username']}!";
    }

    return redirect('/')->with('error', 'Invalid username or password.');
}

}