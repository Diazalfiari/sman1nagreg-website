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
        Schema::create('school_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->text('school_address');
            $table->string('school_phone', 20);
            $table->string('school_email');
            $table->string('principal_name');
            $table->text('vision');
            $table->text('mission');
            $table->text('history')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('school_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
