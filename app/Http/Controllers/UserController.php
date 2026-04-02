<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "password" => 'required|confirmed',
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('loginPage');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => 'required|email',
            "password" => 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('openForm');
        }
    }

    public function formPage(Request $request)
    {
        return view('addform');
    }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('loginPage');
    }
}
