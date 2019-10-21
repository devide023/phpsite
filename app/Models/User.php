<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $userpwd
 * @property int|null $status
 * @property string|null $addtime
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Userfile[] $files
 * @property-read int|null $files_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserpwd($value)
 * @mixin \Eloquent
 * @property string $usercode 用户编号
 * @property string $headimg 用户头像url
 * @property string $tel 移动电话
 * @property string $phone 电话
 * @property string $address 通讯地址
 * @property string $birthdate 出生日期
 * @property int $sex 性别，1：男，2女
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereHeadimg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsercode($value)
 */
class User extends Model
{
    //
    protected $table='user';
    public $timestamps =false;
    protected $guarded=[];
    const CREATED_AT = 'addtime';

    public function roles()
    {
       return $this->belongsToMany('App\Models\role','User_role','userid','roleid');
    }

    public function userroles()
    {
        return $this->hasMany('App\Models\User_role','userid');
    }
}
