<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test  */
    public function users_database_has_expected_columns()
    {
        $this->assertTrue( 
          Schema:: hasColumns ('model', ['column\_1', 'column\_2']), 1);
    }
}
