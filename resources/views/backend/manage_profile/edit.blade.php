@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add User</h4><br>
                        <hr>
                        <form method="post" action="{{ route('manage.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $editData->name }}">
                                        </div>
                                        <br>


                                    </div>



                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $editData->email }}">
                                            <br>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Mobile</label>
                                            <input type="text" class="form-control" name="mobile"
                                                value="{{ $editData->mobile }}">
                                            <br>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender </label>
                                            <select class="form-select" name="gender">
                                                <option selected="" disabled="" value="">Select Gender
                                                <option value="Male" {{ ($editData->gender =="Male"?"selected":"")
                                                    }}>Male</option>
                                                <option value="Female" {{ ($editData->gender =="female"?"selected":"")
                                                    }}>Female
                                                </option>
                                            </select>
                                            <br>


                                        </div>
                                    </div>

                                    <div class="col-12 ">
                                        <div class="mb-3">
                                            <label class="form-label"> Address</label>
                                            <input type="text" id="address" name="address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="mb-3">
                                            <label class="form-label">Profile Image</label>
                                            <div class="input-group input-group-merge">

                                                <input type="file" id="image" name="image" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="mb-3">
                                            <div class="input-group input-group-merge">
                                                <img src="{{ (!empty($editData->image))? url('uploads/user_images/'.$editData->image):url('uploads/no_image.jpg')}}"
                                                    width="100px" id="showImage">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                    value="Submit" style="width: 120px">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->


        </div>
    </div>
</div>
@endsection