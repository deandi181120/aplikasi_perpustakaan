<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = "Users";
        return view("login", compact("title"));
    }
    public function store(request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = $request->only("email", "password");
        $users = Users::where('email', $credentials['email'])->first();
        if (password_verify($credentials['password'], $users->password)) {
            session(['email' =>  $users->email]);
            session(['nama' =>  $users->nama]);
            session(['level' =>  $users->id_level]);
            $request->session()->regenerate();
            return redirect()->intended(route("dashboard.index"));
        }

        return back();
    }
}
