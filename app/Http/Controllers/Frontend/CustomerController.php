<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function registration()
    {
       return view('frontend.layouts.registration');
    }

    public function doRegistration(Request $request)
    {


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        return redirect()->route('home');
    }

    public function doLogin(Request $request)
    {

        $check=Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect()->route('home');
    }

    public function logout()
    {

        Auth::logout();

        return redirect()->route('home');

    }
}
