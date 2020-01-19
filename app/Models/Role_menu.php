<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Role_menu
 *
 * @property int $id
 * @property int|null $role_id
 * @property int|null $menu_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role_menu whereRoleId($value)
 * @mixin \Eloquent
 */
class Role_menu extends Model
{
    //
    protected $table='role_menu';
    public $timestamps =false;
    protected $guarded=[];
}
