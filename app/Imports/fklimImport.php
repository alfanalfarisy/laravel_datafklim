<?php

namespace App\Imports;

use App\Models\fklim;
use Maatwebsite\Excel\Concerns\ToModel;
use Ramsey\Uuid\Rfc4122\NilUuid;

class fklimImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new fklim([
            'Tanggal' => $row[1],
            'Tahun' => $row[2]??null,
            'Bulan' => $row[3]??null,
            'Tanggal_1' => $row[4]??null,
            'T07' => $row[5]??null,
            'T13' => $row[6]??null,
            'T18' => $row[7]??null,
            'Trata_rata' => $row[8]??null,
            'Tmax' => $row[9]??null,
            'Tmin' => $row[10]??null,
            'CH' => $row[11]??null,
            'LPM' => $row[12]??null,
            'Cuaca_Khusus' => $row[13]??null,
            'QFE' => $row[14]??null,
            'RH07' => $row[15]??null,
            'RH13' => $row[16]??null,
            'RH18' => $row[17]??null,
            'Rhrata_rata' => $row[18]??null,
            'ffrata_rata' => $row[19]??null,
            'arah_terbanyak' => $row[20]??null,
            'dd' => $row[21]??null,
            'ffmax' => $row[22]??null,
            'arah' => $row[23]??null,
            'ddmax' => $row[24]??null
            
        ]);
    }
}
