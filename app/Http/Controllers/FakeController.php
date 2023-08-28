<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Seeders\FakeUserSeeder;
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
        
        $users = User::all();

        if ($users->count() >= 100000) {

            return redirect()->route('fake.index')->with('success', '100.000 usuaerios ja foram criados.');
        }

        $seeder = new FakeUserSeeder();

        $seeder->run();

        $users = User::all();

        if ($users->count() >= 100000) {

            return redirect()->route('fake.index')->with('success', '100.000 usuários criados.');
        }

        return redirect()->route('fake.index')->with('success', '5.000 usuários criados.');
    }
}
