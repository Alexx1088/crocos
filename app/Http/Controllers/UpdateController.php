<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{

    public function update(UpdateRequest $request, User $user)
    {

         $data = $request->validated();

        $user->update($data);

        return view('user.editsuccess');

    }
}
