<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $specialities = ['cardiology', 'neurology', 'pediatrics', 'dermatology', 'oncology'];
        $profiles = ['doctor', 'staff'];
        $departments = ['Cardiology', 'Neurology', 'Pediatrics', 'Dermatology', 'Oncology', 'Administration'];

        $profile = $this->faker->randomElement($profiles);
        $speciality = ($profile === 'doctor') ? $this->faker->randomElement($specialities) : null;
        $department = ($profile === 'staff') ? $this->faker->randomElement($departments) : null;

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'profile' => $profile,
            'department' => $department,
            'isAvaillable' => $this->faker->boolean(),
            'speciality' => $speciality,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
