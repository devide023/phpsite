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
        $pagesize = $request->per_page;
        $pageindex = $request->page;
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
        $list = $query->select(['id', 'usercode', 'username', 'sex', 'tel', 'phone', 'address', 'birthdate', 'status', 'headimg'])->orderByDesc('id');
        $list = $list->paginate($pagesize);

        if ($list) {
            return json_encode(['code' => 1, 'msg' => 'ok', 'list' => $list]);
        } else {
            return json_encode(['code' => 0, 'msg' => '错误', 'list' => null]);
        }

    }

    public function add(Request $request)
    {
        try {
            $request['userpwd'] = encrypt($request->userpwd);
            $request['addtime'] = now();
            $user = new User($request->all());
            $ret = $user->saveOrFail();
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
        $user = User::where('usercode', '=', $usercode)->first();
        if ($user != null) {
            $depwd = decrypt($user->userpwd);
            $user['oldpwd']=$depwd;
            if ($depwd == $request->userpwd) {
                return json_encode(['code' => 1, 'msg' => '登录成功', 'user' => $user]);
            } else {
                return json_encode(['code' => 0, 'msg' => '登录失败,用户名或密码错误', 'user' => null]);
            }
        } else {
            return json_encode(['code' => 0, 'msg' => '登录失败,用户名错误', 'user' => null]);
        }
    }

    public function actions(Request $request)
    {
        try {
            $uid = $request->userid;
            $list = [['title' => '修改', 'code' => 'edit', 'icon' => 'edit'], ['title' => '删除', 'code' => 'delete', 'icon' => 'remove'], ['title' => '禁用', 'code' => 'diabel', 'icon' => 'diabel'], ['title' => '启用', 'code' => 'enabel', 'icon' => 'enabel'],];
            return json_encode(['code' => 1, 'msg' => 'ok', 'actions' => $list]);
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function finduser(Request $request)
    {
        try {
            $uid = $request->userid;
            return json_encode(User::find($uid));

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function changepwd(Request $request)
    {
        try {
            $uid = $request->userid;
            $newpwd = $request->newpwd;
            $user = User::find($uid);
            $user->userpwd = encrypt($newpwd);
            $ret = $user->save();
            if ($ret) {
                return json_encode(['code' => 1, 'msg' => '密码重置成功！']);
            } else {
                return json_encode(['code' => 0, 'msg' => '密码重置失败！']);
            }

        } catch (Exception $exception) {
            throw  $exception;
        }
    }

    public function edituser(Request $request)
    {
        try {
            $uid = $request->id;
            $user = User::find($uid);
            $user->headimg = $request->headimg;
            $user->username = $request->username;
            $user->tel = $request->tel;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->birthdate = $request->birthdate;
            $user->sex = $request->sex;
            $user->save();
            return json_encode(['code' => 1, 'msg' => '数据保存成功']);

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function search(Request $request)
    {
        try {
            $key = $request->keywords;
            $query = User::query();
            $list = $query->where('username', 'like', '%' . $key . '%')->orWhere('usercode', 'like', '%' . $key . '%')->orWhere('address', 'like', '%' . $key . '%')->orWhere('tel', 'like', '%' . $key . '%')->orWhere('phone', 'like', '%' . $key . '%')->get()->toArray();

            return json_encode(['code' => 1, 'msg' => 'ok', 'userlist' => $list]);

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function remove(Request $request)
    {
        try {
            $uid = $request->userid;
            $user = User::find($uid);
            $ret = $user->delete();
            if ($ret) {
                return json_encode(['code' => 1, 'msg' => '数据操作成功']);
            } else {
                return json_encode(['code' => 0, 'msg' => '数据操作失败']);
            }
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function drawer(Request $request)
    {
        return json_encode([
            ['title' => '系统管理', 'icon' => 'person', 'isopen' => false, 'child' => [['title' => '用户管理', 'icon' => 'settings','path'=>'/user/list'], ['title' => '菜单管理', 'icon' => 'settings'], ['title' => '角色管理', 'icon' => 'settings'],]],
            ['title' => '产品管理', 'icon' => 'product', 'isopen' => false, 'child' => [['title' => '产品列表', 'icon' => 'pub'], ['title' => '线路列表', 'icon' => 'list'],]],
            ['title' => '订单管理', 'isopen' => false, 'icon' => 'order', 'child' => [['title' => '订单列表'], ['title' => '订单结算'],]],
            ['title' => '通知管理', 'icon' => 'news', 'isopen' => false, 'child' => [['title' => '消息'], ['title' => '通知'], ['title' => '公告'],]],
            ['title' => '报表管理', 'icon' => 'report', 'isopen' => false, 'child' => [['title' => '日期报表'], ['title' => '报表1'], ['title' => '报表2'], ['title' => '报表3'],]],
            ['title' => '发票管理', 'icon' => 'report', 'isopen' => false, 'child' => [['title' => '发票列表'], ['title' => '发票验证'],]],
            ['title' => '文件管理', 'icon' => 'file', 'isopen' => false, 'child' => [['title' => '文件列表'], ['title' => '文件列表1'], ['title' => '文件列表2'],]]]);
    }
}
