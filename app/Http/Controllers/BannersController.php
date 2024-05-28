<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banner::paginate(12);
        return view("admin.banners.index", compact("banners"));
    }

    public function create()
    {
        $categories = Category::all();
        return view("admin.banners.create", compact("categories"));
    }

    public function store(Request $request, ImageUploadHandler $uploader, Banner $banner)
    {
        $data = $request->all();
        if (request()->hasFile('url')) {
            $result = $uploader->save($request->url, 'Banner', 'banner', 1920);
            if ($result) {
                $data['url'] = $result['path'];
            }
        }
        $banner->fill($data);
        $banner->save();
        return redirect()->route('banners.index')->with('success', 'Banner添加成功！');
    }

    public function edit(Request $request, Banner $banner)
    {
        $categories = Category::all();
        return view("admin.banners.edit", compact("categories", "banner"));
    }

    public function update(Request $request, ImageUploadHandler $uploader, Banner $banner){
        $data = $request->all();
        if (request()->hasFile('url')) {
            $result = $uploader->save($request->url, 'Banner', 'banner', 1920);
            if ($result) {
                $data['url'] = $result['path'];
            }
        }
        $banner->fill($data);
        $banner->save();
        return redirect()->route('banners.index')->with('success', 'Banner编辑成功！');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success','banner已删除');
    }
}
