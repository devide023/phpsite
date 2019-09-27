<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Userfile
 *
 * @property int $id
 * @property string|null $filename
 * @property string|null $filepath
 * @property string|null $filetype
 * @property int|null $userid
 * @property string|null $addtime
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereFilepath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereFiletype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Userfile whereUserid($value)
 * @mixin \Eloquent
 */
class Userfile extends Model
{
    //
    protected $table='userfile';
    protected $primaryKey='id';
    public $timestamps =false;

    public function user()
    {
       return $this->belongsTo('App\Models\User','userid','id');
    }
}
