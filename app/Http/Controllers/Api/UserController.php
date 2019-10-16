<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list()
    {
        $users = User::select(['id', 'username'])->orderBy('id', 'desc')->get();
        return json_encode($users);
    }

    public function add(Request $request)
    {
        $username = $request->username;
        $userpwd = encrypt($request->password);
        $user = new User(['username' => $username, 'userpwd' => $userpwd]);
        $ret = $user->save();
        if ($ret) {
            return ['code' => 1, 'msg' => 'ok', 'res' => $ret];
        } else {
            return ['code' => 0, 'msg' => 'error', 'res' => $ret];
        }
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $userpwd = encrypt($request->userpwd);
        return User::where('username', '=', $username)->get();
    }

    public function drawer(Request $request)
    {
        return json_encode([
            ['title' => '用户管理', 'icon' => 'person'],
            ['title' => '菜单管理', 'icon' => 'menu'],
            ['title' => '产品管理', 'icon' => 'product'],
        ]);
    }
}
