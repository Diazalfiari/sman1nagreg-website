<?php

namespace Database\Seeders;

use App\Models\LibraryGallery;
use Illuminate\Database\Seeder;

class LibraryGallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Ruang Baca Utama',
                'description' => 'Ruang baca utama perpustakaan dengan kapasitas 100 orang',
                'image' => 'library/ruang-baca-utama.jpg',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Koleksi Buku Digital',
                'description' => 'Area akses buku digital dan e-learning',
                'image' => 'library/buku-digital.jpg',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Ruang Diskusi',
                'description' => 'Ruang diskusi untuk kegiatan kelompok',
                'image' => 'library/ruang-diskusi.jpg',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($galleries as $galleryData) {
            LibraryGallery::updateOrCreate(
                ['title' => $galleryData['title']],
                $galleryData
            );
        }
    }
}