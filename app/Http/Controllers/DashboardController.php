<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
//        return view('home.home');
        $role = Auth::user()->role;
        if ($role == '0')
        {
            return view('admin.dashboard');
        }
        elseif ($role == '1')
        {
            return view('investor.dashboard');
        }
        else
        {
            return view('startup.dashboard');
        }

    }
}
