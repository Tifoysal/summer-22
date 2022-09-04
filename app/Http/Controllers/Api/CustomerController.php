<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function userList()
    {
        $users=User::all();

        return response()->json([
           'success'=>true,
           'message'=>'User data loaded from controller',
           'data'=>$users
        ]);

    }

    public function createUser(Request $request)
    {
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        return response()->json([
            'success'=>true,
            'message'=>'Customer Created.',
            'data'=>$user
        ]);

    }
}
