<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User_role
 *
 * @property int $id
 * @property int $userid
 * @property int $roleid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role whereRoleid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_role whereUserid($value)
 * @mixin \Eloquent
 */
class User_role extends Model
{
    //
    protected $table='user_role';
    public $timestamps =false;
    protected $guarded=[];
}
