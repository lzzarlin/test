<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('parent_id')->nullable(); // 上级栏目名称
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type'); // 栏目类型 1 产品 2 应用案例 3 新闻
            $table->string('keywords');
            $table->string('description');
        });
        // 创建站点配置
        Category::create([
            // 'parant_id' => 'null',
            'name' => '产品列表',
            'slug' => 'product',
            'type' => '1',
            'keywords' => '产品,产品名称',
            'description' => '这是一个产品栏目的介绍',
        ]);
        Category::create([
            // 'parant_id' => 'null',
            'name' => '案例列表',
            'slug' => 'cases',
            'type' => '2',
            'keywords' => '产品,产品名称',
            'description' => '这是一个产品栏目的介绍',
        ]);
        Category::create([
            // 'parant_id' => 'null',
            'name' => '新闻列表',
            'slug' => 'news',
            'type' => '3',
            'keywords' => '产品,产品名称',
            'description' => '这是一个产品栏目的介绍',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
