<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\MenuCodeModel
 *
 * @property bool $ISGDTJ
 * @property float $TJPRICE1
 * @property float $TJPRICE2
 * @property float $TJPRICE3
 * @property float $TJPRICE4
 * @property float $TJPRICE5
 * @property float $TJPRICE6
 * @property float $TJPRICE7
 * @property bool $ISTJ1
 * @property bool $ISTJ2
 * @property bool $ISTJ3
 * @property bool $ISTJ4
 * @property bool $ISTJ5
 * @property bool $ISTJ6
 * @property bool $ISTJ7
 * @property string $BEGINDATE
 * @property string $ENDDATE
 * @property float $DATETJ
 * @property bool $ISDATETJ
 * @property string $MENUNO
 * @property string $MENUNAME
 * @property string $SHORTNAME
 * @property string $UNITS
 * @property int $PRICE
 * @property string $REMARK
 * @property string $LEVEL0
 * @property string $LEVELINFO
 * @property bool $LASTNODE
 * @property bool $ISFEATURE
 * @property int $DISCOUNT
 * @property bool $ISUSED
 * @property string $ACCOUNTNO
 * @property bool $NODISCOUNT
 * @property bool $MODIFYPRICE
 * @property int $COSTPRICE
 * @property bool $NOFWF
 * @property float|null $LOSTRATE
 * @property bool $ISNUM
 * @property bool $GDXM
 * @property string|null $ZJM
 * @property float $TCCURR
 * @property string|null $PRINTS
 * @property string|null $PRINTSCC
 * @property string|null $TYPENO
 * @property string|null $ISCLEAR
 * @property float|null $BCAMT
 * @property string|null $PRINTS2
 * @property string|null $PRINTS3
 * @property string|null $PRINTS4
 * @property string|null $PRINTS5
 * @property string|null $PRINTSCC2
 * @property string|null $PRINTSCC3
 * @property string|null $PRINTSCC4
 * @property string|null $PRINTSCC5
 * @property string|null $ISJF
 * @property string|null $REMARKINFO
 * @property string|null $COOK
 * @property string|null $ISNEW
 * @property bool $ISXP
 * @property string|null $ENAME
 * @property string|null $WARENOSTR
 * @property string $PLACENO
 * @property string $XMTYPENO
 * @property string|null $TOIPAD
 * @property string|null $MODIFYDATE
 * @property string $CRUISESNO
 * @property string|null $TCXMCODE
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereACCOUNTNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereBCAMT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereBEGINDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereCOOK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereCOSTPRICE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereDATETJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereDISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereENDDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereGDXM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISCLEAR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISDATETJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISFEATURE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISGDTJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISJF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISNEW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISNUM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISTJ7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISUSED($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereISXP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereLASTNODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereLEVEL0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereLEVELINFO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereLOSTRATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereMENUNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereMENUNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereMODIFYPRICE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereNODISCOUNT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereNOFWF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePLACENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRICE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTS2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTS3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTS4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTS5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTSCC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTSCC2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTSCC3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTSCC4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel wherePRINTSCC5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereREMARKINFO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereSHORTNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTCCURR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTCXMCODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTJPRICE7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTOIPAD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereUNITS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereWARENOSTR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereXMTYPENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\MenuCodeModel whereZJM($value)
 * @mixin \Eloquent
 */
class MenuCodeModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='menucode';
    public $timestamps=false;
    protected $guarded=[];
}
