<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Handlers\SlugTranslateHandler;
use App\Models\Anli;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AnlisController extends Controller
{
    public function index(Request $request)
    {
        // 获取所有案例栏目
        $categories = Category::where("type", '=', '2')->where("id", '!=', '2')->get();
        if (isset($request->category_id)) {
            $anlis = Anli::where('category_id', '=', $request->category_id)->orderBy('id', 'desc')->with('user', 'category')->paginate(10);
        } else {
            $anlis = Anli::orderBy('id', 'desc')->with('user', 'category')->paginate(10);
        }
        // dd($anlis->total());
        return view("admin.anlis.index", compact("anlis", 'categories'));
    }

    public function create()
    {
        $products = Product::orderBy("id", "desc")->get();
        $categories = Category::where("type", 2)->get();
        return view("admin.anlis.create", compact("categories", "products"));
    }

    public function store(Request $request, ImageUploadHandler $uploader, Anli $anli)
    {
        $data = $request->all();
        if (request()->hasFile('thumpic')) {
            $result = $uploader->save($request->thumpic, 'anli', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        $data['user_id'] = auth()->id();

        if (!$anli->slug) {
            $anli->slug = app(SlugTranslateHandler::class)->translate($request->title);
        }
        $data['slug'] = $anli->slug;
        $anli->fill($data);
        $anli->save();
        return redirect()->route("anlis.index")->with("success", "成功添加案例！");
    }

    public function edit(Request $request, Anli $anli)
    {
        $products = Product::orderBy("id", "desc")->get();
        $categories = Category::where("type", 2)->get();
        return view("admin.anlis.edit", compact("categories", "products", "anli"));
    }

    public function update(Request $request, ImageUploadHandler $uploader, Anli $anli)
    {
        $data = $request->all();
        if (request()->hasFile('thumpic')) {
            $result = $uploader->save($request->thumpic, 'anli', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        $anli->fill($data);
        $anli->save();

        return redirect()->route('anlis.index')->with('success', '成功更新案例！');
    }

    public function destroy($id)
    {
        $anli = Anli::findOrFail($id);
        $anli->delete();
        return redirect()->route('anlis.index')->with('success', '成功删除选定案例!');
    }
}
