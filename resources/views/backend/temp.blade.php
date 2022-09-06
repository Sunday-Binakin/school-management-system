<button id="btnGroupVerticalDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Dropdown <i class="mdi mdi-chevron-down"></i>
</button>
<div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" style="">
    <a class="dropdown-item" href="#">Dropdown link</a>
    <a class="dropdown-item" href="#">Dropdown link</a>
</div>


<div class="btn-group show">
    <button class="btn btn-rounded btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
        aria-expanded="true">Activity</button>
    <div class="dropdown-menu show" x-placement="bottom-start"
        style="position: absolute; transform: translate3d(-127px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a class="dropdown-item" href="{{ route('user.edit',$users->id) }}">Edit</a>
        <a class="dropdown-item" href="{{ route('user.destroy',$users->id) }}" id="delete">Delete</a>

    </div>
</div>

div class="btn-group">
<button type="button" style="width: 100%"
    class="btn btn-primary btn-rounded waves-effect waves-light dropdown-toggle ri-edit-2-line"
    data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down"></i></i></button>
<div class="dropdown-menu">
    <a href="{{ route('user.edit',$users->id) }}" class="dropdown-item">Edit</a>
    <a href="{{ route('user.destroy',$users->id) }}" class="dropdown-item" title="Delete Data" id="delete">Delete</a>
</div>


<button class="btn btn-rounded btn-warning dropdown-toggle no-caret" type="button" data-toggle="dropdown"
    aria-expanded="true">Dropdown</button>
<div class="dropdown-menu show" x-placement="bottom-start"
    style="will-change: transform; position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px;">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
</div>

@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Manage Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                            <li class="breadcrumb-item active">View Profile </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <section class="content" <div class="row">
            <div class="col-12">
                {{-- <div class="card">
                    <div class="card-body"> --}}
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-black"
                        style="background: url({{ asset('backend/assets/images/users/avatar-1.jpg') }}) center center;">
                        <h3 class="widget-user-username">Michael Jorden</h3>
                        <h6 class="widget-user-desc">Designer</h6>
                    </div>
                    <div class="widget-user-image">
                        <img class="rounded-circle" src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}"
                            alt="User Avatar">
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">12K</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                                <div class="description-block">
                                    <h5 class="description-header">550</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">158</h5>
                                    <span class="description-text">TWEETS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </section>
        {{-- </div>
            </div> --}}
    </div>
</div>



</div>
@endsection