<?php

namespace App\Exports;

use App\Models\StudentRecord;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
//note SholdAutoSize  uay excel main colom main jtini characther ki width hnti hian utin show  karti hian
class StudentsExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
   public function collection()
    {
        return StudentRecord::select('name', 'email', 'class', 'roll_number', 'marks', 'gender', 'dob')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Class',
            'Roll Number',
            'Marks',
            'Gender',
            'Date of Birth',
        ];
    }
     
}
