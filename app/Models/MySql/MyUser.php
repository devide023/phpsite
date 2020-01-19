<?php

namespace App\Models\MySql;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    //
    protected $connection='mysql';
    protected $table='user';
    protected $guarded=[];
    public $timestamps=false;
    protected $hidden=['userpwd'];
}
