<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\ShipClassModel
 *
 * @property string $RCNO
 * @property string $BDATE
 * @property string $EDATE
 * @property string $REMARK
 * @property string $TAG
 * @property int $NO
 * @property string|null $SCGKNO
 * @property string|null $SCGKNAME
 * @property string|null $LCGKNO
 * @property string|null $LCGKNAME
 * @property string|null $CRUISESNO
 * @property string|null $MODIFYDATE
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereBDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereEDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereLCGKNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereLCGKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereRCNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereSCGKNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereSCGKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\ShipClassModel whereTAG($value)
 * @mixin \Eloquent
 */
class ShipClassModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='SHIPCLASS';
    public $timestamps=false;
    protected $guarded=[];
}
