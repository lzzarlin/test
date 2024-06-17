<?php

namespace App\Http\Controllers;

use App\Models\Anli;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Cache;

class SitemapController extends Controller
{
    public function siteMap()
    {
        // // 需要缓存的写法
        // $view = Cache::remember('front.sitemap', 600, function () {
        //     $products = Product::all(); 
        //     $anlis = Anli::all();
        //     $news = News::all();
        //     // return generated xml (string) , cache whole file
        //     return view('front.sitemap', compact('products', 'anlis', 'news'))->render();
        // });
        $products = Product::all();
        $anlis = Anli::all();
        $news = News::all();
        // return generated xml (string) , cache whole file
        $view = view('front.sitemap', compact('products', 'anlis', 'news'))->render();
        return response($view)->header('Content-Type', 'text/xml');
    }
}
