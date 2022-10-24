@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
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
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Data Tables</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active"><a href="#">Students</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border border-primary">
                <div class="card-body">
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="card-body">
                            <h4 class="card-title">Students</h4>
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                    style="float: right; width:120px"
                                    href="{{ route('student.registration.create') }}">Add Student</a>
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
                                                        rowspan="1" colspan="1" style="width: 10%;"
                                                        aria-sort="ascending"
                                                        aria-label="Sn: activate to sort column descending">Sn

                                                    </th>

                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Name: activate to sort column ascending">

                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Username: activate to sort column ascending">

                                                        Username</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="ID: activate to sort column ascending">

                                                        ID No</th>

                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Role: activate to sort column ascending">Role

                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Year: activate to sort column ascending">Year

                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Class: activate to sort column ascending">Class

                                                    </th>
                                                    @if(Auth::user()->role == 'Admin')
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Code: activate to sort column ascending">Code

                                                    </th>
                                                    @endif

                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                        aria-label="Image: activate to sort column ascending">Image

                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable"
                                                        rowspan="1" colspan="1" style="width: 10%; display: none;"
                                                        aria-label="Action: activate to sort column ascending">

                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($all_data as $key => $student)

                                                <tr>
                                                    <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                                    <td style="display: none;">{{ $student['student']['name'] }}</td>
                                                    <td style="display: none;">{{ $student['student_year']['name'] }}</td>
                                                    <td style="display: none;">{{ $student->user}}</td>
                                                    <td style="display: none;">{{ $student->email }}</td>
                                                    <td style="display: none;">{{ $student->code }}</td>
                                                    <td div class="btn-group">
                                                        <button type="button" style="width: 100%"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light dropdown-toggle ri-edit-2-line"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-chevron-down"></i></i></button>
                                                        <div class="dropdown-menu">
                                                            <a href="{{ route('user.edit',$users->id) }}"
                                                                class="dropdown-item">Edit</a>
                                                            <a href="{{ route('user.destroy',$users->id) }}"
                                                                class="dropdown-item" title="Delete Data"
                                                                id="delete">Delete</a>
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
@endsection
