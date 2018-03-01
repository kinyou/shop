<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$header = [
    		'商品','客户','商品导入','商品导出','预约订单'
	    ];
    	$time = \Illuminate\Support\Carbon::createFromTimestamp(time());
        $menus = factory(\App\Models\Menu::class)
	        ->times(5)  //循环5次
	        ->make() //make只创建实例不入库, create会创建实例并入库
	        ->each(function ($menu,$index) use ($header,$time) { //循环创建的实例
	        	$menu->name = $header[$index];
	        	$menu->order = $index + 1;
	        	$menu->created_at = $time;
	        	$menu->updated_at = $time;
	        });

        \App\Models\Menu::insert($menus->toArray());
    }
}
