<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    function test_user_cant_create() {
        $response = $this->post('/register',[
            'name' => 'test',
            'email' => 'test@me.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
            'role' => 'member'
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' =>'test@me.com'
        ]);

        $user = User::where('email', 'test@me.com')->first();
        $this->actingAs($user);

        $response2 = $this->get('/create');
        $response2->assertStatus(403);
    }

    function test_admin_can_create() {
        $response = $this->post('/register',[
            'name' => 'admintest',
            'email' => 'admintest@me.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
            'role' => 'admin'
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' =>'admintest@me.com'
        ]);
        $this->assertDatabaseMissing('users',[
            'email' => 'membertest@me.com',
        ]);

        $user = User::where('email', 'admintest@me.com')->first();
        $this->actingAs($user);

        $response2 = $this->get('/create');
        $response2->assertStatus(200);
    }
}
