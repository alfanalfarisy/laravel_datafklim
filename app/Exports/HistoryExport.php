<?php

namespace App\Exports;

use App\Models\fklim;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
class HistoryExport implements FromCollection, WithMapping ,WithHeadings,ShouldAutoSize
{
    use Exportable; 
    protected $data_bulan;

    public function __construct($startdate,$enddate){
            $this->startdate=$startdate; 
            $this->enddate=$enddate;
    }

    public function map($fklim): Array
    {
            return [
            $fklim->Tahun,
            $fklim->Bulan,
            $fklim->Tanggal_1,
            $fklim->T07,
            $fklim->T13,
            $fklim->T18,
            $fklim->Trata_rata,
            $fklim->Tmax,
            $fklim->Tmin,
            $fklim->CH,
            $fklim->LPM,
            $fklim->Cuaca_Khusus,
            $fklim->QFE,
            $fklim->RH07,
            $fklim->RH13,
            $fklim->RH18,
            $fklim->Rhrata_rata,
            $fklim->ffrata_rata,
            $fklim->arah_terbanyak,
            $fklim->dd,
            $fklim->ffmax,
            $fklim->arah,
            $fklim->ddmax
            ];
    }

    public function headings(): Array
    {
        return [
            'Tahun',
            'Bulan',
            'Tanggal_1',
            'T07',
           ' T13 ',
           ' T18 ',
           ' Trata_rata ',
           ' Tmax',
           ' Tmin ',
           ' CH',
           ' LPM ',
           ' Cuaca_Khusus ',
           ' QFE ',
           ' RH07 ',
           ' RH13',
           ' RH18',
           ' Rhrata_rata ',
           ' ffrata_rata ',
           ' arah_terbanyak ',
           ' dd ',
           ' ffmax ',
           ' arah ',
           ' ddmax ',
           
        ];
    }
    public function registerEvents(): array
{
    return [
        AfterSheet ::class    => function(AfterSheet $event) {
            $cellRange = 'A1:H1'; // All headers
            $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            $to = $event->sheet->getDelegate()->getHighestRowAndColumn();
        },

    ];
}  
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
           
        $startdate=date($this->startdate);
        $enddate=date($this->enddate);
        return fklim::whereBetween('Tanggal', [$startdate, $enddate])->get();
    }
}
