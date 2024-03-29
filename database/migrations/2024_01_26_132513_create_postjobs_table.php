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
        Schema::create('postjobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('city');
            $table->date('apply_last_date');
            $table->string('designation');
            $table->text('job_details');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postjobs');
    }
};