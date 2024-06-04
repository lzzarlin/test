<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('category_id');
            $table->smallInteger('user_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('keywords');
            $table->string('description');
            $table->boolean('isRecommend')->default(0);
            $table->string('price')->nullable();
            $table->string('package')->nullable();
            $table->string('application')->nullable();
            $table->string('thumpic')->nullable();
            $table->string('pic_one')->nullable();
            $table->string('pic_two')->nullable();
            $table->string('pic_three')->nullable();
            $table->string('pic_four')->nullable();
            $table->longText('body')->nullable();
            $table->timestamps();
        });

        Product::create([
            'user_id' => 1,
            'category_id'=> 1,
            'name'=> '测试产品',
            'slug'=> 'ceshi',
            'keywords' => '产品关键词',
            'description'=> '产品简介',
            'thumpic'=> '/dist/img/000f.jpg',
            'pic_one'=> '/dist/img/000f.jpg',
            'pic_two'=> '/dist/img/000f.jpg',
            'pic_three'=> '/dist/img/000f.jpg',
            'pic_four'=> '/dist/img/000f.jpg',
        ]);
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
};
