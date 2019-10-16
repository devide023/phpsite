<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Userfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::where('id', '>=', 1)->get();
        return view('admin\layout', ['users' => $users]);
    }

    public function add(Request $request)
    {
        $user = new User(['username' => 'b', 'userpwd' => encrypt('b')]);
        $userfile = Userfile::insert([['userid'=>$user->id,'filename'=>'1.txt'],['userid'=>$user->id,'filename'=>'2.txt']]);
        $user->save();
        return view('welcome');
    }

    public function list()
    {
        return view('admin\userlist');
    }
}
