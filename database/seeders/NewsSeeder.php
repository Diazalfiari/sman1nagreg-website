<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        
        if (!$admin) {
            $this->command->info('Admin user not found. Skipping news seeder.');
            return;
        }
        
        $news = [
            [
                'title' => 'Pembukaan Tahun Ajaran Baru 2024/2025',
                'slug' => 'pembukaan-tahun-ajaran-baru-2024-2025',
                'excerpt' => 'SMAN 1 Nagreg resmi membuka tahun ajaran baru 2024/2025 dengan berbagai kegiatan menarik.',
                'content' => 'Pada hari Senin, 15 Juli 2024, SMAN 1 Nagreg resmi membuka tahun ajaran baru 2024/2025. Kegiatan dimulai dengan upacara bendera yang diikuti oleh seluruh siswa, guru, dan staf sekolah...',
                'status' => 'published',
                'author_id' => $admin->id,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Prestasi Siswa dalam Olimpiade Matematika',
                'slug' => 'prestasi-siswa-dalam-olimpiade-matematika',
                'excerpt' => 'Siswa SMAN 1 Nagreg meraih juara dalam Olimpiade Matematika tingkat kabupaten.',
                'content' => 'Dengan bangga kami sampaikan bahwa siswa SMAN 1 Nagreg berhasil meraih prestasi gemilang dalam Olimpiade Matematika tingkat Kabupaten Bandung...',
                'status' => 'published',
                'author_id' => $admin->id,
                'published_at' => now()->subDays(3),
            ],
        ];

        foreach ($news as $newsData) {
            News::updateOrCreate(
                ['slug' => $newsData['slug']], // Kondisi pencarian
                $newsData // Data yang akan diupdate atau dibuat
            );
        }
    }
}