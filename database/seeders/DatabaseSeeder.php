<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SchoolProfileSeeder::class,
            NewsSeeder::class,
            AcademicScheduleSeeder::class,
            StudentActivitySeeder::class,
            AdiwiyataProgramSeeder::class,
            SpmBInfoSeeder::class,
            LibraryGallerySeeder::class,
        ]);
    }
}