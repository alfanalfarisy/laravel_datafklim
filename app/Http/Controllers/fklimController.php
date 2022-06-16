<?php

namespace App\Http\Controllers;

use App\Models\fklim;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\HistoryExport;
use App\Imports\fklimImport;
use Maatwebsite\Excel\Facades\Excel;


class FklimController extends Controller
{
    public function __construct()
    {
        $this->fklim = new fklim();
    }

    public function tambah(){
        return view('createfklim');
    }

    public function store(Request $request){
        $fklim = new fklim;
        $fklim->Tanggal = $request->Tanggal;
        $fklim->Tahun = $request->Tahun;
        $fklim->Bulan = $request->Bulan ;
        $fklim->Tanggal_1 = $request->Tanggal_1;
        $fklim->T07 = $request->T07;
        $fklim->T13 = $request->T13;
        $fklim->T18 = $request->T18;
        $fklim->Trata_rata = $request->Trata_rata;
        $fklim->Tmax = $request->Tmax;
        $fklim->Tmin = $request->Tmin;
        $fklim->CH = $request->CH;
        $fklim->LPM = $request->LPM ;
        $fklim->Cuaca_Khusus = $request->Cuaca_Khusus;
        $fklim->QFE = $request->GFE;
        $fklim->RH07 = $request->RH07;
        $fklim->RH13 = $request->RH13;
        $fklim->RH18 = $request->RH18;
        $fklim->Rhrata_rata = $request->Rhrata_rata;
        $fklim->ffrata_rata = $request->ffrata_rata;
        $fklim->arah_terbanyak = $request->arah_terbanyak;
        $fklim->dd = $request->dd;
        $fklim->ffmax = $request->ffmax;
        $fklim->arah = $request->arah ;
        $fklim->ddmax = $request->ddmax;
       

        if($fklim->save()){
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href='/createfklim'
            </script>
            ";
        }
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
        return view('fklim', [
            'fklim' => DB::table('fklim')->Paginate(15)
        ]);
        
    }
    
    public function getFklim(Request $request)
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
         
        if($request->input('avg')){
            $startdate = $request->input('startdate');
            $enddate = $request->input('enddate');
            $select = $request->input('fklim');
            $data_bydate = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)]);
            $data_bydateForAvg = $data_bydate->get();
            $data_bydateForTbl = $data_bydate->paginate(15);
            $sum=0;
            foreach ($data_bydateForAvg as $item) {
                $sum = $sum + (float)$item->$select;
            }
            $sumOf =$sum / count($data_bydateForAvg);
           return view('fklim',['rata'=>number_format($sumOf,0,'.',''),'fklim'=>$data_bydateForTbl, 'select'=>$select]);
            
            // return response()->json([
            //     'status'  => false,
            //     'message' => 'Data tidak ditemukan',
            //     'data'    =>  $sumOf
            // ]);
             
        
        }
        if($request->input('viewData')){
            if ($data_bulan) {
                return view('fklim', [
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
    public function getproses(Request $request)
    {
        $startdate = '2021-01-05';
        $enddate = '2022-01-01';
        $data_bulan = fklim::whereBetween('Tanggal', [date($startdate), date($enddate)])->get();
        

        $sum=0;
        foreach ($data_bulan as $item) {
            $sum = $sum + (float)$item->T07; 

        }
        $sumOf =$sum / count($data_bulan);
       

        return response()->json([
            'status'  => false,
            'message' => 'Data tidak ditemukan',
            'data'    =>  $sumOf
        ]);
         
    }

    public function importExcel(Request $request){
        $data = $request->file('file');
        $namaFile = $data->getClientOriginalName();
        $data ->move('fklim', $namaFile);

        Excel::import(new fklimImport, \public_path('/fklim/'.$namaFile));
        return \redirect()->back();
    }
   // method untuk hapus data pegawai
public function trash(Request $request)
{   
    $startdate = $request->input('startdate');
    $enddate = $request->input('enddate');
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('fklim')->where('Tanggal', [date($startdate), date($enddate)])->delete();
		
	// alihkan halaman ke halaman pegawai
    return \redirect()->back();
}
}