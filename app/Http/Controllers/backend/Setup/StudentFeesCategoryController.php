<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentFeesCategoryRequest;
use App\Models\setup\StudentFeesCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentFeesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_fees_category = StudentFeesCategory::all();
        return view('backend.setup.student.fees.index', compact('all_fees_category'));
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
    public function store(StudentFeesCategoryRequest $request)
    {
        //
        $request->validated();
        StudentFeesCategory::create([
            'name' => $request->input('name'),
            'created_at' => Carbon::now(),
        ]);
        alert()->success('Student Fees Category Added')->persistent(true, false);
        return view('backend.setup.student.fees.index');
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
    public function update(StudentFeesCategoryRequest $request, $id)
    {
        //
        $request->validates();
        StudentFeesCategory::FindOrFail($id)->update([
            'name' => $request->input('name'),
            'updated_at' => Carbon::now(),
        ]);
        toast('Student Fees Category Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.fees.category.index');
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
        StudentFeesCategory::FindOrFail($id)->delete();
        return redirect()->route('setup.student.fees.category.index');
    }
}
