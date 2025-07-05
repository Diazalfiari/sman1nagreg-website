<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    use HasFactory;

    protected $table = 'school_settings';

    protected $fillable = [
        'school_name',
        'nss',
        'npsn',
        'school_address',
        'postal_code',
        'school_phone',
        'school_email',
        'school_status',
        'establishment_permit_number',
        'nationalization_permit_number',
        'establishment_official',
        'nationalization_official',
        'establishment_year',
        'accreditation_grade',
        'accreditation_sk_number',
        'accreditation_date',
        'accreditation_valid_until',
        'building_ownership',
        'distance_from_subdistrict',
        'distance_from_district',
        'located_on_route',
        'organizing_institution',
        'principal_name',
        'principal_nip',
        'principal_rank',
        'principal_education',
        'principal_photo',
        'vision',
        'mission',
        'school_logo',
        'school_image',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}