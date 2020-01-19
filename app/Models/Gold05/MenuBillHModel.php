<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\MenuBillHModel
 *
 * @property string $PLACENO
 * @property string $NOTENO
 * @property string $NOTEDATE
 * @property string $CLASSID
 * @property string $CLASSDATE
 * @property string $OPERANT
 * @property string $REMARK
 * @property string $TAG
 * @property string $CHECKNO
 * @property int $TCURR
 * @property int $TCURR0
 * @property int $NUM
 * @property string $GUESTNAME
 * @property int $TDISCOUNT
 * @property string $DESKNO
 * @property string $ENDDATE
 * @property int $FWCURR
 * @property string $HANDNOTENO
 * @property string $TAG0
 * @property int $RATE
 * @property string $AGREENO
 * @property string|null $CARDNO
 * @property string $HANDMAN
 * @property float|null $FPCURR
 * @property float|null $ZPCURR
 * @property float|null $JSCURR
 * @property string $SALEMAN
 * @property string|null $ISPRINT
 * @property bool $KP
 * @property int|null $PRINTNUM
 * @property string|null $YQ
 * @property string|null $BXTYPENO
 * @property string $VIPNO
 * @property string $ZKMAN
 * @property float $ZKMANDISCOUNT
 * @property string|null $SC
 * @property string|null $JSTYPE
 * @property float $CURR0
 * @property float $CUTCURR
 * @property string|null $XSNOTENO
 * @property string|null $XSPERIOD
 * @property string|null $GROUPNO
 * @property int|null $MLCURR
 * @property string|null $TCNAME
 * @property string|null $DCBKEYLIST
 * @property string|null $DCBNO
 * @property string|null $JZNO
 * @property string|null $QQCHECK
 * @property string|null $RCNO
 * @property string|null $GUESTID
 * @property string $CRUISESNO
 * @property string|null $MODIFYDATE
 * @property string|null $TYPENO
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereAGREENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereBXTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCARDNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCHECKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCLASSDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCURR0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereCUTCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereDCBKEYLIST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereDCBNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereDESKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereENDDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereFPCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereFWCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereGROUPNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereGUESTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereGUESTNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereHANDMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereHANDNOTENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereISPRINT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereJSCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereJSTYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereJZNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereKP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereMLCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereNOTEDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereNOTENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereNUM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereOPERANT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel wherePLACENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel wherePRINTNUM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereQQCHECK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereRATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereRCNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereSALEMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereSC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTAG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTAG0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTCNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTCURR0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTDISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereVIPNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereXSNOTENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereXSPERIOD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereYQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereZKMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereZKMANDISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillHModel whereZPCURR($value)
 * @mixin \Eloquent
 */
class MenuBillHModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='menubillh';
    public $timestamps=false;
    protected $guarded=[];
}
