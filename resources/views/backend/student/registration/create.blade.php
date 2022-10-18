@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    {{-- <h4 class="mb-sm-0">Student</h4> --}}

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
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
                        <h4 class="card-title">Add Student</h4>

                        <hr>
                        <form method="post" action="{{ route('student.registration.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Student's Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" required="">
                                            <br>
                                            <span>
                                                @error('role')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Father's Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="father_name" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('father_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Mother's Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="mother_name" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('mother_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Mobile Number<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="mobile" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('mobile')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Address<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="address" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                                            <select class="form-select" name="gender" required="">
                                                <option selected="" disabled="" value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <br>
                                            <span>
                                                @error('gender')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Religion<span class="text-danger">*</span></label>
                                            <select class="form-select" name="role">
                                                <option selected="" disabled="" value="">Select Religion</option>
                                                <option value="Admin">Christian</option>
                                                <option value="Operator">Muslim</option>
                                            </select>
                                            <br>
                                            <span>
                                                @error('role')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Date Of Birth<span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="dob" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('dob')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Discount<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="discount" required="">
                                        </div>
                                        <br>
                                        <span>
                                            @error('discount')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Year<span class="text-danger">*</span></label>
                                            <select class="form-select" name="year_id">
                                                <option>Select Year</option>
                                                @foreach ($years as $year)
                                                <option value="{{ $year->id }}">{{ $year->name }}</option>

                                                @endforeach


                                            </select>
                                            <br>
                                            <span>
                                                @error('role')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Class<span class="text-danger">*</span></label>
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
                                        <div class="mb-3">
                                            <label class="form-label">Group<span class="text-danger">*</span></label>
                                            <select class="form-select" name="group_id">
                                                <option>Select Group</option>
                                                @foreach ($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <span>
                                            @error('group_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Shift<span class="text-danger">*</span></label>
                                            <select class="form-select" name="shift_id">
                                                <option>Select Shift</option>
                                                @foreach ($shifts as $shift)
                                                <option value="{{ $shift->id }}">{{ $shift->name }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <span>
                                                @error('role')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Profile Picture</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="image" name="cover_image" type="file">
                                                    <br>
                                                    @error('cover_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div> <!-- end row -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-form-label"></label>

                                            <div class="col-sm-12">
                                                <img id="showImage" class="rounded avatar-lg"
                                                    src="{{ url('uploads/no_image.jpg') }}" alt="Card image cap" style="width: 100px; height: 70px">
                                            </div>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Submit" style="width: 120px">
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end card -->
</div> <!-- end col -->


</div>
</div>
</div>
@endsection
