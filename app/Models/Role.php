<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Role
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $code
 * @property string|null $title
 * @property string|null $add_time
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Menu[] $menus
 * @property-read int|null $menus_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role_menu[] $rolemenu
 * @property-read int|null $rolemenu_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User_role[] $roleuser
 * @property-read int|null $roleuser_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereTitle($value)
 * @mixin \Eloquent
 */
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
