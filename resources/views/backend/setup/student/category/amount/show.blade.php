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

                                {{-- <h4 class="card-title">Student Fees Category Amount </h4> --}}
                               <h4 class="card-title"> FEE CATEGORY : {{ Str::upper($fees_details['0']['fee_category']['name'])}}</h4>

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                        style="float: right; width:210px" href="#" data-bs-toggle="modal"
                                        data-bs-target="#addStudentFeesCategoryAmountModal"><i
                                            class="glyphicon glyphicon-plus ">
                                            Add Fees Amount</i></a>
                                    <br>
                                    <br>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <table class="table table-striped">
                                                <thead>
                                                
                                                    <tr>
                                                        <th scope="col">Sn</th>
                                                        <th scope="col">Class Name</th>
                                                        <th scope="col">Class id</th>
                                                       
                                                        <th scope="col">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($fees_details as $key=> $details)
                                                      <tr>
                                                        <th scope="row">{{ $key+1 }}</th>
                                                        <td>{{ $details['student_class']['name'] }}</td>
                                                        <td>{{ $details->class_id }}</td>
                                                        
                                                        <td>{{ $details->amount }}</td>
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


    @endsection