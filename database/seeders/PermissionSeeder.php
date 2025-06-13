<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission_category = [
            1 => [
                ['create-role' => 'create a role'],
                ['edit-role' => 'edit a role'],
                ['delete-role' => 'delete a role'],
                ['view-role-permissions' => 'view role permissions'],
                ['view-role' => 'view a role']
            ],
            2 => [
                ['create-user' => 'create a user'],
                ['edit-user' => 'edit a user'],
                ['delete-user' => 'delete a user'],
                ['view-user' => 'view a user']
            ],
            3 => [
                ['create-room' => 'create a room'],
                ['edit-room' => 'edit a room'],
                ['delete-room' => 'delete a room'],
                ['view-room' => 'view a room']
            ],
            4 => [
                ['create-appointment' => 'create an appointment'],
                ['edit-appointment' => 'edit an appointment'],
                ['delete-appointment' => 'delete an appointment'],
                ['view-appointment' => 'view an appointment']
            ],
            5 => [
                ['create-prescription' => 'create a prescription'],
                ['edit-prescription' => 'edit a prescription'],
                ['delete-prescription' => 'delete a prescription'],
                ['view-prescription' => 'view a prescription']
            ]
        ];

        foreach ($permission_category as $key => $permissions) {
            foreach ($permissions as $permission) {
                foreach ($permission as $name => $label) {
                    Permission::create([
                        'name' => $name,
                        'label' => $label,
                        'permission_category_id' => $key
                    ]);
                }
            }
        }
    }
}
