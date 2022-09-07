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



@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="editUserForm" class="row g-3 " action="{{ route('manage.profile.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12 col-md-6 ">
                                <label class="form-label">User Name</label>
                                <input type="text" name="name" value="{{ $editData->name }}" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label class="form-label">User Email</label>
                                <input type="text" id="email" name="email" value="{{ $editData->email }}"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">User Mobile</label>
                                <input type="text" id="mobile" name="mobile" value="{{ $editData->mobile }}"
                                    class="form-control">
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label">User Gender</label>
                                <select id="gender" name="gender" class="form-select"
                                    aria-label="Default select example">
                                    <option selected="">Gender</option>
                                    <option value="Male" {{ ($editData->gender =="Male"?"selected":"") }}>Male</option>
                                    <option value="Female" {{ ($editData->gender =="female"?"selected":"") }}>Female
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 ">
                                <label class="form-label"> Address</label>
                                <input type="text" id="address" name="address" value="{{ $editData->address }}"
                                    class="form-control ">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label">Profile Image</label>
                                <div class="input-group input-group-merge">

                                    <input type="file" id="image" name="image" class="form-control ">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="input-group input-group-merge">
                                    <img src="{{(!empty($editData->image))? url('uploads/user_images/'.$editData->image):url('uploads/no_image.jpg') }}"
                                        width="100px" id="showImage">
                                </div>
                            </div>
                            <br>
                        </form>
                        <div class="col-12  mt-4">
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Update" style="width: 120px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection