<?php

namespace Database\Seeders;

use App\Models\AcademicSchedule;
use Illuminate\Database\Seeder;

class AcademicScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $schedules = [
            // Agenda Kurikulum
            [
                'type' => 'agenda_kurikulum',
                'title' => 'Rapat Koordinasi Kurikulum Semester Ganjil',
                'description' => 'Rapat koordinasi untuk membahas implementasi kurikulum semester ganjil tahun ajaran 2024/2025',
                'schedule_date' => now()->addDays(7)->toDateString(),
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'type' => 'agenda_kurikulum',
                'title' => 'Workshop Pengembangan Silabus',
                'description' => 'Workshop untuk pengembangan silabus mata pelajaran sesuai dengan kurikulum terbaru',
                'schedule_date' => now()->addDays(14)->toDateString(),
                'start_time' => '09:00:00',
                'end_time' => '15:00:00',
            ],
            
            // Jadwal Pelajaran
            [
                'type' => 'jadwal_pelajaran',
                'title' => 'Matematika',
                'description' => 'Pelajaran Matematika Wajib',
                'schedule_date' => now()->next('Monday')->toDateString(),
                'start_time' => '07:00:00',
                'end_time' => '08:30:00',
                'class' => 'XII IPA 1',
                'subject' => 'Matematika',
                'teacher' => 'Drs. Ahmad Supriadi, M.Pd',
            ],
            [
                'type' => 'jadwal_pelajaran',
                'title' => 'Bahasa Indonesia',
                'description' => 'Pelajaran Bahasa Indonesia',
                'schedule_date' => now()->next('Monday')->toDateString(),
                'start_time' => '08:30:00',
                'end_time' => '10:00:00',
                'class' => 'XII IPA 1',
                'subject' => 'Bahasa Indonesia',
                'teacher' => 'Siti Fatimah, S.Pd',
            ],
        ];

        foreach ($schedules as $scheduleData) {
            AcademicSchedule::updateOrCreate(
                [
                    'type' => $scheduleData['type'],
                    'title' => $scheduleData['title'],
                    'schedule_date' => $scheduleData['schedule_date']
                ],
                $scheduleData
            );
        }
    }
}