<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserInfo extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }



  public function testUserInfo()
{

   $this->get('/api/user/get_info/name', ['name' => 'John Doe'])
             ->seeJson([
                 'updated' => true,
             ]);
    }


}






}
