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
    public function tambah(){
        
    }
}
