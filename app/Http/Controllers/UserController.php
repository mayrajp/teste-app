<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->index();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show(int $id)
    {

        $user = $this->userService->show($id);

        if($user->count() == 0)
        {
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
        $this->userService->store($request);

        return redirect()->route('users.index');
    }
}
