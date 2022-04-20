<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function userNameVerify()
    {
        $user = new User();

        $user->setName(null);
        $this->assertFalse($user->validate(['username']));

        $user->setName('testmail');
        $this->assertFalse($user->validate(['username']));

        $user->setName('usernametest');
        $this->assertTrue($user->validate(['username']));
    }

    public function test_user_creation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);

        $this->assertEquals('Test User', $user->name);
    }

    public function test_user_thai_name_creation()
    {
        $user = new User([
            'name' => "ยูสเซอร์",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);

        $this->assertEquals('Test User', $user->name);
    }

    public function test_user_thai_password_creation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("พาสเวิร์ด")
        ]);

        $this->assertEquals('Test User', $user->name);
    }
}
