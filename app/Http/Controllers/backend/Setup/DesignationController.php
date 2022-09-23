<?php

namespace App\Http\Controllers\backend\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesignationRequest;
use App\Models\Setup\Designation;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_designations'] = Designation::all();
        return view('backend.setup.student.designation.index',$data);
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
    public function store(DesignationRequest $request)
    {
        //
        $request->validated();
        Designation::create([
            'name'=>$request->input('name')
        ]);
        alert()->success('Designation Added')->persistent(true, false);
        return redirect()->route('setup.student.designation.index');
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
    public function update(DesignationRequest $request, $id)
    {
        //
        $request->validated();
        Designation::FindOrFail($id)->update([
            'name' => $request->input('name')
        ]);
        toast('Designation Updated', 'success', 'top-right')->hideCloseButton();
        return redirect()->route('setup.student.designation.index');
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
        Designation::FindOrFail($id)->delete();
        return redirect()->route('setup.student.designation.index');
    }
}
