<?php

namespace Database\Seeders;

use App\Models\SiteConfig;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();
        \App\Models\Link::factory(5)->create();
        \App\Models\News::factory(30)->create();
        \App\Models\Anli::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = User::find(1);
        $user->name = '不羁的风';
        $user->email = 'lzzarlin@qq.com';
        $user->avatar = '/dist/img/000f.jpg';
        $user->password = bcrypt('meishang8');
        $user->save();

        // 创建站点配置
        SiteConfig::create([
            'sitename' => '网站名称',
            'keywords' => '站点关键词',
            'description' => '站点描述',
            'domain' => '网站域名',
            'logo' => 'LOGO',
            'email' => '63822013@qq.com',
            'phone' => '+8618955078288',
        ]);
    }
}
