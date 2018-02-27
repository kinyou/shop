<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
	    'cost_price'=>$faker->numberBetween(100,1000),
	    'channel'=>$faker->randomElement([1,2,3,4,5]),
	    'exchange_rate'=>$faker->randomElement(['0.62','0.52','0.72']),
	    'sell_price'=>$faker->numberBetween(1001,10000),
	    'freight'=>$faker->randomElement([8,10,22]),
	    'introduction'=>$faker->text(50),
	    'status'=>$faker->randomElement([1,2])
    ];
});
