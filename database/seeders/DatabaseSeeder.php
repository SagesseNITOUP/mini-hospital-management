<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AppointmentSeeder::class,
            // Add other seeders here
        ]);



        /*Doctor::create([
            'name' => "KENNE",
            'firstname' => "Jospin",
            'speciality' => "Ophtamologist",
            'phone' => "0605511914",
            'email' => "lionel@gmail.com",
            'password' =>Hash::make('@Lionel123@'), // password
        ]);

        Doctor::create([
            'name' => "ABBAS",
            'firstname' => "Tahir",
            'speciality' => "Dentist",
            'phone' => "0605511914",
            'email' => "tahir@gmail.com",
            'password' =>Hash::make('@Tahir123@'), // password
        ]);

        Doctor::create([
            'name' => "SAADANI",
            'firstname' => "Elyes",
            'speciality' => "Dentist",
            'phone' => "0605511914",
            'email' => "elyes@gmail.com",
            'password' =>Hash::make('@Elyes123@'), // password
        ]);*/
    }
}
