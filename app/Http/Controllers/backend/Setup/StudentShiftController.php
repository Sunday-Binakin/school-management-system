<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentShiftRequest;
use App\Models\setup\StudentShift;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //calling all shifts
        $all_shifts = StudentShift::all();
        return view('backend.setup.student.shift.index',compact('all_shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentShiftRequest $request)
    {
        //validating form requests
        $request->validated();

        StudentShift::create([
            'name'=>$request->input('name'),
            'created_at'=>Carbon::now(),
        ]);
        alert()->success('Student Shift Added')->persistent(true, false);
        return redirect()->route('setup.student.shift.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentShiftRequest $request, $id)
    {
        //
        $request->validated();
        StudentShift::FindOrFail($id)->update([
            'name'=>$request->input('name'),
            'updated_at'=>Carbon::now(),
        ]);
        toast('Student Shift Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.shift.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        StudentShift::FindOrFail($id)->delete();
        return redirect()->route('setup.student.shift.index');
    }
}
