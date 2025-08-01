<?php

namespace App\Http\Controllers;

use App\Models\StudentRecord;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentrecord = StudentRecord::all();
        return view('dashboard',compact('studentrecord'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:student_records,email',
            'class' => 'required|string|max:50',
            'roll_number' => 'required|integer|unique:student_records,roll_number',
            'marks' => 'required|integer|min:0|max:100',
            'gender' => 'nullable|in:male,female,other',
            'dob' => 'nullable|date',
        ]);

        StudentRecord::create([
        'name' => $request->name,
        'email' => $request->email,
        'class' => $request->class,
        'roll_number' => $request->roll_number,
        'marks' => $request->marks,
        'gender' => $request->gender,
        'dob' => $request->dob,
    ]);

    return redirect()->back()->with('success', 'Student record saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentRecord $studentRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentRecord $studentRecord)
    {
        //
    }
}
