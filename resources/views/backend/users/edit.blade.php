@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    {{-- <h4 class="mb-sm-0">Edit Users</h4> --}}

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit User</h4><br>
                        <hr>
                        <form method="post" action="{{ route('user.update',$editUserData->id) }}">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Role</label>
                                            <select class="form-select" name="user_type">
                                                <option selected="" disabled="" value="">Select User Role</option>
                                                <option value="Admin" {{ ($editUserData->user_type
                                                    =="Admin"?"selected":"")}}>Admin</option>
                                                <option value="User" {{ ($editUserData->user_type
                                                    =="Operator"?"selected":"")}}>Operator</option>
                                            </select>
                                            <br>
                                            <span>
                                                @error('user_type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $editUserData->name }}">
                                        </div>
                                        <br>
                                        <span>
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </span>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">User Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $editUserData->email }}">
                                            <br>
                                            <span>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>

                                {{-- </div> --}}
                                {{-- <div class="row"> --}}
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username"
                                                value="{{ $editUserData->username }}">
                                            <br>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Update" style="width: 120px">
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
