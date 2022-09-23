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
                                <h4 class="card-title"><strong> CATEGORY :
                                    {{ Str::upper($details_data['0']['student_class']['name'])}}
                               </strong> </h4>

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                        style="float: right; width:210px" href="#" data-bs-toggle="modal"
                                        data-bs-target="#addStudentFeesCategoryAmountModal"><i
                                            class="glyphicon glyphicon-plus ">
                                            Assign Subject</i></a>
                                    <br>
                                    <br>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <table class="table table-striped ">
                                                <thead class="thead-dark">

                                                    <tr>
                                                        <th scope="col">Sn</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Full Mark</th>
                                                        <th scope="col">Pass Mark</th>
                                                        <th scope="col">Subject Mark</th>
                                                        {{-- <th scope="col">Amount</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($details_data as $key=> $details)
                                                    <tr>
                                                        <th scope="row">{{ $key+1 }}</th>
                                                        <td>{{ $details['school_subject']['name'] }}</td>
                                                        <td>{{ $details->full_mark }}</td>
<td>{{ $details->pass_mark }}</td>
                                                        <td>{{ $details->subjective_mark }}</td>
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