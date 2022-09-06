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
        <div class="row">
            <div class="col-12">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded-circle my-4"
                                    src="{{ (!empty($user->image))? url('uploads/user_images/'.$user->image):url('uploads/no_image.jpg')}}" height="110"
                                    width="110" alt="User avatar">
                                <div class="user-info text-center">
                                    <h5 class="mb-2">{{ $user->name }}</h5>
                                    <span class="badge bg-label-secondary">Author</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-check bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">Mobile No</h5>
                                    <span>Tasks Done</span>
                                </div>
                            </div>
                            <div class="vertical"></div>
                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">Address</h5>
                                    <span>Projects Done</span>
                                </div>
                            </div>
                            <div class="vertical"></div>
                            <div class="d-flex align-items-start mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded"><i
                                        class="bx bx-customize bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">Gender</h5>
                                    <span>Projects Doned</span>
                                </div>
                            </div>
                        </div> --}}
                        <h5 class="pb-2 border-bottom mb-4">Details</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Username:</span>
                                    <span>{{ $user->name }}</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Email:</span>
                                    <span>{{ $user->email }}</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Status:</span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Role:</span>
                                    <span>{{ $user->user_type }}</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Tax id:</span>
                                    <span>Tax-8965</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Contact:</span>
                                    <span>(123) 456-7890</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Languages:</span>
                                    <span>French</span>
                                </li>
                                <hr>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">Country:</span>
                                    <span>England</span>
                                </li>
                                <hr>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-center pt-3">
                            <a href="{{ route('manage.profile.edit') }}" class="btn btn-primary btn-rounded waves-effect waves-light me-3"
                               >Edit Profile</a>
                               {{-- data-bs-target="#editUser" data-bs-toggle="modal" --}}
                            <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection