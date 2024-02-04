<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);        
    }

    function test_unexist() {
        $response = $this->get('/update');
        $response->assertStatus(404);
    }

    function test_user_duplication() {
        $user1 = User::make([
            'name' => 'Diego',
            'email' => 'diego@me.com'
        ]);
        $user2 = User::make([
            'name' => 'Gyro',
            'email' => 'gyro@me.com'
        ]);
        $this->assertTrue($user1->name != $user2->name);
        $this->assertTrue($user1->email != $user2->email);
    }

    function test_delete_user() {
        $user = User::make([
            'name' => 'test',
            'email' => 'test@me.com'
        ]);
        $user->delete();
        $this->assertTrue(true);
    }
}
