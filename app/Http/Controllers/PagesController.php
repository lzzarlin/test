<?php

namespace App\Http\Controllers;

use App\Models\Anli;
use App\Models\Category;
use App\Models\Message;
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
            $messages = Message::paginate(10);
            return view('pages.root', compact('messages'));
        }
        return redirect()->to('login');
    }

    // 站点主页
    public function index()
    {
        $products = Product::latest()->where('isRecommend', '=', '1')->take(4)->get();
        $anlis = Anli::latest()->where('isRecommend', '=', '1')->take(3)->get();
        $news = News::latest()->take(3)->get();

        return view('front.index', compact('news', 'anlis', 'products'));
    }

    // 产品首页
    public function product()
    {
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        $category = DB::table('categories')->where('slug', 'products')->first();
        $products = Product::paginate('6');
        return view('front.product_list', compact('products', 'category', 'categories'));
    }
    public function productList(Request $request, Category $category)
    {
        // 判断该栏目是否为产品栏目 不是 返回404
        if ($category->type != '1') {
            abort(404);
        }
        // 查询出所有产品栏目 非顶级栏目
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        // $category = DB::table('categories')->where('slug', 'molecular-sieve')->first();
        $products = Product::where('category_id', '=', $category->id)->paginate('6');

        return view('front.product_list', compact('products', 'category', 'categories'));
    }
    public function productShow(Request $request, Product $product)
    {
        // 相关案例
        $anlis = Anli::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();
        // 查询出所有产品栏目 非顶级栏目
        $categories = Category::where('type', '=', '1')->where('id', '!=', '1')->get();
        $category = Category::where('id', '=', $product->category_id)->first();
        // pre next
        $pre = Product::where('category_id', '=', $category->id)->where('id', '<', $product->id)->first();
        $next = Product::where('category_id', '=', $category->id)->where('id', '>', $product->id)->first();
        return view('front.product_show', compact('product', 'categories', 'category', 'pre', 'next', 'anlis', 'news'));
    }

    // 应用首页
    public function application()
    {
        $categories = Category::where('type', '=', '2')->where('id', '!=', '2')->get();
        $category = DB::table('categories')->where('slug', 'applications')->first();
        $anlis = Anli::paginate('6');
        return view('front.application_list', compact('anlis', 'category', 'categories'));
    }
    public function applicationList(Request $request, Category $category)
    {
        // 查询出所有案例栏目 非顶级栏目
        $categories = Category::where('type', '=', '2')->where('id', '!=', '2')->get();
        // $category = DB::table('categories')->where('slug', 'molecular-sieve')->first();
        $anlis = Anli::where('category_id', '=', $category->id)->paginate('6');

        return view('front.application_list', compact('anlis', 'category', 'categories'));
    }
    public function applicationShow(Request $request, Anli $anli)
    {
        // 相关产品
        $products = Product::latest()->take(3)->get();
        // 相关新闻
        $news = News::latest()->take(3)->get();
        // 查询出所有案例栏目 非顶级栏目
        $categories = Category::where('type', '=', '2')->where('id', '!=', '2')->get();
        $category = Category::where('id', '=', $anli->category_id)->first();
        // pre next
        $pre = Anli::where('category_id', '=', $category->id)->where('id', '<', $anli->id)->first();
        $next = Anli::where('category_id', '=', $category->id)->where('id', '>', $anli->id)->first();
        return view('front.application_show', compact('anli', 'categories', 'category', 'pre', 'next', 'products', 'news'));
    }

    // 新闻首页
    public function news()
    {
        $category = Category::where('id', '3')->first();
        $news = News::paginate(6);
        return view('front.news_list', compact('news', 'category'));
    }
    public function newsList(Request $request, Category $category)
    {
        // 查询出所有案例栏目 非顶级栏目
        $categories = Category::where('type', '=', '2')->where('id', '!=', '2')->get();
        // $category = DB::table('categories')->where('slug', 'molecular-sieve')->first();
        $news = News::where('category_id', '=', $category->id)->paginate('6');
        return view('front.news_list', compact('categories', 'news', 'category'));
    }
    public function newsShow(Request $request, News $news)
    {
        $categories = Category::where('type', '=', '3')->where('id', '!=', '3')->get();
        $category = Category::where('id', '=', $news->category_id)->first();
        // 相关新闻
        $relnews = News::where('category_id', '=', $category->id)->latest()->take(3)->get();
        $pre = News::where('category_id', '=', $category->id)->where('id', '<', $news->id)->first();
        $next = News::where('category_id', '=', $category->id)->where('id', '>', $news->id)->first();
        return view('front.news_show', compact('news', 'categories', 'pre', 'next', 'category', 'relnews'));
    }


    // 关于我们
    public function about()
    {
        $category = Category::where('slug', '=', 'about')->first();
        return view('front.about', compact('category'));
    }
    // 联系我们
    public function contact()
    {
        $category = Category::where('slug', '=', 'contact')->first();
        return view('front.contact', compact('category'));
    }
}
