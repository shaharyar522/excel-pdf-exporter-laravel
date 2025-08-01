<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentRecordController;
use Illuminate\Support\Facades\Route;
use App\Exports\StudentsExport;
use App\Http\Controllers\PDFExportController;
use Maatwebsite\Excel\Facades\Excel;



Route::get('/', [StudentRecordController::class, 'index'])->name('home');
Route::post('/studentrecord/store', [StudentRecordController::class, 'store'])->name('studentrecord.store');


//excle
Route::get('/export-students', function () {
    return Excel::download(new StudentsExport, 'student_records.xlsx');
})->name('export.studentsrecord');


//pdf
Route::get('/export-pdf', [PDFExportController::class, 'export'])->name('export.pdf');












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
