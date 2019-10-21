<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Role_menu;
use App\Models\User_role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class RoleController extends Controller
{
    //
    public function list(Request $request)
    {
        $query = Role::query();
        $query->when($request->title!=null,function (Builder $q) use ($request){
            return $q->where('title','like','%'.$request->title.'%');
        });
        $list = $query->get();
        return json_encode($list);
    }

    public function add(Request $request)
    {
        $request['addtime']=now();
        $role = new Role($request->all());
        $role->save();
        if($role->id>0){
            return json_encode(['code'=>1,'msg'=>'数据保存成功','role'=>$role]);
        }
        else{
            return json_encode(['code'=>0,'msg'=>'数据保存失败','role'=>null]);
        }
    }

    public function roleusers(Request $request)
    {
        try{
            $roleid = $request->roleid;
            $role = Role::find($roleid);
            $data = array();
            foreach ($request->userids as $userid){
            array_push($data,new User_role(['userid'=>$userid]));
            }
            $ret = $role->roleuser()->saveMany($data);
            if($ret!=null){
                return json_encode(['code'=>1,'msg'=>'数据保存成功']);
            }
            else
            {
                return json_encode(['code'=>0,'msg'=>'数据保存失败']);
            }
        }catch (Exception $exception){
            throw  $exception;
        }
    }

    public function rolemenus(Request $request)
    {
        try{
            $roleid = $request->roleid;
            $role = Role::find($roleid);
            $data = array();
            foreach ($request->menuids as $menuid){
                array_push($data,new Role_menu(['menuid'=>$menuid]));
            }
            $ret = $role->rolemenu()->saveMany($data);
            if($ret!=null){
                return json_encode(['code'=>1,'msg'=>'数据保存成功']);
            }
            else
            {
                return json_encode(['code'=>0,'msg'=>'数据保存失败']);
            }
        }catch (Exception $exception){
            throw  $exception;
        }
    }
}
