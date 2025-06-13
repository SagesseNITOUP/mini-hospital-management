<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\PermissionCategory;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function permissions($id)
    {
        try {
            $role = Role::with('permissions')->findOrFail($id);

            $categoriesWithPermissions = PermissionCategory::with('permissions')->get();

            return view('admin.pages.role-permissions', [
                'role' => $role,
                'categoriesWithPermissions' => $categoriesWithPermissions,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    public  function update(Request $request)
    {
        try {

            $role = Role::findOrFail($request->role_id);

            $permissions = $request->input('permissions', []);
            $role->permissions()->detach();
            $role->permissions()->attach($permissions);

            return redirect()->back()->with('success', 'Permissions updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }


}
