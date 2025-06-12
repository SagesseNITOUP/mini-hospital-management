<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->string('patient_name');
            $table->string('patient_email');
            $table->string('patient_phone');
            $table->enum('patient_gender', ['male', 'female', 'other'])->nullable();

            // Appointment details
            $table->foreignId('doctor_id')->constrained('users')->nullable(); // Link to doctor
            $table->foreignId('staff_id')->constrained('users')->nullable(); // Link to staff who booked
            $table->date('appointment_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['scheduled', 'confirmed', 'completed', 'cancelled', 'no_show'])->default('scheduled');
            $table->text('reason')->nullable();
            $table->text('notes')->nullable();

            // Medical information
            $table->string('symptoms')->nullable();
            $table->string('diagnosis')->nullable();
            $table->text('prescription')->nullable();
            // System fields
            $table->enum('appointment_type', ['checkup', 'follow-up', 'emergency'])->nullable(); // e.g., 'checkup', 'follow-up', 'emergency'
            $table->string('referral')->nullable(); // If referred by another doctor
            $table->boolean('reminder_sent')->default(false);

            $table->timestamps();
            $table->softDeletes(); // For cancelled appointments
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
