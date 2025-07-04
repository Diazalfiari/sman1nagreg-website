<?php

namespace Database\Seeders;

use App\Models\SpmBInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SpmBInfoSeeder extends Seeder
{
    public function run(): void
    {
        $infos = [
            [
                'title' => 'Pengumuman Pembukaan SPMB 2025/2026',
                'description' => 'Dengan hormat,

Kami informasikan bahwa pendaftaran Seleksi Penerimaan Mahasiswa Baru (SPMB) untuk tahun ajaran 2025/2026 telah dibuka.

Berikut informasi penting:
• Periode pendaftaran: 1 Juni - 30 Juni 2025
• Lokasi ujian: SMAN 1 Nagreg dan sekolah lain yang ditunjuk
• Kuota: 270 siswa (9 kelas)
• Biaya pendaftaran: GRATIS

Persyaratan:
1. Lulusan SMP/MTs atau sederajat tahun 2023, 2024, atau 2025
2. Memiliki NISN yang valid
3. Tidak berusia lebih dari 21 tahun pada 1 Juli 2025
4. Sehat jasmani dan rohani

Silakan kunjungi website resmi SPMB di https://spmb.jabarprov.go.id untuk melakukan pendaftaran online.',
                'file' => null,
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->addDays(60),
                'is_active' => true,
            ],
            [
                'title' => 'Panduan Pendaftaran Online SPMB 2025',
                'description' => 'Panduan lengkap untuk melakukan pendaftaran online SPMB 2025:

1. PERSIAPAN DOKUMEN
   • Scan ijazah/SKHUN SMP/MTs
   • Scan kartu keluarga
   • Scan akte kelahiran
   • Pas foto terbaru ukuran 3x4 (background merah)

2. LANGKAH PENDAFTARAN
   • Akses website https://spmb.jabarprov.go.id
   • Klik "Daftar Baru"
   • Isi data diri dengan lengkap dan benar
   • Upload dokumen yang diperlukan
   • Pilih sekolah tujuan (maksimal 3 pilihan)
   • Submit pendaftaran

3. VERIFIKASI BERKAS
   • Cetak kartu pendaftaran
   • Datang ke sekolah pilihan pertama untuk verifikasi
   • Bawa dokumen asli untuk dicocokkan

4. JADWAL TES
   • Tes tertulis: 5-7 Juli 2025
   • Materi: Bahasa Indonesia, Matematika, IPA, IPS, Bahasa Inggris

Untuk informasi lebih lanjut, hubungi panitia SPMB SMAN 1 Nagreg.',
                'file' => null,
                'start_date' => Carbon::now()->subDays(5),
                'end_date' => Carbon::now()->addDays(45),
                'is_active' => true,
            ],
            [
                'title' => 'Jadwal Verifikasi Berkas SPMB 2025',
                'description' => 'Jadwal verifikasi berkas calon peserta SPMB 2025 di SMAN 1 Nagreg:

WAKTU PELAKSANAAN:
📅 Tanggal: 2-4 Juli 2025
⏰ Waktu: 08.00 - 15.00 WIB

LOKASI:
🏢 Ruang TU SMAN 1 Nagreg
📍 Jl. Raya Nagreg-Garut No. 123, Nagreg, Bandung

DOKUMEN YANG HARUS DIBAWA:
✅ Kartu pendaftaran online (print out)
✅ Ijazah/SKHUN SMP/MTs (asli + fotokopi)
✅ Kartu Keluarga (asli + fotokopi)
✅ Akte kelahiran (asli + fotokopi)
✅ Pas foto 3x4 background merah (3 lembar)
✅ Map plastik warna biru

KETENTUAN:
• Verifikasi dilakukan sesuai urutan kedatangan
• Peserta yang tidak melakukan verifikasi dalam jadwal yang ditentukan dianggap mengundurkan diri
• Bagi yang berhalangan hadir dapat diwakilkan oleh orang tua/wali dengan membawa surat kuasa

Info: (022) 5951234',
                'file' => null,
                'start_date' => Carbon::now()->addDays(15),
                'end_date' => Carbon::now()->addDays(30),
                'is_active' => true,
            ]
        ];

        foreach ($infos as $infoData) {
            SpmBInfo::updateOrCreate(
                ['title' => $infoData['title']],
                $infoData
            );
        }
    }
}