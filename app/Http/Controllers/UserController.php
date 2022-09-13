<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(User $user)
    {
        return view('user.edit', compact('user'));

    }
}
