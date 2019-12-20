<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    //
    protected $table='user';
    public $timestamps =false;
    protected $guarded=[];
    protected $hidden=['userpwd','laravelpwd'];
    protected $casts=[
        'sex'=>'integer',
        'status'=>'integer',
        'company_id'=>'integer',
        'department_id'=>'integer',
        'login_way'=>'integer',
    ];

    public function roles()
    {
       return $this->belongsToMany('App\Models\role','User_role','user_id','role_id');
    }

    public function userroles()
    {
        return $this->hasMany('App\Models\User_role','user_id');
    }



}
