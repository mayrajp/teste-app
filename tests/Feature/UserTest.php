<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Factory as Faker;


class UserTest extends TestCase
{

    public function test_should_create_user(): void
    {
        $faker = Faker::create();

        $userData = [
            'name' => $faker->name(),
            'surname' => $faker->name(),
            'email' => $faker->email(),
            'password' => '1234',
            'cellphone' => $faker->phoneNumber(),
        ];

        $this->post(route('users.store'), $userData);

        $this->assertDatabaseHas('users', ['email' => $userData['email']]);
        $this->assertDatabaseHas('users', ['name' => $userData['name']]);
        $this->assertDatabaseHas('users', ['surname' => $userData['surname']]);
        $this->assertDatabaseHas('users', ['cellphone' => $userData['cellphone']]);
    }

    public function test_should_show_user(): void
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.show', $user->id));

        $response->assertStatus(200);
    }

    public function test_should_delete_user(): void
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user->id));

        $this->assertDatabaseMissing('users', ['email' => $user->email]);
    }
}
