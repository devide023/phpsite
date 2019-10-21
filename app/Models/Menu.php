<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Menu
 *
 * @property int $id
 * @property int $pid 父id
 * @property int $status 状态
 * @property string $menucode 菜单编码
 * @property string $title 菜单名称
 * @property string $path 路由
 * @property string $icon 图标
 * @property string $menutype 菜单类型
 * @property string $note 备注
 * @property string $addtime 录入日期
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereMenucode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereMenutype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereTitle($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    //
    protected $table='menu';
    public $timestamps =false;
    protected $guarded=[];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','Role_menu','menuid','roleid');
    }

    public function menurole()
    {
        return $this->hasMany('App\Models\Role_menu','menuid');
    }
}
