<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Task;

class TaskUnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function Test_User_Id_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);   

        $this->assertEquals(1, $task->user_id);
    }

    public function Test_Create_English_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);   

        $this->assertEquals('Reading Book', $task->description);
    }

    public function Test_Create_Thai_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "อ่านหนังสือ",
        ]);   

        $this->assertEquals('อ่านหนังสือ', $task->description);
    }

    public function Test_Create_Number_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => 1,
        ]);   

        $this->assertEquals(1 , $task->description);
    }

    public function Test_Empthy_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "",
        ]);   

        $this->assertEquals('', $task->description);
    }

    public function Test_Null_Task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => null,
        ]);   

        $this->assertNotEquals("", $task->description);
    }

}