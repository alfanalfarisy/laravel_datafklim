<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fklim extends Model
{
    public function allData(){
        return DB::table('fklim')->get();
    }

    protected $table = 'fklim';
    protected $fillable = ['Tanggal','Tahun','Bulan','Tanggal_1','T07','T13','T18','Trata_rata','Tmax','Tmin','CH', 
    'LPM','Cuaca_Khusus', 'QFE', 'RH07','RH13','RH18','Rhrata_rata','ffrata_rata', 'arah_terbanyak',
    'dd','ffmax','arah','ddmax'];

    public function tambah(){
        
    }
}
