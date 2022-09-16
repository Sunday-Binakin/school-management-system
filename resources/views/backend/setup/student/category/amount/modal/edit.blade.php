<!-- Edit Modal -->
<div class="modal fade" id="editStudentFeesCategoryAmountModal{{ $amount->fee_category_id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student Fees Amount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="">
                    @csrf
                    <div class="row">
                        <div class="add_item" id="add_item">
                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Fee Category</label>
                                        <select class="form-select" name="fee_category_id">
                                            <option selected="" disabled="" value="">Select Fee Category</option>
                                            @foreach ($all_categories as $category)
                                            <option value="{{ $category->id }}" {{ ($edit_data['0']->fee_category_id ==$category->id)? "selected":"" }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                    
                    
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Student Class</label>
                                        <select class="form-select" name="class_id[]">
                                            <option selected="" disabled="" value="">Select Student Class
                                            </option>
                                            @foreach ($all_classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" name="amount[]">
                                    </div>
                                </div>
                                <div class="col-md-1" style="padding: 25px;">
                                    <div class="mb-3">
                                        <span class="btn btn-success" id="addfields"><i class="fa fa-plus-circle"></i></span><br>
                                        {{-- <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span> --}}
                                    </div>
                                </div>
                            </div>
                            <div id="fieldlist"></div>
                            <!--hidden input-->
                            <div id="showfields" style="display: none;">
                    
                                <div class="add_input_fields" id="add_input_fields">
                                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label class="form-label">Student Class</label>
                                                    <select class="form-select" name="class_id[]">
                                                        <option selected="" disabled="" value="">Select Student Class</option>
                                                        @foreach ($all_classes as $class)
                                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount[]">
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="padding: 25px;">
                                                <div class="mb-3">
                                                    <span class="btn btn-success " id="addfields"><i
                                                            class="fa fa-plus-circle"></i></span><br>
                    
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="padding: 25px;">
                                                <div class="mb-3">
                    
                                                    <span class="btn btn-danger" id="removefields"><i class="fa fa-minus-circle"></i></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                            <!--end of hidden input-->
                        </div>
                        <br>
                    
                        <div class="mb-3">
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" value="Submit"
                                style="width: 150px">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>