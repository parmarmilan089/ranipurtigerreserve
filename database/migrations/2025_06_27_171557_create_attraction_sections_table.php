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
        Schema::create('attraction_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('button_text')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true); // Active by default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attraction_sections');
    }
};
