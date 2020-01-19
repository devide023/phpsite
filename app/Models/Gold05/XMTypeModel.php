<?php

namespace App\Models\Gold05;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Gold05\XMTypeModel
 *
 * @property string $MENUNO
 * @property string $MENUNAME
 * @property string $SHORTNAME
 * @property string $LEVEL0
 * @property string $LEVELINFO
 * @property bool $LASTNODE
 * @property string|null $PRINTS
 * @property string|null $PRINTSCC
 * @property string|null $TYPENO
 * @property float|null $BCAMT
 * @property string|null $PRINTS2
 * @property string|null $PRINTS3
 * @property string|null $PRINTS4
 * @property string|null $PRINTS5
 * @property string|null $PRINTSCC2
 * @property string|null $PRINTSCC3
 * @property string|null $PRINTSCC4
 * @property string|null $PRINTSCC5
 * @property string $PLACENO
 * @property string|null $TOIPAD
 * @property string|null $MODIFYDATE
 * @property string $CRUISESNO
 * @property string|null $TCXMCODE
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereBCAMT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereCRUISESNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereLASTNODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereLEVEL0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereLEVELINFO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereMENUNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereMENUNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereMODIFYDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePLACENO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTS2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTS3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTS4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTS5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTSCC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTSCC2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTSCC3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTSCC4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel wherePRINTSCC5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereSHORTNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereTCXMCODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereTOIPAD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gold05\XMTypeModel whereTYPENO($value)
 * @mixin \Eloquent
 */
class XMTypeModel extends Model
{
    //
    protected $connection='sqlsrv005';
    protected $table='xmtype';
    protected $guarded=[];
    public $timestamps=false;
}
