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
        Schema::create('public_holiday', function (Blueprint $table) {
            $table->id();              // Auto-incrementing primary key
            $table->date('date');      // Date for the holiday event
            $table->string('name');    // Name of the holiday event (string type)
            $table->string('lang', 5); // Language code (e.g., "en", "kh") - adjust length if necessary
            $table->timestamps();      // created_at and updated_at columns
        });

        Schema::create('all_events', function (Blueprint $table) {
            $table->id();              // Auto-incrementing primary key
            $table->date('date');      // Date for the event
            $table->string('name');    // Name of the event (string type)
            $table->string('lang', 5); // Language code (e.g., "en", "kh")
            $table->timestamps();      // created_at and updated_at columns
        });

        Schema::create('type_of_day', function (Blueprint $table) {
            $table->id();                                // Auto-incrementing primary key
            $table->string('type');                      // Type of day (e.g., "Public Holiday", "Workday", etc.)
            $table->enum('day_status', ['good', 'bad']); // Status of the day: either 'good' or 'bad'
            $table->timestamps();                        // created_at and updated_at columns
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the type_of_day table if it exists
        Schema::dropIfExists('type_of_day');

        // Drop the all_events table if it exists
        Schema::dropIfExists('all_events');

        // Drop the public_holiday table if it exists
        Schema::dropIfExists('public_holiday');
    }
};
