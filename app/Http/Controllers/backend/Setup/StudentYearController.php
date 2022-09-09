<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentYearRequest;
use App\Models\setup\StudentYear;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_year = StudentYear::all();
        return view('backend.setup.student.year.index',compact('all_year'));
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
    public function store(StudentYearRequest $request)
    {
        // Retrieve the validated input data...
        $request->validated();
        StudentYear::create([
            'name'=>$request->input('name'),
            'created_at'=>Carbon::now(),
        ]);
        alert()->success('Student Year Added')->persistent(true, false);
        return redirect()->route('setup.student.year.index');
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
    public function update(StudentYearRequest $request, $id)
    {
        // Retrieve the validated input data...
        $request->validated();
        StudentYear::FindOrFail($id)->update([
            'name' => $request->input('name'),
            'updated_at' => Carbon::now(),
        ]);
        toast('Student Year Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.year.index');
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
        StudentYear::FindOrFail($id)->delete();
        return redirect()->route('setup.student.year.index');
    }
}
