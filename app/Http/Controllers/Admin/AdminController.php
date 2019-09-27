<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::where('id','>=',1)->get();
        return view('admin\layout',['users'=>$users]);
    }

    public function add(Request $request)
    {
        $user = new User();
        $user->username = 'a';
        $user->userpwd=encrypt('a');
        $user->save();
        return view('welcome');
    }

    public function list()
    {
        return view('admin\userlist');
    }
}
