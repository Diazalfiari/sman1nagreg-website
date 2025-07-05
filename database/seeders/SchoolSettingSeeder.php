<?php

namespace Database\Seeders;

use App\Models\SchoolSetting;
use Illuminate\Database\Seeder;

class SchoolSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolSetting::updateOrCreate(
            ['id' => 1],
            [
                'school_name' => 'SMAN 1 Nagreg',
                'nss' => '301020901001',
                'npsn' => '20219574',
                'school_address' => 'Jl. Raya Nagreg No. 123, Nagreg, Kabupaten Bandung, Jawa Barat 40397',
                'postal_code' => '40397',
                'school_phone' => '(022) 5956789',
                'school_email' => 'info@sman1nagreg.sch.id',
                'school_status' => 'Negeri',
                'establishment_permit_number' => 'SK.421.3/102/Disdik.Jabar/1985',
                'nationalization_permit_number' => 'SK.421.3/105/Disdik.Jabar/1985',
                'establishment_official' => 'Kepala Dinas Pendidikan Kabupaten Bandung',
                'nationalization_official' => 'Gubernur Jawa Barat',
                'establishment_year' => 1985,
                'accreditation_grade' => 'A',
                'accreditation_sk_number' => 'SK.BAN-SM/040/2020',
                'accreditation_date' => '2020-10-15',
                'accreditation_valid_until' => '2025-10-15',
                'building_ownership' => 'Milik Pemerintah Daerah Kabupaten Bandung. Luas Tanah: 15.000 m². Luas Bangunan: 8.500 m². Status Tanah: Hak Pakai.',
                'distance_from_subdistrict' => '2 km',
                'distance_from_district' => '25 km',
                'located_on_route' => 'Jalan Provinsi Bandung-Garut',
                'organizing_institution' => 'Pemerintah Daerah Kabupaten Bandung',
                'principal_name' => 'Dr. Ir. Budi Santoso, M.Pd',
                'principal_nip' => '196905151990031002',
                'principal_rank' => 'Pembina Tk. I / IV.b',
                'principal_education' => 'S2 Manajemen Pendidikan',
                'principal_photo' => null,
                'vision' => 'Terwujudnya siswa yang beriman, bertaqwa, berakhlak mulia, cerdas, kreatif, mandiri, dan berwawasan lingkungan.',
                'mission' => 'Menyelenggarakan pendidikan yang berkualitas dengan mengembangkan potensi siswa secara optimal. Membentuk karakter siswa yang beriman, bertaqwa, dan berakhlak mulia. Mengembangkan kreativitas dan kemandirian siswa melalui pembelajaran yang inovatif. Menciptakan lingkungan sekolah yang kondusif dan ramah lingkungan. Menjalin kerjasama yang baik dengan masyarakat dan stakeholder.',
                'school_logo' => null,
                'school_image' => null,
            ]
        );
    }
}
