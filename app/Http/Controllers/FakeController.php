<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FakeController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('users.fake', [
            'users' => $users
        ]);
    }

    public function generate()
    {
        
    }
}
