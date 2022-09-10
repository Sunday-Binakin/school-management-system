<!-- Add Modal -->
<div class="modal fade" id="addStudentFeesCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Shift</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('setup.student.fees.category.store') }}">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Student Fees Category</label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <span>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                                value="Add Fees Category" style="width: 120px">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
             $('#addStudentFeesCategoryModal').modal('show');
        });
</script>
@endif