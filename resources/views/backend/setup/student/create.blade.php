<!-- Modal -->
<div class="modal fade" id="addStudenClassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">User Role</label>
                                    <select class="form-select" name="user_type">
                                        <option selected="" disabled="" value="">Select User Role</option>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="name">
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
                                    <input type="email" class="form-control" name="email">
                                    <br>
                                    <span>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">User Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <br>
                                    <span>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>


                    <input class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" value="Submit"
                        style="width: 120px">
            </div>
            </form>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>