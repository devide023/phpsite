<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Organize;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class OrganizeController extends Controller
{
    //
    public function list(Request $request)
    {
        try {
            $pagesize = $request->per_page!=null?$request->per_page:20;
            $pageindex = $request->page;
            $query = Organize::query();
            $query->when($request->title,function (Builder $q) use ($request){
                return $q->where('title','like','%'.$request->title.'%');
            });
            $query->when( $request->pid!=null && (int)$request->pid>=0,function (Builder $q) use ($request){
                return $q->where('pid','=',$request->pid);
            });
            $query->select(['id','pid','title','orgtype','code'])->orderBy('id','desc');
            //dump($query->toSql());
            return($query->get());
        } catch (Exception $exception) {
            throw  $exception;
        }

    }
}
