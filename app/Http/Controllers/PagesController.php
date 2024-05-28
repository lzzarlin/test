<?php

namespace App\Http\Controllers;

use App\Models\Anli;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // 网站后台主页
    public function root()
    {
        if (auth()->check()) {
            return view('pages.root');
        }
        return redirect()->to('login');
    }

    // 站点主页
    public function index()
    {

        return view('front.index');
    }

    // 产品首页
    public function product()
    {
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        $category = DB::table('categories')->where('slug', 'product')->first();
        $products = Product::paginate('6');
        return view('front.product_list', compact('products', 'category', 'categories'));
    }
    public function productList(Request $request, Category $category)
    {
        // 查询出所有产品栏目 非顶级栏目
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        // dd($category);
        // $category = DB::table('categories')->where('slug', 'molecular-sieve')->first();
        $products = Product::where('category_id', '=', $category->id)->paginate('6');

        return view('front.product_list', compact('products', 'category', 'categories'));
    }
    public function productShow(Request $request, Product $product)
    {
        // 相关案例
        $anlis = Anli::latest()->take(6)->get();
        // 查询出所有产品栏目 非顶级栏目
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        $category = Category::where('id', '=', $product->category_id)->first();
        // pre next
        $pre = Product::where('category_id', '=', $category->id)->where('id', '<', $product->id)->first();
        $next = Product::where('category_id', '=', $category->id)->where('id', '>', $product->id)->first();
        return view('front.product_show', compact('product', 'categories', 'category', 'pre', 'next', 'anlis'));
    }

    // 新闻首页
    public function news()
    {
        return view('front.news_list');
    }
    public function newsShow(Request $request, News $news)
    {
        return view('front.news_show', compact('news'));
    }


    // 关于我们
    public function about()
    {
        return view('front.about');
    }
    // 联系我们
    public function contact()
    {
        return view('front.contact');
    }
}
