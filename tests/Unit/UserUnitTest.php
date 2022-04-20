<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;

class UserUnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function Test_User_Creation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }

    public function Test_User_Thai_Name_Creation()
    {
        $user = new User([
            'name' => "ยูสเซอร์",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }

    public function Test_User_Thai_Password_Creation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("พาสเวิร์ด")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }

}