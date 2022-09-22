<?php

namespace App\Http\Controllers\backend\Setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignSubjectRequest;
use App\Models\Setup\AssignSubject;
use App\Models\setup\FeesCategoryAmount;
use App\Models\Setup\StudentClass;
use Illuminate\Http\Request;
use App\Models\setup\StudentSubject;
use Carbon\Carbon;

class AssignSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //displaying all data in the index page
        $data['all_data'] = AssignSubject::select('class_id')->groupBy('class_id')->get();

        return view('backend.setup.student.assign_subject.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['subjects'] = StudentSubject::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.student.assign_subject.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignSubjectRequest $request)
    {
        //
        $subject_count = count($request->input('subject_id'));
        if ($subject_count != NULL) {
            for ($i = 0; $i < $subject_count; $i++) {
                AssignSubject::create([
                    'class_id' => $request->input('class_id'),
                    'subject_id' => $request->subject_id[$i],
                    'full_mark' => $request->full_mark[$i],
                    'pass_mark' => $request->pass_mark[$i],
                    'subjective_mark' => $request->subjective_mark[$i],
                    'created_at'=>Carbon::now()
                ]);
            }
        }

        alert()->success('Marks Added')->persistent(true, false);
        return redirect()->route('setup.student.assign.subject.index');
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
    public function edit($class_id)
    {
        //   
        $data['edit_data'] = AssignSubject::where('class_id',$class_id)->orderBy('subject_id','asc')->get();
        $data['subjects'] = StudentSubject::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.student.assign_subject.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
