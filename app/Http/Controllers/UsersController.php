<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(30);
        return view("admin.users.index", compact("users"));
    }

    public function create()
    {
        return view("admin.users.create");
    }

    public function store(Request $request, ImageUploadHandler $uploader)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($request->password);
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatar', '', 400);
            if ($result) {
                $user->avatar = $result['path'];
            }
        }
        $user->save();
        return redirect()->route("users.index")->with("success", "成功添加新用户");
    }

    public function edit(User $user)
    {
        return view("admin.users.edit", compact("user"));

    }

    public function update(Request $request, ImageUploadHandler $uploader, User $user)
    {
        // 如果前端输入密码为空，则不更新密码，否则加密后存储
        // dd($user);
        $data = $request->all();
        if ($request->password != null) {
            $data['password'] = bcrypt($request->password);
        }
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatar', 'avatar', 400);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }
        $data['password'] = $user->password;
        $user->fill($data);
        $user->save();
        return redirect()->route("users.index")->with("success", "更新资料成功");
        // if ($request->password != null) {
        //     $user->update($request->all());
        //     $result = $uploader->save($request->avatar, 'avatar', '', 400);
        //     if ($result) {
        //         $user->avatar = $result['path'];
        //         $user->save();
        //     }

        //     $user->password = bcrypt($request->password);
        //     $user->save(['password', $user->password]);

        //     return redirect()->route("users.index")->with("success", "更新资料成功");
        // }

        // if ($request->avatar) {
        //     $result = $uploader->save($request->avatar, 'avatar', '', 400);
        //     if ($result) {
        //         $data = $request->except('password');
        //         $user->avatar = $result['path'];
        //         $user->save();
        //     }
        // }
        // $user->update($data);

        // return redirect()->route("users.index")->with("success", "更新资料成功");
    }

}
