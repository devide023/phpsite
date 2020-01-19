<?php

namespace App\Http\Controllers\Api\Gold05;

use App\Http\Controllers\Controller;
use App\Models\Gold05\MenuBillHModel;
use App\Models\Gold05\MenuBillMModel;
use App\Models\Gold05\MenuCodeModel;
use App\Models\Gold05\MenuPlaceModel;
use App\Models\Gold05\MenuTypeModel;
use App\Models\Gold05\ShipClassModel;
use App\Models\Gold05\XMTypeModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BaseInfoController extends Controller
{
    //
    public function menutyp(Request $request)
    {
        try {
            return MenuTypeModel::select(['typeno', 'typename'])->orderby('typeno', 'asc')->get();

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function menuplace(Request $request)
    {
        try {
            return MenuPlaceModel::where('CRUISESNO', '=', '005')->where('ISUSED', '=', 1)->get(['placeno', 'placename',]);

        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function shipclass(Request $request)
    {
        try {
            $query = ShipClassModel::query();
            $query->when($request->ksrq, function (Builder $q) use ($request) {
                return $q->whereDate('bdate', '>=', $request->ksrq);
            });
            $query->when($request->jsrq, function (Builder $q) use ($request) {
                return $q->whereDate('bdate', '<=', $request->jsrq);
            });
            return $query->orderBy('no', 'desc')->take(20)->get(['rcno', 'bdate', 'edate', 'remark', 'no', 'scgkname', 'lcgkname',]);
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function xmtype(Request $request)
    {
        try {
            $query = XMTypeModel::query();
            $query->where('cruisesno', '=', '005');
            $query->when($request->typeno, function ($q) use ($request) {
                return $q->where('typeno', '=', $request->typeno);
            });
            $query->when($request->placeno, function ($q) use ($request) {
                return $q->where('placeno', '=', $request->placeno);
            });
            return $query->get(['menuno', 'typeno', 'placeno', 'menuname', 'shortname',

            ]);
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function xmtypes(Request $request)
    {
        try {
            $query = XMTypeModel::query();
            $query->where('cruisesno', '=', '005');
            $query->when($request->typeno, function ($q) use ($request) {
                return $q->where('typeno', '=', $request->typeno);
            });
            $query->when($request->placenos, function ($q) use ($request) {
                return $q->whereIn('placeno', $request->placenos);
            });
            return $query->get(['menuno', 'typeno', 'placeno', 'menuname', 'shortname',

            ]);
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function menubill(Request $request)
    {
        try {
            return MenuBillHModel::all();
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function index(Request $request)
    {
        try {
            return ['menutypelist' => $this->menutyp($request), 'placenolist' => $this->menuplace($request),];
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function menucode(Request $request)
    {
        try {
            $query = MenuCodeModel::where('CRUISESNO', '=', '005')->where('isused', '=', '1');
            $query->when($request->typeno, function (Builder $q) use ($request) {
                return $q->where('typeno', '=', $request->typeno);
            });
            $query->when($request->xmtypeno, function (Builder $q) use ($request) {
                return $q->where('xmtypeno', '=', $request->xmtypeno);
            });
            return $query->get(['menuname', 'menuno', 'units', 'price', 'shortname',]);
        } catch (Exception $exception) {
            throw  $exception;
        }

    }

    public function saledata(Request $request)
    {
        try {
            $sql = "SELECT t1.*,t2.PLACENAME,t3.TYPENAME FROM 
(SELECT tb.PLACENO,tb.TYPENO,SUM(tb.CURR) je FROM dbo.MENUBILLH ta,dbo.MENUBILLM tb WHERE ta.NOTENO = tb.NOTENO ";
            if ($request->rcno != null && $request->rcno != "") {
                $sql = $sql . "and ta.RCNO=? ";
            } else {
                $sql = $sql . " and ta.rcno=(SELECT TOP 1 rcno FROM dbo.SHIPCLASS WHERE CRUISESNO='005' ORDER BY no DESC) ";
            }
            if ($request->placeno != null && $request->placeno != "") {
                $sql = $sql . "and tb.placeno=? ";
            }
            if ($request->typeno != null && $request->typeno != "") {
                $sql = $sql . "and tb.typeno=? ";
            }
            $sql = $sql . "    
            GROUP BY tb.PLACENO,tb.TYPENO
            ) t1
            LEFT JOIN
            (
                SELECT PLACENO,PLACENAME FROM dbo.MENUPLACE WHERE CRUISESNO='005' AND ISUSED = 1
            ) t2
            ON t2.PLACENO = t1.PLACENO
            LEFT JOIN 
            (
            SELECT TYPENO,TYPENAME FROM dbo.MENUTYPE
            ) t3
            ON t3.TYPENO = t1.TYPENO
            order by t1.placeno asc,t1.je desc
            ";

            $sql = Str::lower($sql);
            $q = DB::connection('sqlsrv005')->select($sql, [$request->rcno, $request->placeno, $request->typeno,]);
            return $q;
        } catch (Exception $exception) {
            throw  $exception;
        }


    }

    public function saledatas(Request $request)
    {
        try {
            $str_rcnos="";
            $str_placenos="";
            $str_typenos="";
            if ($request->rcnos != null) {
                $str_rcnos = "'".implode("','", $request->rcnos)."'";
            }
            if ($request->placenos != null) {
                $str_placenos = "'".implode("','", $request->placenos)."'";
            }
            if ($request->typenos != null) {
                $str_typenos = "'".implode("','", $request->typenos)."'";
            }

            $sql = "SELECT t1.*,t2.PLACENAME,t3.TYPENAME FROM 
(SELECT tb.PLACENO,tb.TYPENO,SUM(tb.CURR) je FROM dbo.MENUBILLH ta,dbo.MENUBILLM tb WHERE ta.NOTENO = tb.NOTENO ";
            if ($request->rcnos != null) {
                $sql = $sql . "and ta.RCNO in ({$str_rcnos}) ";
            } else {
                $sql = $sql . " and ta.rcno=(SELECT TOP 1 rcno FROM dbo.SHIPCLASS WHERE CRUISESNO='005' ORDER BY no DESC) ";
            }
            if ($request->placenos != null) {
                $sql = $sql . "and tb.placeno in ({$str_placenos}) ";
            }
            if ($request->typenos != null) {
                $sql = $sql . "and tb.typeno in ({$str_typenos}) ";
            }
            $sql = $sql . "    
            GROUP BY tb.PLACENO,tb.TYPENO
            ) t1
            LEFT JOIN
            (
                SELECT PLACENO,PLACENAME FROM dbo.MENUPLACE WHERE CRUISESNO='005' AND ISUSED = 1
            ) t2
            ON t2.PLACENO = t1.PLACENO
            LEFT JOIN 
            (
            SELECT TYPENO,TYPENAME FROM dbo.MENUTYPE
            ) t3
            ON t3.TYPENO = t1.TYPENO
            order by t1.placeno asc,t1.je desc
            ";
            $sql = Str::lower($sql);
//            var_dump($sql);
            $q = DB::connection('sqlsrv005')->select($sql);
            return $q;
        } catch (Exception $exception) {
            throw  $exception;
        }

    }
}
