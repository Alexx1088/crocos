<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{

    public function index(LoginRequest $request, User $user)
    {
               $data = $request->validated();

    $login_email = $data['email'];

             $users = User::all();

        foreach ($users as $user) {

 if ($user->email === $login_email){

   $logged_user = $user->status;

    if ($logged_user == 1){

       return view('user.edit', compact('user'));
   }
     if ($logged_user == 2){
         $users = User::all();

         $deleted_users = User::onlyTrashed()->get();

         return view('admin.user.index', compact('users', 'deleted_users'));
     }
   else {

       return view('user.notlogin');
   }

 }
        }

    }
}
