<!-- Add Modal -->
<div class="modal fade" id="addStudentFeesCategoryAmountModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Shift</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('setup.student.fees.category.amount.store') }}">
                    @csrf
                    <div class="row">
                        <div class="add_item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Fee Category</label>
                                        <select class="form-select" name="fee_category_id">
                                            <option selected="" disabled="" value="">Select Fee Category</option>
                                            @foreach ($all_categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <br>


                                    </div>
                                </div>
                            </div>

                            {{-- <div style="visibility: hidden">
                                <div class="whole_extra_item_add" id="whole_extra_item_add">
                                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add"> --}}



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
                                        <span class="btn btn-success addeventmore"><i
                                                class="fa fa-plus-circle"></i></span><br>
                                        {{-- <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-md-1" style="padding: 25px;">
                                    <div class="mb-3">
                                        {{-- <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span><br> --}}
                                {{-- <span class="btn btn-danger removeeventmore"><i
                                                class="fa fa-minus-circle"></i></span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Submit" style="width: 150px">
                        </div>
                    </div>
                </form>
                {{-- <div style="visibility: hidden">
                    <div class="whole_extra_item_add" id="whole_extra_item_add">
                        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">



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
                                        <span class="btn btn-success addeventmore"><i
                                                class="fa fa-plus-circle"></i></span><br>
                                        {{-- <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span> --}}
                                    {{-- </div>
                                </div>
                                <div class="col-md-1" style="padding: 25px;">
                                    <div class="mb-3">
                                        {{-- <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span><br> --}}
                                        {{-- <span class="btn btn-danger removeeventmore"><i
                                                class="fa fa-minus-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{-- </div> --}} 
            </div>
        </div>
        </div>
        </div>
        


        @if (count($errors) > 0)
        <script type="text/javascript">
            $( document ).ready(function() {
             $('#addStudentFeesCategoryAmountModal').modal('show');
        });
        </script>
        @endif

        <script type="text/javascript">
            $(document).ready(function(){
    var counter = 0;
    $(document).on("click",".addeventmore",function(){
        var whole_extra_item_add = $('#whole_extra_item_add').html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
    });
    $(document).on("click",".removeeventmore",function(){
        $(this).closest(".delete_whole_extra_item_add")remove();
counter -= 1
    });
});
        </script>