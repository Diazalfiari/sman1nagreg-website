<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adiwiyata_programs', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [
                'kebersihan_sanitasi',
                'pengelolaan_sampah',
                'penanaman_tanaman',
                'konservasi_energi',
                'konservasi_air',
                'inovasi_ramah_lingkungan'
            ]);
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->json('activities')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adiwiyata_programs');
    }
};