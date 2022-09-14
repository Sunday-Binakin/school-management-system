<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeesAmountRequest;
use App\Models\setup\FeesCategoryAmount;
use App\Models\Setup\StudentClass;
use App\Models\setup\StudentFeesCategory;
use Illuminate\Http\Request;

class FeesCategoryAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_categories = StudentFeesCategory::all();
        $all_classes = StudentClass::all();
        // $all_fees = FeesCategoryAmount::all();
        $all_fees = FeesCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get(); // to display the name associated with this
        // id you need to create the relationship in the model
        return view('backend.setup.student.category.amount.index',compact('all_categories','all_classes', 'all_fees'));
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
    public function store(FeesAmountRequest $request)
    {
        //
        $count_class = count($request->class_id);
        if ($count_class != NULL) { //counts the number of class id's selected 
            for ($i = 0; $i < $count_class; $i++) {
                FeesCategoryAmount::create([
                    'fee_category_id' => $request->input('fee_category_id'),
                    'class_id' => $request->class_id[$i],
                    'amount' => $request->amount[$i],
                ]);
            }
        }
        alert()->success('Fees Amount Added')->persistent(true, false);
        return redirect()->route('setup.student.fees.category.amount.index');
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
