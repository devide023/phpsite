<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Organize
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $pid
 * @property int|null $orgtype
 * @property string|null $code
 * @property string|null $title
 * @property string|null $tel
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $leader
 * @property string|null $logo
 * @property string|null $address
 * @property string|null $add_time
 * @property string|null $modify_time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereModifyTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereOrgtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereTitle($value)
 * @mixin \Eloquent
 */
class Organize extends Model
{
    //
    protected $table='organize';
    public $timestamps =false;
    protected $guarded=[];
    protected $casts=[
      'pid'=>'int',
      'status'=>'int',
        'orgtype'=>'int',
    ];

}
