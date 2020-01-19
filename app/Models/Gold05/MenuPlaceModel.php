<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\MenuPlaceModel
 *
 * @property string $PLACENO
 * @property string $PLACENAME
 * @property string $TYPENO
 * @property bool $ISUSED
 * @property string $FIXNOTENO
 * @property string $HOUSENO
 * @property string $DPTNO
 * @property string $CRUISESNO
 * @property string|null $MODIFYDATE
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereDPTNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereFIXNOTENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereHOUSENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereISUSED($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel wherePLACENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel wherePLACENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuPlaceModel whereTYPENO($value)
 * @mixin \Eloquent
 */
class MenuPlaceModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='MENUPLACE';
    public $timestamps=false;
    protected $guarded=[];
}
