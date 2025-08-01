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
        Schema::create('student_records', function (Blueprint $table) {
            $table->id();

            // Student information columns
            $table->string('name');
            $table->string('email')->unique();
            $table->string('class'); // e.g., "10-A"
            $table->integer('roll_number')->unique();
            $table->integer('marks');
            $table->string('gender')->nullable(); // optional
            $table->date('dob')->nullable();      // Date of Birth

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_records');
    }
};
