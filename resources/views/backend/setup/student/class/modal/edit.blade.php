<!-- Edit Modal -->
<div class="modal fade" id="editStudenClassModal{{ $class->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('setup.student.class.update',$class->id) }}">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Student Class</label>
                                    <input type="text" class="form-control" name="name" value="{{ $class->name }}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit"
                            value="Update Class" style="width: 120px">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>