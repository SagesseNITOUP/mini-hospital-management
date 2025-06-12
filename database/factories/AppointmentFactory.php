<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $doctors = User::where('profile', 'doctor')->pluck('id');
        $staff = User::where('profile', 'staff')->pluck('id');

        $date = $this->faker->dateTimeBetween('now', '+1 month');
        $startTime = $this->faker->time('H:i');

        return [
            'patient_name' => $this->faker->name,
            'patient_email' => $this->faker->safeEmail,
            'patient_phone' => $this->faker->phoneNumber,
            'patient_gender' => $this->faker->randomElement(['male', 'female', 'other']),

            'doctor_id' => fn () => $doctors->random(),
            'staff_id' => $this->faker->randomElement($staff),
            'appointment_date' => $date,
            'start_time' => $startTime,
            'end_time' => date('H:i', strtotime($startTime) + 1800), // 30 minutes later
            'status' => $this->faker->randomElement(['scheduled', 'confirmed', 'completed', 'cancelled']),
            'reason' => $this->faker->sentence,

            'symptoms' => $this->faker->words(3, true),
            'diagnosis' => $this->faker->optional()->word,
            'prescription' => $this->faker->optional()->sentence,

            'appointment_type' => $this->faker->randomElement(['checkup', 'follow-up', 'emergency']),
            'referral' => $this->faker->optional()->name,
            'reminder_sent' => $this->faker->boolean,
        ];
    }
}
