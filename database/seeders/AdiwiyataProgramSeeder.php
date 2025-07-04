<?php

namespace Database\Seeders;

use App\Models\AdiwiyataProgram;
use Illuminate\Database\Seeder;

class AdiwiyataProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            [
                'type' => 'kebersihan_sanitasi',
                'title' => 'Program Kebersihan, Sanitasi, dan Drainase',
                'description' => 'Program untuk menjaga kebersihan lingkungan sekolah, sistem sanitasi yang baik, dan drainase yang lancar.',
                'activities' => [
                    'Pembersihan kelas dan lingkungan sekolah setiap hari',
                    'Pemeriksaan sistem sanitasi secara berkala',
                    'Perawatan saluran drainase',
                    'Edukasi tentang pentingnya kebersihan'
                ],
                'is_active' => true,
            ],
            [
                'type' => 'pengelolaan_sampah',
                'title' => 'Program Pengelolaan Sampah',
                'description' => 'Program pengelolaan sampah dengan konsep 3R (Reduce, Reuse, Recycle).',
                'activities' => [
                    'Pemilahan sampah organik dan anorganik',
                    'Pengomposan sampah organik',
                    'Daur ulang sampah anorganik',
                    'Bank sampah sekolah'
                ],
                'is_active' => true,
            ],
            [
                'type' => 'penanaman_tanaman',
                'title' => 'Program Penanaman dan Pemeliharaan Tanaman',
                'description' => 'Program penghijauan dan pemeliharaan tanaman di lingkungan sekolah.',
                'activities' => [
                    'Penanaman pohon di area sekolah',
                    'Pembuatan taman sekolah',
                    'Perawatan tanaman hias',
                    'Budidaya tanaman obat keluarga (TOGA)'
                ],
                'is_active' => true,
            ],
            [
                'type' => 'konservasi_energi',
                'title' => 'Program Konservasi Energi/Listrik',
                'description' => 'Program hemat energi dan penggunaan energi terbarukan.',
                'activities' => [
                    'Kampanye hemat listrik',
                    'Penggunaan lampu LED',
                    'Pemasangan panel surya',
                    'Edukasi tentang energi terbarukan'
                ],
                'is_active' => true,
            ],
            [
                'type' => 'konservasi_air',
                'title' => 'Program Konservasi Air',
                'description' => 'Program penghematan dan pelestarian sumber daya air.',
                'activities' => [
                    'Kampanye hemat air',
                    'Pembuatan biopori',
                    'Penampungan air hujan',
                    'Daur ulang air limbah'
                ],
                'is_active' => true,
            ],
            [
                'type' => 'inovasi_ramah_lingkungan',
                'title' => 'Program Inovasi Perilaku Ramah Lingkungan Hidup',
                'description' => 'Program pengembangan inovasi dan perilaku ramah lingkungan.',
                'activities' => [
                    'Penelitian lingkungan hidup',
                    'Kompetisi inovasi hijau',
                    'Kampanye gaya hidup berkelanjutan',
                    'Kerjasama dengan komunitas lingkungan'
                ],
                'is_active' => true,
            ],
        ];

        foreach ($programs as $programData) {
            AdiwiyataProgram::updateOrCreate(
                ['type' => $programData['type']],
                $programData
            );
        }
    }
}