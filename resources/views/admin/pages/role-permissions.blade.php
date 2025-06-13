@extends('admin.layouts.master')
@section('header-title')
     Role - {{ $role->name }}
@endsection
@section('custom_styles')
    <link href="{{ asset('admin/assets/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content-body')
    <div class="container-fluid">
        <form action="{{ route('update-role-permissions') }}" method="POST">
            @csrf
        <div class="row page-titles">
                <div class="d-flex justify-content-between">
                      <h3 class="text-center d-flex align-items-center role-permission-title">Permissions <span class="permissions-separator">/</span><a href="{{ route('roles') }}">Roles</a></h3>
                      <button type="submit" class="btn btn-sm btn-secondary">Save</button>
                </div>
        </div>
        <!-- row -->

        <div class="row">
            @foreach($categoriesWithPermissions as $category)
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$category->label}}</h4>
                            </div>
                            <div class="card-body">

                                    <div class="row">
                                        @foreach($category->permissions as $permission)
                                            <div class="col-xl-2 col-xxl-2 col-2">
                                                <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                    <input id="customCheckBox_{{ $permission->id }}"  type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="form-check-input" @if($role->permissions->contains($permission->id)) checked @endif  id="customCheckBox3" >
                                                    <label for="customCheckBox_{{ $permission->id }}" class="form-check-label" for="customCheckBox3">{{$permission->label}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                            </div>
                        </div>
                    </div>

            @endforeach

        </div>
        <div class="row page-titles">
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-sm btn-secondary">Save</button>
            </div>
        </div>
            <input  name="role_id" type="hidden" value="{{$role->id}}"/>
        </form>
    </div>
@endsection
@section('custom-scripts')
    <script src="{{ asset('admin/assets/vendor/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-js/functions.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-js/role-permissions.js') }}"></script>
    @if(Session::has('success'))
        <script>
            $(function () {
                var message = "{{ Session::get('success') }}";
                displayToastrSuccess(message);
            });
        </script>
    @endif
@endsection
