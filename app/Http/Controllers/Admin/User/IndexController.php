<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Filters\UserFilter;
use App\Http\Requests\UserRequest;
use App\Models\User;

class IndexController extends Controller
{

    public function __invoke(UserRequest $request)
    {

  $users = User::all();

  $data = $request->validated();

        $filter = app()->make(UserFilter::class, ['queryParams' => array_filter($data)]);

        $users_searches = User::filter($filter)->paginate(100);

        return view('admin.user.index', compact('users', 'users_searches',
        'data' ));
    }
}
