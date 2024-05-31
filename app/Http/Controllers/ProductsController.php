<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Handlers\SlugTranslateHandler;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        // 获取所有产品栏目
        $categories = Category::where("type", '=', '1')->where("id", '!=', '1')->get();
        if (isset($request->category_id)) {
            $products = Product::where('category_id', '=', $request->category_id)->orderBy('id', 'desc')->with('user', 'category')->paginate(6);
        } else {
            $products = Product::orderBy('id', 'desc')->with('user', 'category')->paginate(6);
        }

        return view('admin.products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        // 产品总类目
        $categories = Category::where('type', 1)->get();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
  
     */
    public function store(Request $request, ImageUploadHandler $uploader, Product $product)
    {
        // dd($request->logo);
        // $data = $request->all();
        // // dd($request->hasFile('thumpic'));
        $data = $request->all();

        if ($request->thumpic) {
            $result = $uploader->save($request->thumpic, 'product', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        if ($request->pic_one) {
            $result = $uploader->save($request->pic_one, 'product', '', 1000);
            if ($result) {
                $data['pic_one'] = $result['path'];
            }
        }
        if ($request->pic_two) {
            $result = $uploader->save($request->pic_two, 'productthump', '', 1000);
            if ($result) {
                $data['pic_two'] = $result['path'];
            }
        }
        if ($request->pic_three) {
            $result = $uploader->save($request->pic_three, 'productthump', '', 1000);
            if ($result) {
                $data['pic_three'] = $result['path'];
            }
        }
        if ($request->pic_four) {
            $result = $uploader->save($request->pic_four, 'productthump', '', 1000);
            if ($result) {
                $data['pic_four'] = $result['path'];
            }
        }
        if (!$product->slug) {
            $product->slug = app(SlugTranslateHandler::class)->translate($request->title);
        }
        $data['slug'] = $product->slug;
        $product->fill($data);
        $product->user_id = Auth::id();
        $product->save();

        return redirect()->route('products.index')->with('success', '产品添加成功');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('type', 1)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, ImageUploadHandler $uploader, Product $product)
    {
        $data = $request->all();
        if ($request->thumpic) {
            $result = $uploader->save($request->thumpic, 'product', '', 300);
            if ($result) {
                $data['thumpic'] = $result['path'];
            }
        }
        if ($request->pic_one) {
            $result = $uploader->save($request->pic_one, 'product', '', 1000);
            if ($result) {
                $data['pic_one'] = $result['path'];
            }
        }
        if ($request->pic_two) {
            $result = $uploader->save($request->pic_two, 'productthump', '', 1000);
            if ($result) {
                $data['pic_two'] = $result['path'];
            }
        }
        if ($request->pic_three) {
            $result = $uploader->save($request->pic_three, 'productthump', '', 1000);
            if ($result) {
                $data['pic_three'] = $result['path'];
            }
        }
        if ($request->pic_four) {
            $result = $uploader->save($request->pic_four, 'productthump', '', 1000);
            if ($result) {
                $data['pic_four'] = $result['path'];
            }
        }

        $product->fill($data);
        $product->update();
        return redirect()->route('products.index')->with('success', '产品编辑成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', '已成功删除');
    }

    // 富文本编辑器上传文件 simditor
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success' => false,
            'msg' => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file, 'article', Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg'] = "上传成功!";
                $data['success'] = true;
            }
        }
        return $data;
    }

    // 富文本编辑器上传文件 Ueditor
    public function upload_Image(Request $request, ImageUploadHandler $uploader)
    {
        $data = [
            'code' => 200,
            'url' => '',
        ];

        if ($file = $request->file('file')) {
            // 保存图片到本地
            $result = $uploader->save($file, 'article', Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['code'] = 200;
                $data['url'] = $result['path'];
            }
        }
        return $data;
    }
}
