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
        {{-- begin search --}}
        <div class="row">
            <div class="col-12">
                <div class="card border border-primary">
                    <div class="card-header bg-transparent border-primary">
                        <h5 class="my-0 text-primary"><i class="mdi mdi-find me-3"></i>Filter Search</h5>
                    </div>
                    <div class="card-body">

                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Year<span class="text-danger"></span></label>
                                        <select class="form-select" name="year_id">
                                            <option>Select Year</option>
                                            @foreach ($years as $year)
                                            <option value="{{ $year->id }}">{{ $year->name }}</option>

                                            @endforeach


                                        </select>
                                        <br>
                                        <span>
                                            @error('year_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Class<span class="text-danger"></span></label>
                                        <select class="form-select" name="class_id">
                                            <option>Select Class</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <span>
                                        @error('class_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3" style="padding-top: 25px">
                                        <button type="button"
                                            class="btn btn-primary btn-rounded waves-effect waves-light"
                                            style="width: 100px">Search</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end search --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="card-body">
                            {{--
                            <hr> --}}

                            <h5 class="my-0 text-primary"><i class="mdi mdi-find me-3"></i>Students</h5>
                            {{-- <p class="card-title-desc">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p> --}}

                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                    style="float: right; width:210px"
                                    href="{{ route('student.registration.create') }}"><i
                                        class="glyphicon glyphicon-plus ">
                                        Add Student</i></a>
                                <br>
                                <br>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>ID No</th>
                                                    <th>Role</th>
                                                    <th>Year</th>
                                                    <th>Class</th>
                                                    <th>Code</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_data as $key => $value)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    {{-- <td>it works</td>
                                                    <td>it works</td>
                                                    <td>it works</td>
                                                    <td>it works</td>
                                                    <td>it works</td> --}}
                                                    <td>{{ $value['student']['name'] }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value['student']['id_no'] }}</td>
                                                    <td>{{ $value['student']['role'] }}</td>
                                                    <td>{{ $value['student_year']['name'] }}</td>
                                                    <td>{{ $value['student_class']['name'] }}</td>
                                                    <td>{{ $value['student']['code'] }}</td> 
                                                    <td>
                                                        <img src="{{ (!empty($value['student']['image'])) ? url('upload/student_images/' . $value['student']['image']) : url('upload/no_image.jpg') }}"
                                                            alt="Student Image"
                                                            style="width: 100px; height: 100px; border: 1px solid #000000">
                                                    </td>
                                                    <td>
                                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                                            <a href="#"
                                                             {{-- data-bs-toggle="modal" --}} {{--
                                                                data-bs-target="#editStudentFeesCategoryAmountModal{{ $amount->fee_category_id }}"
                                                                --}}
                                                                class="btn btn-primary waves-light waves-effect"
                                                                style="width: 70px"><i class="ri-edit-box-line"></i></a>

                                                            <a href="#"
                                                                class="btn btn-secondary waves-light waves-effect"
                                                                style="width: 70px"><i class=" mdi mdi-eye"
                                                                    type="button"></i></a>
                                                        </div>

                                                    </td>
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
{{-- @include('backend.setup.student.category.amount.modal.create') --}}
{{--
<!--hidden input form-!> --}}
    @endsection
