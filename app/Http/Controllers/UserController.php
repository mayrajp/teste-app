<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $users = User::where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
                $query->orWhere('email', 'LIKE', '%' . $search . '%');
                $query->orWhere('cellphone', 'LIKE', '%' . $search . '%');
                $query->orWhere('surname', 'LIKE', '%' . $search . '%');
            }
        })->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show(int $id)
    {

        $user = User::find($id);

        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit(int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(UserRequest $request, int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        $data = $request->all();

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy(int $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
}
