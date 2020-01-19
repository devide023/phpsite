<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function alldata(Request $request)
    {
        try {
            $swiperdata=['swiper1.jpg','swiper2.jpg','swiper3.jpg','swiper4.jpg'];
            $category = [
                ['title'=>'黄金1号','img'=>'1.jpg'],
                ['title'=>'黄金2号','img'=>'2.jpg'],
                ['title'=>'黄金3号','img'=>'3.jpg'],
                ['title'=>'黄金5号','img'=>'4.jpg'],
                ['title'=>'黄金6号','img'=>'5.jpg'],
                ['title'=>'黄金7号','img'=>'6.jpg'],
                ['title'=>'黄金8号','img'=>'7.jpg'],
                ['title'=>'h','img'=>'8.jpg'],
                ['title'=>'i','img'=>'9.jpg'],
                ['title'=>'j','img'=>'10.jpg'],
            ];

            return json_encode([
                'categorydata'=>$category,
                'swiperdata'=>$swiperdata
            ]);

        } catch (Exception $exception) {
            throw  $exception;
        }

    }
}
