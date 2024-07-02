<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index Dashboard Controller
    public function index()
    {
        if (session("email")) {
            $title = "Dashboard";
            return view("dashboard.index", compact("title"));
        } else {
            return redirect()->to("login");
        }
    }

    public function logout()
    {
        session(["email" => null]);
        session(['nama' =>  null]);
        session(['level' =>  null]);
        return redirect()->to("login");
    }
}
