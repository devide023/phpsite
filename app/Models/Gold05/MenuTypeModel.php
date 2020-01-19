<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\MenuTypeModel
 *
 * @property string $TYPENO
 * @property string $TYPENAME
 * @property string|null $FKINGNUMBER
 * @property string|null $FKINGNAME
 * @property string|null $MODIFYDATE
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel whereFKINGNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel whereFKINGNUMBER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel whereTYPENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuTypeModel whereTYPENO($value)
 * @mixin \Eloquent
 */
class MenuTypeModel extends Model
{
    //
    protected $table='MENUTYPE';
    public $timestamps=false;
    protected $guarded=[];
    protected $connection='sqlsrv005';

}
