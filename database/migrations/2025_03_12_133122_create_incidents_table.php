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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->json('incident_location');
            $table->string('incident_type');
            $table->dateTime('incident_date');
            $table->string('incident_status');
            $table->text('incident_desc');
            $table->string('incident_cause');
            $table->enum('severity_level', ['Low', 'Medium', 'High', 'Critical']);
            $table->text('incident_report');
            $table->string('victim_name');
            $table->string('victim_address');
            $table->integer('victim_age');
            $table->json('victim_image')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->text('remarks')->nullable();
            $table->string('res_first_name');
            $table->string('res_last_name');
            $table->string('res_contact_num');
            $table->string('res_address');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
