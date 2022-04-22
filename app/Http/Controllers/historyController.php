<?php

namespace App\Http\Controllers;

use App\Models\fklim;
use Illuminate\Support\Facades\DB;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use App\Exports\HistoryExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;

class historyController extends Controller
{
    public function __construct()
    {
        $this->fklim = new fklim();
    }

    public function dataByDate($tanggal)
    {
        $data_bulan = fklim::where('Tanggal', date($tanggal))->get();
        if ($data_bulan) {
            return response()->json([
                'status'  => true,
                'message' => 'Data ditemukan',
                'data'    => $data_bulan
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Data tidak ditemukan',
                'data'    => []
            ]);
        }
    }

    public function dataByRangeDate($startdate, $enddate)
    {
        $data_bulan = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->get();
        if ($data_bulan) {
            return response()->json([
                'status'  => true,
                'message' => 'Data ditemukan',
                'data'    => $data_bulan
            ]);
        } else {
            return response()->json([
                'status'  => false,
                'message' => 'Data tidak ditemukan',
                'data'    => []
            ]);
        }
    }


    public function index()
    {
        $response = [
            'fklim' => $this->fklim->allData(),

        ];
        return view('history', [
            'fklim' => DB::table('fklim')->Paginate(15)
        ]);
        
    }
    
    public function getHistory(Request $request)
    {
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $data_bulan = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->get();
        if($request->input('exportCsv')){
            if ($data_bulan) {
                return Excel::download(new HistoryExport($startdate,$enddate), 'fklim.csv');
            } else {
                return response()->json([
                        'status'  => false,
                        'message' => 'Data tidak ditemukan',
                        'data'    => []
                        
                    ]);
                }
        }
        if($request->input('viewData')){
            if ($data_bulan) {
                return view('history', [
                    'fklim' => fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->Paginate(15)
                ]);
            } else {
                return response()->json([
                    'status'  => false,
                    'message' => 'Data tidak ditemukan',
                    'data'    => []
                ]);
            }
        }


    }


}

