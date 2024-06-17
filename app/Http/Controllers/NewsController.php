<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Handlers\SlugTranslateHandler;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $news = News::with('user')->orderBy("id", "desc")->paginate(10);
        return view("admin.news.index", compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::where('type', '3')->where('id','!=','3')->orderBy('id', 'desc')->get();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request, ImageUploadHandler $uploader, News $news)
    {
        $data = $request->all();
        if (request()->hasFile('thumpic')) {
            $result = $uploader->save($request->thumpic, 'news', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        $data['user_id'] = auth()->id();

        if (!$news->slug) {
            $news->slug = app(SlugTranslateHandler::class)->translate($request->title);
        }
        $data['slug'] = $news->slug;
        $news->fill($data);
        $news->save();
        return redirect()->route('news.index')->with('success', '新闻添加成功！');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Request $request, News $news)
    {
        $categories = Category::where('type', '3')->get();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, ImageUploadHandler $uploader, News $news)
    {
        $data = $request->all();
        if (request()->hasFile('thumpic')) {
            $result = $uploader->save($request->thumpic, 'news', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        
        $news->fill($data);
        $news->save();
        return redirect()->route('news.index')->with('success','编辑成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.index')->with('success','新闻已删除');
    }
}
