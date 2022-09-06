@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="editUserForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework">

                            <div class="col-12 col-md-6 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                <label class="form-label">User Name</label>
                                <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6 fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                <label class="form-label">User Email</label>
                                <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">User Mobile</label>
                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label"> Address</label>
                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                    class="form-control modal-edit-tax-id">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">User Gender</label>
                                <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                    aria-label="Default select example">
                                    <option selected="">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Profile Image</label>
                                <div class="input-group input-group-merge">

                                    <input type="file" id="modalEditUserPhone" name="modalEditUserPhone"
                                        class="form-control phone-number-mask">
                                </div>
                            </div><br>
                        </form>
                        <div class="col-12  mt-4">
                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light me-3"
                                style="width: 120px">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection