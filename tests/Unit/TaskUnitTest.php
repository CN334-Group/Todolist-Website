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

    public function test_user_id_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);

        $this->assertEquals(1, $task->user_id);
    }

    public function test_create_english_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "Reading Book",
        ]);

        $this->assertEquals('Reading Book', $task->description);
    }

    public function test_create_thai_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "อ่านหนังสือ",
        ]);

        $this->assertEquals('อ่านหนังสือ', $task->description);
    }

    public function test_create_number_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => 1,
        ]);

        $this->assertEquals(1 , $task->description);
    }

    public function test_empthy_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => "",
        ]);

        $this->assertEquals('', $task->description);
    }

    public function test_null_task()
    {
        $task = new Task([
            'user_id' => 1,
            'description' => null,
        ]);

        $this->assertEquals(null, $task->description);
    }

}

