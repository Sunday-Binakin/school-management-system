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
                            <li class="breadcrumb-item active">Student Class </li>
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

                                <h4 class="card-title">Student Class </h4>
                                {{-- <p class="card-title-desc">DataTables has most features enabled by
                                    default, so all you need to do to use it with your own tables is to call
                                    the construction function: <code>$().DataTable();</code>.
                                </p> --}}

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                        style="float: right; width:160px"
                                        href="{{ route('setup.student.class.create') }}" data-bs-toggle="modal"
                                        data-bs-target="#addStudenClassModal">Add Student Class</a>
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
                                                            rowspan="1" colspan="1" style="width: 10%; display: none;"
                                                            aria-label="Action: activate to sort column ascending">

                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_classes as $key=>$class )
                                                    <tr>
                                                        <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                                    
                                                    <td style="display: none;">{{ $class->name }}</td>

                                                    
                                                   <td div class="btn-group"> 
                                                        <button type="button" style="width: 100%"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light dropdown-toggle ri-edit-2-line"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-chevron-down"></i></i></button>
                                                        <div class="dropdown-menu">
                                                            <a href="{{ route('user.edit',$class->id) }}"
                                                                class="dropdown-item">Edit</a>
                                                            <a href="{{ route('user.destroy',$class->id) }}"
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

    <!-- Modal -->
    <div class="modal fade" id="addStudenClassModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        @csrf
                        <div class="row">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Student Class</label>
                                        <input type="text" class="form-control" name="class">
                                    </div>
                                    <br>
                                    <span>
                                        @error('class')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>


                            </div>


                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Add Class" style="width: 120px">
                        </div>
                    </form>

                </div>
             
            </div>
        </div>
    </div>
    @endsection