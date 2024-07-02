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
        if (!session("email")) {
            $title = "Users";
            return view("login", compact("title"));
        } else {
            return redirect()->to("dashboard");
        }

    }
    public function store(request $request)
    {
        $users = Users::where('email', $request->email)->first();
        if (sha1($request->password) == $users->password) {
            session(['email' =>  $users->email]);
            session(['nama' =>  $users->nama]);
            session(['level' =>  $users->id_level]);
            $request->session()->regenerate();
            return redirect()->intended(route("dashboard.index"));
        }

        return back();
    }
}
