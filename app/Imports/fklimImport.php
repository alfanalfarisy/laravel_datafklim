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
            'Tanggal' => $row[0],
            'Tahun' => $row[1]??null,
            'Bulan' => $row[2]??null,
            'Tanggal_1' => $row[3]??null,
            'T07' => $row[4]??null,
            'T13' => $row[5]??null,
            'T18' => $row[6]??null,
            'Trata_rata' => $row[7]??null,
            'Tmax' => $row[8]??null,
            'Tmin' => $row[9]??null,
            'CH' => $row[10]??null,
            'LPM' => $row[11]??null,
            'Cuaca_Khusus' => $row[12]??null,
            'QFE' => $row[13]??null,
            'RH07' => $row[14]??null,
            'RH13' => $row[15]??null,
            'RH18' => $row[16]??null,
            'Rhrata_rata' => $row[17]??null,
            'ffrata_rata' => $row[18]??null,
            'arah_terbanyak' => $row[19]??null,
            'dd' => $row[20]??null,
            'ffmax' => $row[21]??null,
            'arah' => $row[22]??null,
            'ddmax' => $row[23]??null
            
        ]);
    }
}
