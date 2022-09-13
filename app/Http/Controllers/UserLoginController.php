<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{

    public function index()
    {

        return view('user.login1');
    }
}
