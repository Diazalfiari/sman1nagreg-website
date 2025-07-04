<?php

namespace Database\Seeders;

use App\Models\StudentActivity;
use Illuminate\Database\Seeder;

class StudentActivitySeeder extends Seeder
{
    public function run(): void
    {
        $activities = [
            // Agenda Kesiswaan
            [
                'type' => 'agenda_kesiswaan',
                'title' => 'Orientasi Siswa Baru (OSPEK)',
                'description' => 'Kegiatan orientasi untuk siswa baru tahun ajaran 2024/2025',
                'event_date' => now()->addDays(10)->toDateString(),
                'is_active' => true,
            ],
            [
                'type' => 'agenda_kesiswaan',
                'title' => 'Pemilihan Ketua OSIS',
                'description' => 'Pemilihan ketua OSIS periode 2024/2025',
                'event_date' => now()->addDays(20)->toDateString(),
                'is_active' => true,
            ],
            
            // OSIS
            [
                'type' => 'osis',
                'title' => 'Struktur Organisasi OSIS 2024/2025',
                'description' => 'Struktur lengkap pengurus OSIS SMAN 1 Nagreg periode 2024/2025',
                'is_active' => true,
            ],
            
            // Ekstrakurikuler
            [
                'type' => 'ekstrakulikuler',
                'title' => 'Pramuka',
                'description' => 'Gerakan Pramuka SMAN 1 Nagreg. Kegiatan setiap hari Jumat sore.',
                'is_active' => true,
            ],
            [
                'type' => 'ekstrakulikuler',
                'title' => 'Basket',
                'description' => 'Ekstrakurikuler Bola Basket. Latihan setiap hari Selasa dan Kamis.',
                'is_active' => true,
            ],
            [
                'type' => 'ekstrakulikuler',
                'title' => 'Tari Tradisional',
                'description' => 'Ekstrakurikuler Tari Tradisional Sunda. Latihan setiap hari Rabu.',
                'is_active' => true,
            ],
        ];

        foreach ($activities as $activityData) {
            StudentActivity::updateOrCreate(
                [
                    'type' => $activityData['type'],
                    'title' => $activityData['title']
                ],
                $activityData
            );
        }
    }
}