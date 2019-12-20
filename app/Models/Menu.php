<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Menu extends Model
{
    //
    protected $table='menu';
    public $timestamps =false;
    protected $guarded=[];
    protected $casts=[
      'status'=>'integer',
      'pid'=>'integer',
      'seq'=>'integer',
      'menutype'=>'integer',
    ];
    protected $hidden=['roles','menurole'];
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','Role_menu','menu_id','role_id');
    }

    public function menurole()
    {
        return $this->hasMany('App\Models\Role_menu','menu_id');
    }
}
