<?php

namespace App\Http\Controllers;

use App\Handlers\SlugTranslateHandler;
use App\Models\Ask;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsksController extends Controller
{
    public function index()
    {
        $asks = Ask::paginate(10);
        return view("admin.asks.index", compact("asks"));
    }

    public function create()
    {
        $products = Product::all();
        return view("admin.asks.create", compact("products"));
    }
    public function store(Request $request, Ask $ask)
    {
        $ask->fill($request->all());
        if (!$ask->slug) {
            $ask->slug = app(SlugTranslateHandler::class)->translate($request->question);
        }
        $ask->user_id = Auth::id();
        $result = $ask->save();
        if ($result) {
            return redirect()->route("asks.index")->with("success", "添加成功！");
        } else {
            return redirect()->route("asks.index")->with("error", "添加不成功！");
        }
    }

    public function edit(Ask $ask)
    {
        $products = Product::all();
        return view("admin.asks.edit", compact("ask", "products"));
    }

    public function update(Request $request, Ask $ask)
    {
        $ask->fill($request->all());
        $result = $ask->save();
        if ($result) {
            return redirect()->route("asks.index")->with("success", "更新成功");
        } else {
            return redirect()->route("asks.index")->with("error", "更新失败");
        }

    }

    public function destroy(Ask $ask)
    {
        $ask->delete();
        return redirect()->route("asks.index")->with("success", "问答已删除");
    }
}
