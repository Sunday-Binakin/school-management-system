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
        return view('backend.setup.student.category.amount.index', compact('all_categories', 'all_classes', 'all_fees'));
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
    public function show($fee_category_id)
    {
        $fees_details = FeesCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
        return view('backend.setup.student.category.amount.show',compact('fees_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fee_category_id)
    {
        $editData = FeesCategoryAmount::where('fee_category_id', $fee_category_id)
            ->orderBy('class_id', 'asc')->get();
        $all_categories = StudentFeesCategory::all();
        $all_classes = StudentClass::all();

        return view('backend.setup.student.category.amount.edit', compact('editData', 'all_categories', 'all_classes'));
    // return view('backend.setup.student.category.amount.modal.edit', compact('all_categories', 'all_classes', 'edit_data'));
    // return view('backend.setup.student.category.amount.modal.edit', ["all_categories"=> $all_categories, "all_classes"=>$all_classes, "edit_data"=>$edit_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fee_category_id)
    {
        if ($request->class_id == null) { //checks to see if class id is not null; if nulls returns a an aleart dialog
            alert()->danger('Fees Amount can\'t be null')->persistent(true, false);
        } else {
            $countClass = count($request->class_id);
            FeesCategoryAmount::where('fee_category_id', $fee_category_id)->delete();
            for ($i = 0; $i < $countClass; $i++) {
                FeesCategoryAmount::create([
                    'fee_category_id' => $request->input('fee_category_id'),
                    'class_id' => $request->class_id[$i],
                    'amount' => $request->amount[$i],
                ]);
            }
            toast('Fees Amount Updated', 'success', 'top-right')->hideCloseButton();
        }
        return redirect()->route('setup.student.fees.category.amount.index');
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
