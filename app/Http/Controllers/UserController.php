<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:10', 'max:25'],
            'email'=> ['required', 'email'],
            'password'=> ['required', 'min:8', 'max:20']
        ]);
        return 'Welcome Admin!';
    }
}
