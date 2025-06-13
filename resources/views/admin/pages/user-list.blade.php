@extends('admin.layouts.master')
@section('title','Users')
@section('header-title','Users')
@section('custom_styles')
<link href="{{ asset('admin/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>	
@endsection

@section('content-body')
<div class="container-fluid">
    <div class="row page-titles">
         <div class="d-flex justify-content-between">
             <input type="text" class="form-control input-default search-role-input" placeholder="search user" name="search-role-input">
                <button class="create-new-role" data-bs-toggle="modal" data-bs-target="#exampleModal">New<span class="tooltiptext">Create New User  </span></button>
         </div>
    </div>

    <div class="row" >
        <!-- <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                        <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th><strong>Profile picture</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Firstname</strong></th>
                                <th><strong>Lastname</strong></th>
                                <th><strong>Birthday</strong></th>
                                <th><strong>Host Contry</strong></th>
                                <th><strong>Occupation</strong></th>
                                <th><strong>Created Date</strong></th>
                                <th><strong>Updated Date</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong></strong></th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input role-checkbox" data-id="${role.id}" id="customCheckBox2" required="">
                                            <label class="form-check-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center name-role"><span class="w-space-no"></span></div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Active</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp me-1 edit-role" data-id="${role.id}"><i class="fas fa-pencil-alt"></i><span class="tooltiptext">Edit Role</span></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp delete-role" data-id="${role.id}"><i class="fa fa-trash"></i><span class="tooltiptext">Delete Role</span></a>
                                            <a href="${listRolePermissionsUrl.replace(':id', role.id)}" class="btn btn-secondary shadow btn-xs sharp mx-2 assign-permissions-to-role" data-id="${role.id}">
                                                <i class="fa fa-user-lock"></i><span class="tooltiptext">Assign Permissions To Role</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="my-2 d-flex justify-content-end">
                            <button class="selected-role-button btn btn-sm btn-primary">Delete Selected User(s)</button>
                        </div>
                        <nav class="roles-pagination">
                            <ul class="pagination pagination-sm pagination-circle">
                            </ul>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div> -->
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Gender</th>
                                        <th>Education</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="{{'admin/assets/images/profile/small/pic1.jpg'}}" alt=""></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection

@section('custom-scripts')
<script src="{{ asset('admin/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins-init/datatables.init.js') }}"></script>
@endsection