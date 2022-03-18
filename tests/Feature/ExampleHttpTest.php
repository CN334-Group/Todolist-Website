<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ExampleHttpTest extends TestCase
{
    use WithFaker;

    public function testUserCreationEndpointTest()
    {
        $name = $this->faker->name();
        $email = $this->faker->email();
        $password = "mypassword";

        $response = $this->postJson('/api/createuser', [
            'name' => $name, 
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ]); 

        $response
            ->assertStatus(500)
            ->assertExactJson([
                'message' => "Successfully created user!",
            ]);
    }
}