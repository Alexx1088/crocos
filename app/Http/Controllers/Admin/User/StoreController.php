<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $login_email = $data['email'];

         User::firstOrCreate(['email' => $data['email']], $data);

     //   return redirect()->route('admin.user.index');
        $users = User::all();
        foreach ($users as $user){
            if ($login_email === $user->email && $user->status === 2) {
                return redirect()->route('admin.user.index');
            }
           else {
               return redirect()->route('home');
           }
        }

    //  return redirect()->route('home');

    }
}
