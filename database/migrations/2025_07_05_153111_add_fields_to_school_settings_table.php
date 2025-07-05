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
        Schema::table('school_settings', function (Blueprint $table) {
            // Data sekolah tambahan
            $table->string('nss')->nullable()->after('school_name');
            $table->string('npsn')->nullable()->after('nss');
            $table->string('postal_code', 10)->nullable()->after('school_address');
            $table->string('school_status')->nullable()->after('postal_code'); // Negeri/Swasta
            
            // Surat keputusan
            $table->string('establishment_permit_number')->nullable()->after('school_status');
            $table->string('nationalization_permit_number')->nullable()->after('establishment_permit_number');
            
            // Pejabat penandatangan
            $table->string('establishment_official')->nullable()->after('nationalization_permit_number');
            $table->string('nationalization_official')->nullable()->after('establishment_official');
            
            // Tahun pendirian
            $table->year('establishment_year')->nullable()->after('nationalization_official');
            
            // Akreditasi
            $table->string('accreditation_grade')->nullable()->after('establishment_year'); // A, B, C
            $table->string('accreditation_sk_number')->nullable()->after('accreditation_grade');
            $table->date('accreditation_date')->nullable()->after('accreditation_sk_number');
            $table->date('accreditation_valid_until')->nullable()->after('accreditation_date');
            
            // Lokasi dan bangunan
            $table->text('building_ownership')->nullable()->after('accreditation_valid_until');
            $table->string('distance_from_subdistrict')->nullable()->after('building_ownership');
            $table->string('distance_from_district')->nullable()->after('distance_from_subdistrict');
            $table->string('located_on_route')->nullable()->after('distance_from_district');
            $table->string('organizing_institution')->nullable()->after('located_on_route');
            
            // Data kepala sekolah tambahan
            $table->string('principal_nip')->nullable()->after('principal_name');
            $table->string('principal_rank')->nullable()->after('principal_nip');
            $table->string('principal_education')->nullable()->after('principal_rank');
            $table->string('principal_photo')->nullable()->after('principal_education');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_settings', function (Blueprint $table) {
            $table->dropColumn([
                'nss', 'npsn', 'postal_code', 'school_status',
                'establishment_permit_number', 'nationalization_permit_number',
                'establishment_official', 'nationalization_official',
                'establishment_year', 'accreditation_grade', 'accreditation_sk_number',
                'accreditation_date', 'accreditation_valid_until',
                'building_ownership', 'distance_from_subdistrict', 'distance_from_district',
                'located_on_route', 'organizing_institution',
                'principal_nip', 'principal_rank', 'principal_education', 'principal_photo'
            ]);
        });
    }
};