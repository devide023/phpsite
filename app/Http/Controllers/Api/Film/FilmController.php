<?php

namespace App\Http\Controllers\Api\Film;

use App\Http\Controllers\Controller;
use App\Models\Films\FilmModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    //
    public function list(Request $request)
    {
        try {
            $list = FilmModel::where('link', 'like', 'magnet:?%')->select(['id', 'title', 'txt', 'douban', 'imdb'])->orderBy('id', 'desc')->paginate(50, ['id', 'title', 'txt', 'douban', 'imdb']);
            foreach ($list as $item) {
                $txt = $item['txt'];
                $exsit = preg_match("#.?src=\"(.*?\.jpg)\".?#", $txt, $data);
                if ($exsit) {
                    $item['imgurl'] = $data[1];
                } else {
                    $item['imgurl'] = asset('/upload/1.jpg');

                }
                $t = preg_replace('#\s*|<.*?/>|<.*?>.*?>|&.*?;#', '', $txt);
                $item['txt'] = str_replace('　', '', $t);

            }
            return $list;

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function detail(Request $request)
    {
        try {
            $entity = FilmModel::find($request->id);
            $txt = $entity->txt;
            $exsit = preg_match("#.?src=\"(.*?\.jpg)\".?#", $txt, $data);
            $t = preg_replace('#\s*|<.*?/>|<.*?>.*?>|&.*?;#', '', $entity->txt);
            $entity['txt'] = str_replace(['　','◎','/'],'',$t);
            if ($exsit) {
                $entity['imgurl'] = $data[1];
            } else {
                $entity['imgurl'] = url('upload/1.jpg');
            }
            return $entity;
        } catch (Exception $exception) {
            throw  $exception;
        }

    }
}
