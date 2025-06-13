@extends('admin.layouts.master')
@section('title','Roles')
@section('header-title','Roles')
@section('custom_styles')
        <link href="{{ asset('admin/assets/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content-body')
<div class="container-fluid">
    <div class="row page-titles">
         <div class="d-flex justify-content-between">
             <input type="text" class="form-control input-default search-role-input" placeholder="search role" name="search-role-input">
                <button class="create-new-role" data-bs-toggle="modal" data-bs-target="#exampleModal">New<span class="tooltiptext">Create New Role</span></button>
         </div>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Roles</h4>
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
                                <th><strong>NAME</strong></th>
                                <th><strong>Created Date</strong></th>
                                <th><strong>Updated Date</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong></strong></th>
                            </tr>
                            </thead>
                            <tbody class="table-body">

                            </tbody>
                        </table>
                        <div class="my-2 d-flex justify-content-end">
                                <button class="selected-role-button btn btn-sm btn-primary">Delete Selected Role(s)</button>
                        </div>
                        <nav class="roles-pagination">
                            <ul class="pagination pagination-sm pagination-circle">
                                <!-- Pagination items will be dynamically added here by JavaScript -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.sections.new-role-modal')
</div>
@endsection
@section('custom-scripts')
    @include('admin.sections.rotues')
    <script src="{{ asset('admin/assets/vendor/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-js/functions.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-js/roles.js') }}"></script>
@endsection
