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
                        <form method="post" action="{{ route('user.store') }}">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Class Name</label>
                                            <select class="form-select" name="user_type">
                                                <option selected="" disabled="" value="">Select User Role
                                                </option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                            </select>
                                            <br>
                                            <span>
                                                @error('user_type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    {{-- <div class="addNewRow"> --}}
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Student Subject</label>
                                            <select class="form-select" name="user_type">
                                                <option selected="" disabled="" value="">Select User Role
                                                </option>
                                                <option value="Admin">Admin</option>
                                                <option value="User">User</option>
                                            </select>
                                            <span>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Full Mark</label>
                                            <input type="email" class="form-control" name="email">
                                            <br>
                                            <span>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Pass Mark</label>
                                            <input type="password" class="form-control" name="password">
                                            <br>
                                            <span>
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Subjective Mark</label>
                                            <input type="email" class="form-control" name="email">
                                            <br>
                                            <span>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>

                                    <div class="col-md-2" style="padding: 25px;">
                                        <div class="mb-3">
                                            <span class="btn btn-success addRow" id="addfields">
                                                <i class="fa fa-plus-circle"></i></span>
                                            <span class="btn btn-danger deleteRow" id="addfields">
                                                <i class="fa fa-minus-circle"></i></span><br>

                                        </div>
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
<script>
    $('addNewRow').on('click','addRow',function(){
        var tr ='<div class="row">'+
            '<div class="col-md-4">'+
               '' <div class="mb-3">+
                   '<label class="form-label">Student Subject</label>'+
                    '<select class="form-select" name="user_type">'+
                        '<option selected="" disabled="" value="">Select User Role</option>'+
                        '<option value="Admin">Admin</option>'+
                        '<option value="User">User</option>'+
                    '</select>'+
                    
        
               '</div>'+
           '</div>'+
            '<div class="col-md-2">'+
                '<div class="mb-3">'+
                  ' <label class="form-label">Full Mark</label>'+
                  '<input type="email" class="form-control" name="email">'+
                '</div>'+
           ' </div>'+
            '<div class="col-md-2">'+
               '<div class="mb-3">'+
                   '<label class="form-label">Pass Mark</label>'+
                  '<input type="password" class="form-control" name="password">'+
                   
        
                '</div>'+
            '</div>'+
           '<div class="col-md-2">'+
                '<div class="mb-3">'+
                   '<label class="form-label">Subjective Mark</label>'+
                   '<input type="email" class="form-control" name="email">'+
                '</div>'+
           '</div>'+
        
            '<div class="col-md-2" style="padding: 25px;">'+
               ' <div class="mb-3">'+
                    '<span class="btn btn-success addRow" id="addfields">'+
                       '<i class="fa fa-plus-circle"></i></span>'+
                   '<span class="btn btn-danger deleteRow" id="addfields">'+
                        '<i class="fa fa-minus-circle"></i></span><br>'+
        
                '</div>'+
           '</div>'+
        '</div>';
        $('addNewRow').append(tr);
       });
       $('addNewRow').on('click','.deleteRow',function(){
        $(this).parent().parent().remove();
       })
</script>
@endsection