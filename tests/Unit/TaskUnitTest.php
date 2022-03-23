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
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserIdTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);   

        $this->assertEquals(1, $task->user_id);
    }

    public function testCreateEnglishTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);   

        $this->assertEquals('Reading Book', $task->description);
    }

    public function testCreateThaiTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "อ่านหนังสือ",
        ]);   

        $this->assertEquals('อ่านหนังสือ', $task->description);
    }

    public function testCreateNumberTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => 1,
        ]);   

        $this->assertEquals(1 , $task->description);
    }

    public function testEmpthyTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "",
        ]);   

        $this->assertEquals('', $task->description);
    }

    public function testNullTask()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => null,
        ]);   

        $this->assertEquals(null, $task->description);
    }

}