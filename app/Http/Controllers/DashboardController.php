<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index Dashboard Controller
    public function index()
    {
        $title = "Dashboard";
        return view("dashboard.index", compact("title"));
    }
}
