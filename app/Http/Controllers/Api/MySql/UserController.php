<?php

namespace App\Http\Controllers\Api\MySql;

use App\Http\Controllers\Controller;
use App\Models\MySql\MyUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list(Request $request)
    {
        try {
            return MyUser::all();
        } catch (Exception $exception) {
            throw  $exception;
        }

    }
}
