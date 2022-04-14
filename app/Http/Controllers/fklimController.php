<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\fklim;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use Symfony\Component\HttpFoundation\Response;

class fklimController extends Controller
{
    public function __construct(){
        $this->fklim = new fklim();
        
    }  
    public function index(){
        //ambil data dari table surat masuk
        // $fklim =fklim::with('Kecamatan')->paginate(5);
       $response =[
        'fklim' => $this -> fklim -> allData(),
           
       ];
       return view('fklim', [
        'fklim' => DB::table('fklim')->Paginate(15)
    ]);
    // }

    // public function tambah(){
        
    //     return view('createfklim');
    // $fklim = fklim::orderBy('Tanggal', 'DESC')->get();
    //     $response = [
    //         'message' => 'List Fklim order by Tanggal',
    //         'data' => $fklim
    //     ];

        return response()->json($response, Response::HTTP_OK);
    }


    public function store(Request $request){
        $fklim = new fklim; 
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
}
