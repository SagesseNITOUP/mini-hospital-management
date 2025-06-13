<?php

namespace Database\Seeders;

use App\Models\PermissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionCategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['roles'=> 'Roles'],
            ['users'=>'Users'],
            ['room'=>'Rooms'],
            ['appointments'=>'Appointments'],
            ['prescription'=>'Prescription'],
            ['email'=>'Emails']
        ];

            foreach ($categories as $category) {
                foreach ($category as $key => $value) {
                    PermissionCategory::create([
                        'name' => $key,
                        'label' => $value
                    ]);
                }
            }


    }
}
