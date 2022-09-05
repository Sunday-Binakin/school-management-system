@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Tables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Users Tables</li>
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

                                <h4 class="card-title">User's List</h4>
                                {{-- <p class="card-title-desc">DataTables has most features enabled by
                                    default, so all you need to do to use it with your own tables is to call
                                    the construction function: <code>$().DataTable();</code>.
                                </p> --}}

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-rounded  btn-primary mb-7" style="float: right">Add User</a>
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
                                                            aria-label="Role: activate to sort column ascending">Role

                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                            aria-label="Name: activate to sort column ascending">

                                                            Name</th>

                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 30%; display: none;"
                                                            aria-label="Email: activate to sort column ascending">Email

                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 10%; display: none;"
                                                            aria-label="Action: activate to sort column ascending">

                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allUsers as $key=>$users )
                                                    <tr>
                                                        <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                                        <td style="display: none;">{{ $users->user_type }}</td>
                                                        <td style="display: none;">{{ $users->name }}</td>

                                                        <td style="display: none;">{{ $users->email }}</td>
                                                        <td div class="btn-group">
                                                            <button type="button" style="width: 100%"
                                                                class="btn btn-primary dropdown-toggle ri-edit-2-line"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="mdi mdi-chevron-down"></i></i></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item">Edit</a>
                                                                <a class="dropdown-item" title="Delete Data"
                                                                    id="delete">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div </div>

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