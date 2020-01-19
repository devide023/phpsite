<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * App\Models\Menu
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $pid
 * @property int|null $menutype
 * @property string|null $title
 * @property string|null $code
 * @property string|null $menucode
 * @property string|null $icon
 * @property string|null $add_time
 * @property string|null $path
 * @property int|null $seq
 * @property string|null $viewpath
 * @property string|null $flutter_router
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role_menu[] $menurole
 * @property-read int|null $menurole_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereFlutterRouter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereMenucode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereMenutype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereSeq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereViewpath($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    //
    protected $table='menu';
    public $timestamps =false;
    protected $guarded=[];
    protected $casts=[
      'status'=>'integer',
      'pid'=>'integer',
      'seq'=>'integer',
      'menutype'=>'integer',
    ];
    protected $hidden=['roles','menurole'];
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','Role_menu','menu_id','role_id');
    }

    public function menurole()
    {
        return $this->hasMany('App\Models\Role_menu','menu_id');
    }
}
