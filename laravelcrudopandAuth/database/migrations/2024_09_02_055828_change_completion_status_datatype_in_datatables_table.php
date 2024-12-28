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
        Schema::table('datatables', function (Blueprint $table) {
            $table->string('country')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('city')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datatables', function (Blueprint $table) {
            $table->string('country')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('city')->nullable()->change();
        });
    }
};
