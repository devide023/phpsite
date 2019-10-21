<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\User_role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    //
    public function list(Request $request)
    {
        $query = User::query();
        $query->when($request->keywords, function (Builder $q) use ($request) {
            return $q->where('username', 'like', '%' . $request->keywords . '%');
        });
        $query->when($request->tel, function (Builder $q) use ($request) {
            return $q->where('tel', 'like', '%' . $request->tel . '%')->orWhere('phone', 'like', '%' . $request->tel . '%');
        });
        $query->when($request->usercode, function (Builder $q) use ($request) {
            return $q->where('usercode', 'like', '%' . $request->usercode . '%');
        });
        $query->when($request->address, function (Builder $q) use ($request) {
            return $q->where('address', 'like', '%' . $request->address . '%');
        });
        $query->when($request->ksrq != null && $request->jsrq != null, function (Builder $q) use ($request) {
            return $q->whereDate('birthdate', '>=', $request->ksrq)->whereDate('birthdate', '<=', $request->jsrq);
        });
        $list = $query->get();
        return json_encode($list);
    }

    public function add(Request $request)
    {
        try {
            $request['userpwd'] = encrypt($request->userpwd);
            $user = new User($request->all());
            $ret = $user->save();
            if ($ret != null) {
                return json_encode(['code' => 1, 'msg' => '数据保存成功', 'userinfo' => $user]);
            } else {
                return json_encode(['code' => 0, 'msg' => '数据保存失败']);
            }
        } catch (Exception $e) {
            return json_encode(['code' => 0, 'msg' => $e->getMessage()]);
        }
    }

    public function add_user_role(Request $request)
    {
        try {
            $data = array();
            foreach ($request->roleids as $roleid) {
                array_push($data, new User_role(['roleid' => $roleid]));
            }
            //dd($data);
            $user = User::find($request->userid);
            $ret = $user->userroles()->saveMany($data);
            if ($ret != null) {
                return json_encode(['code' => 1, 'msg' => '数据保存成功']);
            } else {
                return json_encode(['code' => 0, 'msg' => '数据保存失败']);
            }
        } catch (Exception $e) {
            throw  $e;
        }

    }

    public function login(Request $request)
    {
        $usercode = $request->usercode;
        $user = User::where('usercode', '=', $usercode)->firstOrFail();
        if ($user != null) {
            $depwd = decrypt($user->userpwd);
            if ($depwd == $request->userpwd) {
                return json_encode(['code' => 1, 'msg' => '登录成功', 'user' => $user]);
            } else {
                return json_encode(['code' => 0, 'msg' => '登录失败,用户名或密码错误', 'user' => null]);
            }
        } else {
            return json_encode(['code' => 0, 'msg' => '登录失败,用户名错误', 'user' => null]);
        }
    }

    public function drawer(Request $request)
    {
        return json_encode([['title' => '用户管理', 'icon' => 'person'], ['title' => '菜单管理', 'icon' => 'menu'], ['title' => '产品管理', 'icon' => 'product'],]);
    }
}
