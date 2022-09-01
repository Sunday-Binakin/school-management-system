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

                        <h4 class="card-title">Buttons Example</h4>
                        {{-- <p class="card-title-desc">The Buttons extension for DataTables
                            provides a common set of options, API methods and styling to display
                            buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p> --}}

                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable-buttons"
                                        class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="datatable-buttons_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 104px;"
                                                    aria-label="Name: activate to sort column ascending">Name</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 165px; display: none;"
                                                    aria-label="Position: activate to sort column descending"
                                                    aria-sort="ascending">Position</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 71px; display: none;"
                                                    aria-label="Office: activate to sort column ascending">Office</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 27px; display: none;"
                                                    aria-label="Age: activate to sort column ascending">Age</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 67px; display: none;"
                                                    aria-label="Start date: activate to sort column ascending">Start
                                                    date</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 58px; display: none;"
                                                    aria-label="Salary: activate to sort column ascending">Salary</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="odd">
                                                <td class="dtr-control" tabindex="0">Airi Satou</td>
                                                <td class="sorting_1" style="display: none;">Accountant</td>
                                                <td style="display: none;">Tokyo</td>
                                                <td style="display: none;">33</td>
                                                <td style="display: none;">2008/11/28</td>
                                                <td style="display: none;">$162,700</td>
                                            </tr>
                                            <tr class="even">
                                                <td class="dtr-control">Garrett Winters</td>
                                                <td class="sorting_1" style="display: none;">Accountant</td>
                                                <td style="display: none;">Tokyo</td>
                                                <td style="display: none;">63</td>
                                                <td style="display: none;">2011/07/25</td>
                                                <td style="display: none;">$170,750</td>
                                            </tr>



                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>


        </div>
    </div>

    @endsection