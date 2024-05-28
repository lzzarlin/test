<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Models\SiteConfig;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function edit(SiteConfig $siteconfig)
    {
        return view('admin.siteconfig.edit', compact('siteconfig'));
    }

    public function update(Request $request, ImageUploadHandler $uploader, SiteConfig $siteconfig)
    {
        // dd($request->logo);
        $data = $request->all();

        if ($request->logo) {
            $result = $uploader->save($request->logo, 'logo', '', 800);
            if ($result) {
                $data['logo'] = $result['path'];
            }
        }
        $siteconfig->update($data);
        return redirect()->route('siteconfig.edit', 1)->with('success', '站点设置更新成功'); 
    }
}
