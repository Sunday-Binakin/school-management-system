<!-- Edit Modal -->
<div class="modal fade" id="editStudentFeesCategoryModal{{ $fees->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student Fees Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('setup.student.fees.category.update',$fees->id) }}">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Student Fees Category</label>
                                    <input type="text" class="form-control" name="name" value="{{ $fees->name }}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                            value="Update Fees Category" style="width: 170px">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>