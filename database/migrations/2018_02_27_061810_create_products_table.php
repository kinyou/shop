<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->comment('商品id');
            $table->string('name')->comment('商品名');
            $table->unsignedInteger('cost_price')->default(0)->comment('成本价格');
            $table->unsignedSmallInteger('channel')->comment('来源:1日本 2韩国 3美国 4法国 5其他');
            $table->string('exchange_rate')->default(0)->comment('汇率');
            $table->unsignedInteger('sell_price')->default(0)->comment('售价');
            $table->unsignedInteger('freight')->default(0)->comment('运费');
            $table->text('introduction')->comment('简介');
            $table->unsignedSmallInteger('status')->default(1)->comment('状态 1有货 2无货');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
