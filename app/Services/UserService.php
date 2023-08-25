<?php

namespace App\Services;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function index() : Collection
    {
        return User::all();
    }

    public function show(int $id) : User
    {
        return User::find($id);
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        return User::create($data);
    }
}