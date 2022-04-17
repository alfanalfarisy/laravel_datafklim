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
        //ambil data dari table surat masuk
        // $fklim =fklim::with('Kecamatan')->paginate(5);
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

    public function HistoryExport(Request $request){
        // $startdate = $request->input('startdate');
        // $enddate = $request->input('enddate');
        // $data_bulan = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->get();
        // Excel::create('PostsReport', function($excel) 
        // {
        //     $excel->sheet('New sheet', function($sheet) 
        //     {
        //         $sheet->loadView('HistoryExport');
        // //     });
        // $startdate = $request->input('startdate');
        // $enddate = $request->input('enddate');
        // $data_bulan = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->get();
        // if ($data_bulan) {
            
        //     $data_bulan = fklim::select()
        //     ->where('Tanggal', '>=', $startdate)
        //     ->where('Tanggal','<=',$enddate)->get();
        // } else {
        //     return response()->json([
        //         'status'  => false,
        //         'message' => 'Data tidak ditemukan',
        //         'data'    => []
        //     ]);
        // }

        return Excel::download(new HistoryExport, 'fklim.csv');
    
      
        //  if(request()->ajax())
        //  {
        //   if(!empty($request->startdate))
        //   {
        //    $data = DB::table('fklim')
        //      ->whereBetween('Tanggal', array($request->startdate, $request->enddate))->get();
        //   }
        //   else
        //   {
        //    $data = DB::table('fklim')->get();
        //   }
        // //   return datatables()->of($data)->make(true);
        //  }
        //  return view('history');
     
   
}

}