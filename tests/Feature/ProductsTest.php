<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
	/**
	 * 商品列表
	 */
    public function testProductIndex(){
	    $user = factory(User::class)->create();
    	$response = $this->actingAs($user)->withSession(['name'=>'xingyuan'])->get('products');

    	$response->assertSee('商品列表');
    }
}
