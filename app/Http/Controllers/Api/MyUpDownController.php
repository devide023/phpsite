<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyUpDownController extends Controller
{
    //
    public function upimage(Request $request)
    {

        $file = $request->file('file');
        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $realPath = $file->getRealPath();
            $fileName = uniqid() . '.' . $ext;
            $bool = Storage::disk('upload')->put($fileName, file_get_contents($realPath));
            return json_encode(['code' => 1, 'msg' => 'ok', 'originalName' => $originalName, 'filename' => $fileName]);
        } else {
            return json_encode(['code' => 0, 'msg' => 'error']);
        }

    }
}
