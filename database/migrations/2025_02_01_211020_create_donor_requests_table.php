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
        Schema::create('donor_requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->string('middle_name', 55)->nullable();
            $table->string('blood_type', 5);
            $table->string('email', 255);
            $table->string('contact_number', 55);
            $table->string('facebook_link', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor_requests');
    }
};
