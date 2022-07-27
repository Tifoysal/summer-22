<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.master');
    }
    public function viewDashboard(){
        return view('backend.dashboard.dashboard');
    }

    public function login()
    {
        return view('backend.login');
    }

    public function doLogin(Request $request)
    {
        Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password,
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
