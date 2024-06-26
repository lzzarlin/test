<?php

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
        Schema::create('anlis', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('category_id');
            $table->smallInteger('product_id');
            $table->smallInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumpic')->nullable();
            $table->boolean('isRecommend')->default(0);
            $table->string('keywords');
            $table->string('description');
            $table->longText('body')->nullable();
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
        Schema::dropIfExists('anlis');
    }
};
