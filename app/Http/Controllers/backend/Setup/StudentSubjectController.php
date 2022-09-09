<?php

namespace App\Http\Controllers\backend\setup;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\setup\StudentSubject;
use App\Http\Requests\StudentSubjectRequest;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_subjects = StudentSubject::all();
        return view('backend.setup.student.subject.index',compact('all_subjects'));
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
    public function store(StudentSubjectRequest $request)
    {
        // Retrieve the validated input data...
        $request->validated();

        StudentSubject::create([
            'name'=>$request->input('name'),
            'created_at' => Carbon::now(),
        ]);
        alert()->success('Student Subject Added')->persistent(true, false);
        return redirect()->route('setup.student.subject.index');
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
    public function update(StudentSubjectRequest $request, $id)
    {
        //
        $request->validated();
        StudentSubject::FindOrFail($id)->update([
            'name'=>$request->input('name'),
            'updated_at'=>Carbon::now(),
        ]);
        toast('Student Subject Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.subject.index');
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
        StudentSubject::FindOrFail($id)->delete();
        return redirect()->route('setup.student.subject.index');

    }
}
