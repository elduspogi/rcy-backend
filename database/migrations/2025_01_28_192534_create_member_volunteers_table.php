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
        Schema::create('member_volunteers', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->string('middle_name', 55)->nullable();
            $table->string('gender', 10);
            $table->integer('age');
            $table->date('birthdate');
            $table->string('city', 55);
            $table->string('barangay', 55);
            $table->string('street_address', 255);
            $table->string('email', 255)->unique();
            $table->string('contact_number', 11);
            $table->string('facebook_link', 255);
            $table->string('joined_as', 15);
            $table->string('reference_number', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_volunteers');
    }
};
