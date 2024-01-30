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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('resume_path'); // Assuming you'll store the file path
            $table->string('linkedin_profile')->nullable();
            $table->integer('years_experience');
            $table->string('portfolio_link')->nullable();
            $table->text('additional_comments')->nullable();
            $table->string('job_title'); // New field for job title
            $table->string('job_designation'); // New field for job designation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};