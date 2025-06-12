<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        // Get available doctors and staff
        $doctors = User::where('profile', 'doctor')->get();
        $staff = User::where('profile', 'staff')->get();

        // Create some doctors and staff if none exist
        if ($doctors->isEmpty()) {
            $this->command->warn('No doctors found. Creating 5 doctors...');
            $doctors = User::factory()->count(5)->create([
                'profile' => 'doctor',
                'speciality' => fake()->randomElement(['cardiology', 'neurology', 'pediatrics'])
            ]);
        }

        if ($staff->isEmpty()) {
            $this->command->warn('No staff found. Creating 3 staff members...');
            $staff = User::factory()->count(3)->create([
                'profile' => 'staff',
                'department' => fake()->randomElement(['Reception', 'Billing', 'Administration'])
            ]);
        }

        // Create appointments
        $totalAppointments = 50;
        $appointments = [];

        for ($i = 0; $i < $totalAppointments; $i++) {
            $appointments[] = [
                'patient_name' => fake()->name,
                'patient_email' => fake()->safeEmail,
                'patient_phone' => fake()->phoneNumber,
                'doctor_id' => $doctors->random()->id,
                'staff_id' => $staff->random()->id,
                'appointment_date' => fake()->dateTimeBetween('-1 month', '+1 month'),
                'start_time' => fake()->time('H:i'),
                'end_time' => fake()->time('H:i', strtotime('+30 minutes')),
                'status' => fake()->randomElement(['scheduled', 'confirmed', 'completed', 'cancelled']),
                'reason' => fake()->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert all appointments at once for better performance
        Appointment::insert($appointments);

        $this->command->info("Successfully created {$totalAppointments} appointments.");
    }
}
