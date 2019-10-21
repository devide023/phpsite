<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Role_menu;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class MenuController extends Controller
{
    //
    public function list(Request $request)
    {
        try {
            $query = Menu::query();
            $query->when($request->key,function (Builder $q) use ($request){
                return $q->where('title','like','%'.$request->key.'%')
                    ->orWhere('note','like','%'.$request->key.'%');
            });
            $query->when($request->pid,function(Builder $q) use ($request){
                return $q->where('pid','=',$request->pid);
            });
            $list = $query->get();
            return json_encode($list);
        } catch (Exception $exception) {
            throw  $exception;
        }
    }

    public function add(Request $request)
    {
        try {
            $request['addtime'] = now();
            $menu = new Menu($request->all());
            $menu->save();
            if ($menu->id > 0) {
                return json_encode(['code' => 1, 'msg' => '数据保存成功', 'menu' => $menu]);
            } else {
                return json_encode(['code' => 0, 'msg' => '数据保存失败', 'menu' => null]);
            }
        } catch (Exception $exception) {
            throw  $exception;
        }
    }

    public function menuroles(Request $request)
    {
        try {
            $menuid = $request->menuid;
            $menu = Menu::find($menuid);
            $data = array();
            foreach ($request->roleids as $roleid) {
                array_push($data, new Role_menu(['roleid' => $roleid]));
            }
            $list = $menu->menurole()->saveMany($data);
            if ($list != null) {
                return json_encode(['code' => 1, 'msg' => '数据保存成功']);
            } else {
                return json_encode(['code' => 0, 'msg' => '数据保存失败']);
            }
        } catch (Exception $exception) {
            throw  $exception;
        }
    }

}
