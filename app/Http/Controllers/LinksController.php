<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('admin.links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.links.create');
    }

    public function store(Request $request, Link $link)
    {
        $link->create($request->all());
        return redirect()->route('links.index')->with('success', '成功添加链接');
    }

    public function edit(Link $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $link->update($request->all());
        return redirect()->route('links.index')->with('success', '链接信息更新成功');
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('links.index')->with('success', '链接删除成功');
    }
}
