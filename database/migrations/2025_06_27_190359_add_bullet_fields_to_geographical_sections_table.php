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
        Schema::table('geographical_sections', function (Blueprint $table) {
            $table->string('bullet_title')->nullable()->after('description');
            $table->text('bullet_points')->nullable()->after('bullet_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('geographical_sections', function (Blueprint $table) {
             $table->dropColumn(['bullet_title', 'bullet_points']);
        });
    }
};
