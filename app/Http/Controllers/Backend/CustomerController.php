<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers=User::paginate(10);

        return view('backend.pages.customer.list',compact('customers'));
    }
}
