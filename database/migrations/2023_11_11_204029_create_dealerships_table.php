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
        Schema::create('dealerships', function (Blueprint $table) {
            $table->id();
            $table->string('dealership_type');
            $table->string('firm_name')->nullable();
            $table->string('firm_status')->nullable();
            $table->string('firm_pan_no')->nullable();
            $table->string('firm_gst')->nullable();
            $table->string('cp_title')->nullable(); // cp stands for contact person
            $table->string('cp_name')->nullable();
            $table->string('cp_mobile')->nullable();
            $table->string('cp_landline')->nullable();
            $table->string('cp_email')->nullable();
            $table->string('address')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('cb_type')->nullable(); // cb stand for current business
            $table->string('cb_no_sales_staff')->nullable();
            $table->string('cb_turnover')->nullable();
            $table->string('cb_brands_dealing')->nullable();
            $table->string('cb_products_dealing')->nullable();
            $table->string('pi_investment')->nullable(); // pi stands for proposed investment
            $table->string('pi_space_available')->nullable();
            $table->string('pi_property_ownership')->nullable();
            $table->string('pi_remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealerships');
    }
};
