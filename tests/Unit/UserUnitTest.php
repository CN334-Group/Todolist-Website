<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Illuminate\Support\Str;

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

    public function Test_Thai_User_Creation()
    {
        $user = new User([
            'name' => "ยูสเซอร์",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals('ยูสเซอร์', $user->name);
    }

    public function Test_One_Hundred_String_Lenght_User_Creation()
    {
        $user = new User([
            'name' => Str::random(10),
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals(Str::random(10), $user->name);
    }

}