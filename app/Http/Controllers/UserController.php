<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // basta pag matama credentials mo, mag direct sya na magpuna ka sa project dashboard (pero para sa akoa need pa ni ug retouch(?) idk)
            return redirect()->route('projectdashboard')->with('success', "Welcome, {$admin->username}!");
        }

        return redirect('/')->with('error', 'Invalid username or password.');
    }
}