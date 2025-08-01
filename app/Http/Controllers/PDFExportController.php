<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRecord;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFExportController extends Controller
{
    public function export()
    {
        $students = StudentRecord::all();

        $pdf = PDF::loadView('pdf.students_record', compact('students'));

        return $pdf->download('student_records.pdf');
    }
}
