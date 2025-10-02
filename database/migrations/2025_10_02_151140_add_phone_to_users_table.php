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
            Schema::table('users', function (Blueprint $table) {
                $table->string('phone')->nullable(); // You can adjust the type and constraints as needed
            });
        }

        // ... inside the Down() method (to reverse the change)
    public function down(): void
        {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('phone');
            });
        }
};
