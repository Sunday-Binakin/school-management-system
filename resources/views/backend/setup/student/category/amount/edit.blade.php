@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Fees Amount</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Fees Amount</h4><br>
                        <hr>
                        <form method="post" action="">
                            @csrf
                            <div class="row">
                                <div class="add_item" id="add_item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Fee Category</label>
                                                <select class="form-select" name="fee_category_id">
                                                    <option selected="" disabled="" value="">Select Fee Category
                                                    </option>
                                                    @foreach ($all_categories as $category)
                                                    <option value="{{ $category->id }}" {{ ($editData['0']->
                                                        fee_category_id ==$category->id)?
                                                        "selected":"" }}>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                <br>


                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($editData as $edit)
                                    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label class="form-label">Student Class</label>
                                                    <select class="form-select" name="class_id[]">
                                                        <option selected="" disabled="" value="">Select Student Class
                                                        </option>
                                                        @foreach ($all_classes as $class)
                                                        <option value="{{ $class->id }}" {{ ($edit->class_id ==
                                                            $class->id)? "selected": "" }}>{{ $class->name
                                                            }}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mb-3">
                                                    <label class="form-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount[]"
                                                        value="{{ $edit->amount }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding: 25px; float: right;">
                                                <div class="mb-3 mr-5">
                                                    <span class="btn btn-success addeventmore" id="addfields"><i
                                                            class="fa fa-plus-circle"></i></span>
                                                    <span class="btn btn-danger removeeventmore" id="removefields"><i
                                                            class="fa fa-minus-circle"></i></span>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-1" style="padding: 25px;">
                                            <div class="mr-3">
                                                <span class="btn btn-success" id="addfields"><i class="fa fa-plus-circle"></i></span><br> --}}
                                            {{-- <div class="btn btn-danger removeeventmore" id="removefields"><i class="fa fa-minus-circle"></i></div>
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                    @endforeach



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
                                                                <option selected="" disabled="" value="">Select Student
                                                                    Class</option>
                                                                @foreach ($all_classes as $class)
                                                                <option value="{{ $class->id }}">{{ $class->name }}
                                                                </option>
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

                                                            <span class="btn btn-danger" id="removefields"><i
                                                                    class="fa fa-minus-circle"></i></span>
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
                                    <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                        value="Submit" style="width: 150px">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->


    </div>
</div>
{{-- </div> --}}
{{-- <script type="text/javascript">
    $('#addfields').click(
    function(){
 
// e.preventDefault();
// if(x<max_fields){ 
//     x++;
    

    $('#showfields').show();
// }
   
    });
    $('#removefields').click(
    function(){
    $('#showfields').hide();
    });
    
</script> --}}
<script type="text/javascript">
    $(document).ready(function(){ 
        var counter = 0;
        $(document).on("click",".addfields",function(){
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click",".removefields",function(){
            $(this).closest(".delete_whole_extra_item_add")remove();
    counter-= 1
        });
    });
</script>
@endsection