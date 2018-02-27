<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
	/**
	 * home主页
	 */
    public function testHome(){
	    $user = factory(User::class)->create();
	    $response = $this->actingAs($user)
		    ->withSession(['name' => 'xingyuan'])
		    ->get('home');

	    $response->assertStatus(200);
    }
}
