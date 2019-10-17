<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyUploadController extends Controller
{
    //
    public function image(Request $request)
    {
        $fileName = $request->file('image')->store('upload');
        return json_encode(['code'=>1,'msg'=>'ok','file'=>$fileName]);
    }
}
