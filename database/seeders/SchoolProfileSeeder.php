<?php

namespace Database\Seeders;

use App\Models\SchoolProfile;
use Illuminate\Database\Seeder;

class SchoolProfileSeeder extends Seeder
{
    public function run(): void
    {
        $profiles = [
            [
                'type' => 'profile',
                'title' => 'Profil SMAN 1 Nagreg',
                'content' => 'SMAN 1 Nagreg adalah sekolah menengah atas negeri yang berlokasi di Kabupaten Bandung, Jawa Barat. Sekolah ini berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada para siswa dengan fasilitas modern dan tenaga pengajar yang kompeten.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'type' => 'sejarah',
                'title' => 'Sejarah SMAN 1 Nagreg',
                'content' => 'SMAN 1 Nagreg didirikan pada tahun 1985 sebagai bagian dari program pengembangan pendidikan di wilayah Nagreg. Sejak berdiri, sekolah ini telah meluluskan ribuan siswa yang sukses di berbagai bidang.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'type' => 'visi_misi',
                'title' => 'Visi dan Misi SMAN 1 Nagreg',
                'content' => '<h3>VISI</h3><p>Menjadi sekolah unggul, berkarakter, dan berwawasan lingkungan.</p><h3>MISI</h3><ul><li>Menyelenggarakan pendidikan yang berkualitas</li><li>Membentuk karakter siswa yang berakhlak mulia</li><li>Mengembangkan wawasan lingkungan hidup</li></ul>',
                'order' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($profiles as $profileData) {
            SchoolProfile::updateOrCreate(
                ['type' => $profileData['type']], // Kondisi pencarian
                $profileData // Data yang akan diupdate atau dibuat
            );
        }
    }
}