<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Role;
use App\Models\Role_menu;
use App\Models\User;
use App\Models\User_role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;
use cypher;
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
            return $q->whereDate('birthday', '>=', $request->ksrq)->whereDate('birthday', '<=', $request->jsrq);
        });
        $list = $query->select(['*'])->orderByDesc('id');
        $list = $list->paginate($pagesize);

        if ($list) {
            return ['code' => 1, 'msg' => 'ok', 'list' => $list];
        } else {
            return ['code' => 0, 'msg' => '错误', 'list' => null];
        }

    }

    public function add(Request $request)
    {
        try {

            $user = new User(['status' => 1, 'userid' => rand(1, 655350000), 'sex' => $request->sex, 'usercode' => $request->usercode, 'username' => $request->username, 'laravelpwd' => encrypt($request->laravelpwd), 'tel' => $request->tel, 'phone' => $request->phone, 'address' => $request->address, 'birthday' => $request->birthday, 'headimg' => $request->headimg, 'company_id' => $request->company_id, 'department_id' => $request->department_id, 'position' => $request->position, 'login_way' => $request->login_way, 'add_time' => date('Y-m-d H:i:s', time()), 'token' => encrypt($request->usercode . '@' . $request->laravelpwd), 'token_outtime' => date('Y-m-d H:i:s', time())]);
            $ret = $user->save();
            if ($ret != null) {
                return ['code' => 1, 'msg' => '数据保存成功', 'userinfo' => $user];
            } else {
                return ['code' => 0, 'msg' => '数据保存失败'];
            }
        } catch (Exception $e) {
            return ['code' => 0, 'msg' => $e->getMessage()];
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
                return ['code' => 1, 'msg' => '数据保存成功'];
            } else {
                return ['code' => 0, 'msg' => '数据保存失败'];
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
            $depwd = decrypt($user->laravelpwd);
            $user['oldpwd'] = $depwd;
            if ($depwd == $request->userpwd) {
                return ['code' => 1, 'msg' => '登录成功', 'user' => $user];
            } else {
                return ['code' => 0, 'msg' => '登录失败,用户名或密码错误', 'user' => null];
            }
        } else {
            return ['code' => 0, 'msg' => '登录失败,用户名错误', 'user' => null];
        }
    }

    public function refreshToken(Request $request)
    {
        try {
            $tool = new \tools();
            $result = $tool->freshtoken($request);
            var_dump($result);
            if($result){
                return [
                    'code'=>1,
                    'msg'=>'Token刷新成功'
                ];
            }
            else{
                return [
                    'code'=>0,
                    'msg'=>'Token刷新失败'
                ];
            }
        } catch (Exception $exception) {
            throw  $exception;
        }

    }
    public function checktoken(Request $request)
    {

        $tool = new \tools();
        $result = $tool->checktoken($request);
        return $result;
    }

    public function logout(Request $request)
    {
        try {



        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function actions(Request $request)
    {
        try {
            $uid = $request->userid;
            $list = [['title' => '修改', 'code' => 'edit', 'icon' => 'edit'], ['title' => '删除', 'code' => 'delete', 'icon' => 'remove'], ['title' => '禁用', 'code' => 'diabel', 'icon' => 'diabel'], ['title' => '启用', 'code' => 'enabel', 'icon' => 'enabel'],];
            return ['code' => 1, 'msg' => 'ok', 'actions' => $list];
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function finduser(Request $request)
    {
        try {
            $uid = $request->userid;
            $user = User::where('id', '=', $uid)->first();
            return $user;
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
            $user->laravelpwd = encrypt($newpwd);
            $ret = $user->save();
            if ($ret) {
                return ['code' => 1, 'msg' => '密码重置成功！'];
            } else {
                return ['code' => 0, 'msg' => '密码重置失败！'];
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
            $user->birthday = $request->birthday;
            $user->sex = $request->sex;
            $user->save();
            return ['code' => 1, 'msg' => '数据保存成功'];

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function search(Request $request)
    {
        try {
            $key = $request->keywords;
            $query = User::query();
            $list = $query->where('username', 'like', '%' . $key . '%')->orWhere('usercode', 'like', '%' . $key . '%')->orWhere('address', 'like', '%' . $key . '%')->orWhere('tel', 'like', '%' . $key . '%')->orWhere('phone', 'like', '%' . $key . '%')->distinct()->get()->toArray();

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
        $uid = $request->userid;
        $menus = Menu::join('role_menu', 'menu.id', '=', 'role_menu.menu_id')->join('user_role', 'user_role.role_id', '=', 'role_menu.role_id')->where('user_role.user_id', '=', $uid)->select(['menu.id', 'menu.pid', 'menu.code', 'menu.title', 'menu.flutter_router'])->distinct()->get()->toArray();
        $roots = array_filter($menus, function ($item) {
            return $item['pid'] == 0 && $item['title'] != 'Home';
        });
        $list = array();
        foreach ($roots as $root) {
            $subitems = array_filter($menus, function ($menu) use ($root) {
                return $menu['pid'] == $root['id'];
            });
            $root['isopen'] = false;
            $root['child'] = array_values($subitems);
            array_push($list, $root);
        }

        return $list;
    }

    public function test(Request $request)
    {
        try {
           $a=cypher::passport_encrypt('111222@258456');
           var_dump($a);
           var_dump(cypher::passport_decrypt($a));
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

}
