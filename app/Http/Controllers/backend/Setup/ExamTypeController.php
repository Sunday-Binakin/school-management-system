<?php

namespace App\Http\Controllers\backend\Setup;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Setup\ExamType;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamTypeRequest;

class ExamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = ExamType::all();
        return view('backend.setup.student.exam.index', compact('all_data'));
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
    public function store(ExamTypeRequest $request)
    {
        //
        $request->validated();
        ExamType::create([
            'name' => $request->input('name'),
            'created_at' => Carbon::now(),
        ]);


        alert()->success('Exam Type Added')->persistent(true, false);
        return redirect()->route('setup.student.exam.type.index');
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
    public function update(ExamTypeRequest $request, $id)
    {
        $request->validated();
        ExamType::FindOrFail($id)->update([
            'name' => $request->input('name'),
            'updated_at' => Carbon::now(),
        ]);
        toast('Exam Type Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.exam.type.index');
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
        ExamType::FindOrFail($id)->delete();
        return redirect()->route('setup.student.exam.type.index');
    }
}
