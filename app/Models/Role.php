<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property int $status
 * @property string $title 角色名称
 * @property string $note 备注
 * @property string $addtime 录入日期
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereNote($value)
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

    public function users()
    {
       return $this->belongsToMany('App\Models\User','User_role','roleid','userid');
    }
    public function menus()
    {
        return $this->belongsToMany('App\Models\Menu','Role_menu','roleid','menuid');
    }

    public function rolemenu()
    {
        return $this->hasMany('App\Models\Role_menu','roleid');
    }

    public function roleuser()
    {
        return $this->hasMany('App\Models\User_role','roleid');
    }
}
