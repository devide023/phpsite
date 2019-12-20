<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    //
    protected $table='role';
    public $timestamps =false;
    protected $guarded=[];
protected $casts=[
    'status'=>'integer',
];
    public function users()
    {
       return $this->belongsToMany('App\Models\User','User_role','role_id','user_id');
    }
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu','Role_menu','role_id','menu_id');
    }

    public function rolemenu()
    {
        return $this->hasMany('App\Models\Role_menu','role_id');
    }

    public function roleuser()
    {
        return $this->hasMany('App\Models\User_role','role_id');
    }
}
