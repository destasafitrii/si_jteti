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
        Schema::table('visiti', function (Blueprint $table) {
            $table->text('visi')->change();
            $table->text('misi')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visiti', function (Blueprint $table) {
            $table->string('visi')->change();
            $table->string('misi')->change();
        });
    }
};
