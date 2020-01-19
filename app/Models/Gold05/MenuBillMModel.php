<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\MenuBillMModel
 *
 * @property string|null $DCBNO
 * @property string|null $JZNO
 * @property string|null $HDTAG
 * @property string|null $DCBKEYLIST
 * @property string|null $REMARK2
 * @property string|null $ZPMAN
 * @property int|null $DISCURR
 * @property string|null $PLACENAME
 * @property string|null $DESKNO
 * @property string|null $DESKNAME
 * @property string|null $BXTYPENO
 * @property float $WAITERTC
 * @property float $WAITERTCE
 * @property string $IDSTR
 * @property string|null $CHECKMAN
 * @property string|null $TCTAG
 * @property string|null $JLTAG
 * @property float $ID
 * @property string $NOTENO
 * @property string $MENUNO
 * @property int $AMOUNT
 * @property int $PRICE
 * @property int $CURR
 * @property string $REMARK0
 * @property string $PLACENO
 * @property int $DISCOUNT
 * @property string $ISPRESENT
 * @property bool $NODISCOUNT
 * @property string $TYPENO
 * @property float|null $TCCURR
 * @property bool $ISPRINT
 * @property string $REMARK1
 * @property string $LRMAN
 * @property string $DATE0
 * @property string $ZT
 * @property string $MENUNAME
 * @property string|null $PRINTS
 * @property string|null $PRINTSCC
 * @property string|null $LDMAN
 * @property string|null $ZKMAN
 * @property string $ISOK
 * @property string|null $PRINTS2
 * @property string|null $PRINTS3
 * @property string|null $PRINTS4
 * @property string|null $PRINTS5
 * @property string|null $PRINTSCC2
 * @property string|null $PRINTSCC3
 * @property string|null $PRINTSCC4
 * @property string|null $PRINTSCC5
 * @property string|null $CHECKNO
 * @property string|null $B_MENUNO
 * @property string|null $GUESTID
 * @property int|null $DISCOUNT0
 * @property string|null $MENUNAME0
 * @property string $CRUISESNO
 * @property string $MODIFYDATE
 * @property bool|null $PRINTTAG
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereAMOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereBMENUNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereBXTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereCHECKMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereCHECKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDATE0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDCBKEYLIST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDCBNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDESKNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDESKNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDISCOUNT0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereDISCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereGUESTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereHDTAG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereIDSTR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereISOK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereISPRESENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereISPRINT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereJLTAG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereJZNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereLDMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereLRMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereMENUNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereMENUNAME0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereMENUNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereNODISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereNOTENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePLACENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePLACENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRICE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTS2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTS3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTS4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTS5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTSCC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTSCC2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTSCC3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTSCC4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTSCC5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel wherePRINTTAG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereREMARK0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereREMARK1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereREMARK2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereTCCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereTCTAG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereWAITERTC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereWAITERTCE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereZKMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereZPMAN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuBillMModel whereZT($value)
 * @mixin \Eloquent
 */
class MenuBillMModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='menubillm';
    public $timestamps=false;
    protected $guarded=[];
}
