@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Assign Subject</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setup</a></li>
                            <li class="breadcrumb-item active">Assign Subject</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Assign Subject</h4><br>
                        <hr>
                        <form method="post" action="{{ route('user.store') }}">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Class Name<span class="text-danger">*</span></label>
                                            <select class="form-select" name="class_id">

                                                <option selected="" disabled="" value="">Select Class </option>
                                                @foreach ( $classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                                
                                               
                                            </select>
                                            <br>
                                            <span>
                                                @error('class_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>

                                </div>
                                <div class="row fieldGroup">

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Student Subject</label>
                                            <select class="form-select" name="subject_id[]">
                                                <option selected="" disabled="" value="">Select Subject</option>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                                
                                                
                                            </select>
                                            <span>
                                                @error('subject_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Full Mark</label>
                                            <input type="email" class="form-control" name="full_mark[]">
                                            <br>
                                            <span>
                                                @error('full_mark')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Pass Mark</label>
                                            <input type="text" class="form-control" name="pass_mark[]">
                                            <br>
                                            <span>
                                                @error('pass_mark')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label">Subjective Mark</label>
                                            <input type="text" class="form-control" name="subjective_mark[]">
                                            <br>
                                            <span>
                                                @error('subjective_mark')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </span>

                                        </div>
                                    </div>

                                    <div class="col-md-2" style="padding: 25px;">
                                        <div class="mb-3">
                                            <span class="btn btn-success addMore" id="addfields">
                                                <i class="fa fa-plus-circle"></i></span>
                                            {{-- <span class="btn btn-danger deleteRow" id="addfields">
                                                <i class="fa fa-minus-circle"></i></span><br> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- hidden input --}}
                        <div class="row fieldGroupCopy" style="display: none">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Student Subject</label>
                                    <select class="form-select" name="subject_id[]">
                                        <option selected="" disabled="" value="">Select Subject</option>
                                        @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                    </select>
                                    <span>
                                        @error('class_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Full Mark</label>
                                    <input type="text" class="form-control" name="full_mark[]">
                                    <br>
                                    <span>
                                        @error('full_mark')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Pass Mark</label>
                                    <input type="text" class="form-control" name="pass_mark[]">
                                    <br>
                                    <span>
                                        @error('pass_mark')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Subjective Mark</label>
                                    <input type="text" class="form-control" name="subjective_mark[]">
                                    <br>
                                    <span>
                                        @error('subjective_mark')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>

                            <div class="col-md-2" style="padding: 25px;">
                                <div class="mb-3">
                                    {{-- <span class="btn btn-success addRow" id="addfields">
                                        <i class="fa fa-plus-circle"></i></span> --}}
                                    <span class="btn btn-danger remove" id="addfields">
                                        <i class="fa fa-minus-circle"></i></span><br>

                                </div>
                            </div>
                        </div>
                        {{-- end of hidden input --}}



                        <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" value="Submit"
                            style="width: 120px">
                    </div>
                </div>
                <br>

            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->


</div>


<script>
    $(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
    if($('body').find('.fieldGroup').length < maxGroup){ var fieldHTML='<div class="row fieldGroup">'
        +$(".fieldGroupCopy").html()+'</div>';
        $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
        alert('Maximum '+maxGroup+' groups are allowed.');
        }
        });
    
        //remove fields group
        $("body").on("click",".remove",function(){
        $(this).parents(".fieldGroup").remove();
        });
        });
</script>
@endsection