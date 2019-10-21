<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Organize
 *
 * @property int $id
 * @property int $pid 父节点
 * @property string $title 节点名称
 * @property string $nodecode 节点编码
 * @property int $status 状态
 * @property string $nodetype 节点类型
 * @property string $addtime 录入日期
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereNodecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereNodetype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Organize whereTitle($value)
 * @mixin \Eloquent
 */
class Organize extends Model
{
    //
    protected $table='organize';
    public $timestamps =false;
    protected $guarded=[];
}
