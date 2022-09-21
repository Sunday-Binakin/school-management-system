<!-- Edit Modal -->
<div class="modal fade" id="editStudentGroupModal{{ $group->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('setup.student.group.update',$group->id) }}">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Student Group</label>
                                    <input type="text" class="form-control" name="name" value="{{ $group->name }}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                            value="Update" style="width: 120px">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>