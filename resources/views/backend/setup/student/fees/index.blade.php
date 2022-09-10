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
                            <li class="breadcrumb-item active">Student Fees Category </li>
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

                                <h4 class="card-title">Student Fees Category </h4>
                                {{-- <p class="card-title-desc">DataTables has most features enabled by
                                    default, so all you need to do to use it with your own tables is to call
                                    the construction function: <code>$().DataTable();</code>.
                                </p> --}}

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light"
                                        style="float: right; width:210px" href="#" data-bs-toggle="modal"
                                        data-bs-target="#addStudentFeesCategoryModal">Add Student Fees Category</a>
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
                                                            aria-label="Category: activate to sort column ascending">

                                                            Category</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 20%; display: none;"
                                                            aria-label="Created: activate to sort column ascending">

                                                            Date Created</th>


                                                        <th class="sorting" tabindex="0" aria-controls="datatable"
                                                            rowspan="1" colspan="1" style="width: 3%; display: none;"
                                                            aria-label="Action: activate to sort column ascending">

                                                            Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_fees_category as $key=>$fees )
                                                    <tr>
                                                        <td class="sorting_1 dtr-control">{{ $key+1 }}</td>
                                                        <td style="display: none;">{{ $fees->name }}</td>
                                                        <td style="display: none;">
                                                            {{ $fees->updated_at->diffForHumans() }}
                                                        </td>
                                                        <td>
                                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#editStudentFeesCategoryModal{{ $fees->id }}"
                                                                    class="btn btn-primary waves-light waves-effect"
                                                                    style="width: 70px"><i
                                                                        class="ri-edit-box-line"></i></a>

                                                                <a href="{{ route('setup.student.fees.category.destroy',$fees->id) }}"
                                                                    class="btn btn-danger waves-light waves-effect"
                                                                    id="delete" style="width: 70px"><i
                                                                        class="far fa-trash-alt" type="button"></i></a>
                                                            </div>

                                                        </td>
                                                        <!-- Edit Modal -->
                                                        @include('backend.setup.student.fees.modal.edit')
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
    @include('backend.setup.student.fees.modal.create')


    @endsection