<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $usercode
 * @property string|null $userid
 * @property int|null $status
 * @property int|null $sex
 * @property string|null $username
 * @property string|null $userpwd
 * @property string|null $laravelpwd
 * @property int|null $rkey
 * @property int|null $company_id
 * @property int|null $department_id
 * @property string|null $position
 * @property int|null $login_way
 * @property string|null $login_date
 * @property string|null $logout_date
 * @property string|null $add_time
 * @property string|null $modify_date
 * @property string|null $address
 * @property string|null $tel
 * @property string|null $birthday
 * @property string|null $headimg
 * @property string|null $phone
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User_role[] $userroles
 * @property-read int|null $userroles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereHeadimg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLaravelpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLoginDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLoginWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLogoutDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereModifyDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRkey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsercode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserpwd($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    //
    protected $connection='sqlsrv';
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
