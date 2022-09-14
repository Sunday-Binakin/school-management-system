@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Setup Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setup</a></li>
                            <li class="breadcrumb-item active">Student Fees Category Amount </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="card-body">
                                {{-- <hr> --}}

                                <h4 class="card-title">Student Fees Category Amount </h4>
                                {{-- <p class="card-title-desc">DataTables has most features enabled by
                                    default, so all you need to do to use it with your own tables is to call
                                    the construction function: <code>$().DataTable();</code>.
                                </p> --}}

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                        style="float: right; width:210px" href="#" data-bs-toggle="modal"
                                        data-bs-target="#addStudentFeesCategoryAmountModal"><i class="glyphicon glyphicon-plus ">
                                            Add Fees  Amount</i></a>
                                    <br>
                                    <br>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable"
                                                class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                                style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 5%;"
                                                            aria-sort="ascending"
                                                            aria-label="Sn: activate to sort column descending">Sn

                                                        </th>

                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 20%; display: none;"
                                                            aria-label="Amount: activate to sort column ascending">

                                                            Fee Category </th>
                                                        {{-- <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 20%; display: none;"
                                                            aria-label="Created: activate to sort column ascending">

                                                            Date Created</th> --}}


                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 3%; display: none;"
                                                            aria-label="Action: activate to sort column ascending">

                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($all_fees as $key=>$amount )
                                                    <tr>
                                                        <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                                    <td style="display: none;">{{ $amount['fee_category']['name']}}</td>
                                                    {{-- <td style="display: none;">
                                                        {{ $amount->updated_at->diffForHumans() }}
                                                    </td> --}}
                                                    <td>
                                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#editStudentFeesCategoryAmountModal{{ $amount->id }}"
                                                                class="btn btn-primary waves-light waves-effect"
                                                                style="width: 70px"><i class="ri-edit-box-line"></i></a>

                                                            <a href="#"
                                                                class="btn btn-danger waves-light waves-effect"
                                                                id="delete" style="width: 70px"><i
                                                                    class="far fa-trash-alt" type="button"></i></a>
                                                        </div>

                                                    </td>
                                                    <!-- Edit Modal -->
                                                   @include('backend.setup.student.category.amount.modal.edit')
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    @include('backend.setup.student.category.amount.modal.create')
    {{-- <!--hidden input form-!> --}}
    {{-- <div style="visibility: hidden;">
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
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span><br>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                        </div>
                    </div>
                    <div class="col-md-1" style="padding: 25px;">
                        <div class="mb-3">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span><br>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <!end hidden form-!> --}}
    {{-- <script type="text/javascript">
        $(document).ready(function(){ 
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click",".removeeventmore",function(){
            $(this).closest(".delete_whole_extra_item_add")remove();
    counter--;
        });
    });
    </script> --}}

    @endsection