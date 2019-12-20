<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Organize extends Model
{
    //
    protected $table='organize';
    public $timestamps =false;
    protected $guarded=[];
    protected $casts=[
      'pid'=>'int',
      'status'=>'int',
        'orgtype'=>'int',
    ];

}
