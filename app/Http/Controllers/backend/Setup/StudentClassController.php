<?php

namespace App\Http\Controllers\backend\Setup;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Setup\StudentClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeStudentClassRequest;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_classes = StudentClass::all();
        // $edit_student_class = StudentClass::FindOrFail($id);
        return view('backend.setup.student.index', compact('all_classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('backend.setup.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeStudentClassRequest $request)
    {
        // Retrieve the validated input data...
        $request->validated();
        StudentClass::create([
            'name'=>$request->input('name'),
            'created_at' => Carbon::now(),
        ]);
        alert()->success('Student Class Added')->persistent(true, false);
        return redirect()->route('setup.student.class.index');
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
        // $edit_student_class = StudentClass::FindOrFail($id);
        // return  view('backend.setup.student.modal.edit',compact('edit_student_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeStudentClassRequest $request, $id)
    {
        // Retrieve the validated input data...
        $request->validated();
        StudentClass::FindOrFail($id)->update([
            'name'=>$request->input('name'),
            'updated_at' => Carbon::now(),
        ]);
        toast('Student Class Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentClass::FindOrFail($id)->delete();
        
        return redirect()->route('setup.student.class.index');
    }
}
