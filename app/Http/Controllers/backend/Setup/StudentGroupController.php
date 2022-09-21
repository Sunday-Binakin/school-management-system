<?php

namespace App\Http\Controllers\backend\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentGroupRequest;
use App\Models\Setup\StudentGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_groups = StudentGroup::all();
        return view('backend.setup.student.Group.index',compact('all_groups'));
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
    public function store(StudentGroupRequest $request)
    {
        //
        $request->validated();
        StudentGroup::create([
            'name'=>$request->input('name'),
            'created_at'=>Carbon::now(),
        ]);
        alert()->success('Group Added')->persistent(true, false);
        return redirect()->route('setup.student.group.index');
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
    public function update(StudentGroupRequest $request, $id)
    {
        //validating the form
        $request->validated();
        StudentGroup::FindOrFail($id)->update([
            'name'=>$request->input('name'),
            'updated_at'=> Carbon::now(),
        ]);
        toast('Group Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.group.index');
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
        StudentGroup::FindOrFail($id)->delete();
        return redirect()->route('setup.student.group.index');
    }
}
