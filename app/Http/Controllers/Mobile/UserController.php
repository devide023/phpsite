<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userfile;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $cookie = $request->cookie('user');
        $user = json_decode($cookie);
        dd($user->username);
        $users = User::all();
        return view('mobile.user.index', ['users' => $users]);
    }//

    /**
     * @param $userid integer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getuserfile($userid)
    {
        //$result = DB::select('select * from sys_user where id=:id',['id'=>$userid]);
        $result = DB::table('user')->get(['id','username']);
        dd($result);
        $user = User::find($userid);
        $files = $user->files;
        return view('mobile.user.files', ['files' => $files]);
    }

}
