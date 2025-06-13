<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function save(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'role' => 'required|string',
            ],['required' => 'the role is required','string' => 'the role must be a string']);
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'error occured!',
                    'errors' => $validator->errors(),
                    'status' => 400
                ],400);
            }

            $roleName = $request->input('role');

            $existingRole = Role::where('name', $roleName)->first();

            if ($existingRole) {
                return response()->json([
                    'success' => false,
                    'message' => 'The role already exists!',
                    'status' => 409, // Conflict status code
                ], 409);
            }

            if($request->has('id'))
            {
                $existingRole = Role::where('id',$request->id)->first();
                $existingRole->name = $roleName;
                $existingRole->save();

                return response()->json([
                    'success' => true,
                    'message' => 'role updated successfuly!',
                    'data' => $existingRole,
                    'status'=>200
                ],200);
            }

            $savedRole = Role::create(['name' => $roleName]);

            return response()->json([
                'success' => true,
                'message' => 'role saved successfuly!',
                'data' => $savedRole,
                'status'=>200
            ],200);

        }catch (\Exception $e)
        {
            return response()->json([
                'success' => false,
                'custom_message' => 'An unexpected error occurred!',
                'errors' => $e.getMessage(),
                'status'=> 500
            ],500);
        }


    }

    public function list(Request $request)
    {
        try {
            $query = Role::orderBy('id', 'desc');

            // Check if a search term is provided
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('name', 'LIKE', '%' . $search . '%');
            }

            // Paginate the results
            $roles = $query->paginate(15);

            return response()->json([
                'success' => true,
                'data' => $roles->items(),
                'links' => [
                    'first' => $roles->url(1),
                    'last' => $roles->url($roles->lastPage()),
                    'prev' => $roles->previousPageUrl(),
                    'next' => $roles->nextPageUrl(),
                ],
                'meta' => [
                    'current_page' => $roles->currentPage(),
                    'last_page' => $roles->lastPage(),
                    'per_page' => $roles->perPage(),
                    'total' => $roles->total(),
                ],
                'status' => 200
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'custom_message' => 'An unexpected error occurred!',
                'errors' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $role = Role::findOrFail($id);
            $role->delete();

            return response()->json([
                'success' => true,
                'message' => 'Role deleted successfully!',
                'status' => 200,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'custom_message' => 'An unexpected error occurred!',
                'errors' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }

        public function deleteRoles(Request $request)
        {
            try {
                $ids = $request->input('ids');
                Role::whereIn('id', $ids)->delete(); // Delete roles with the specified IDs

                return response()->json([
                    'success' => true,
                    'message' => 'Roles deleted successfully!',
                    'status' => 200
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'custom_message' => 'An unexpected error occurred!',
                    'errors' => $e->getMessage(),
                    'status' => 500
                ], 500);
            }
        }



}
