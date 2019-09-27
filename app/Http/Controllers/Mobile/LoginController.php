<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('mobile.login');
    }

    public function check_login(Request $request)
    {
        $username = $request->username;
        $entity = User::where('username','=',$username)->firstOrFail();
        $depwd = decrypt($entity->value('userpwd'));
        if ($request['userpwd']==$depwd){
            $cookie = cookie('user',$entity,60*24);
            return response(['state'=>1,'msg'=>'登录成功！'])->withCookie($cookie);
        }
        else{
            return ['state'=>0,'msg'=>'用户名或密码错误！'];
        }
    }
}
