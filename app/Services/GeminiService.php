<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiService
{
    private string $apiKey;
    private string $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
        $this->baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent';
    }

    public function generateResponse(string $message): string
    {
        try {
            if (empty($this->apiKey)) {
                return $this->getFallbackResponse($message);
            }

            $response = Http::timeout(30)
                ->post($this->baseUrl . '?key=' . $this->apiKey, [
                    'contents' => [
                        [
                            'parts' => [
                                [
                                    'text' => $this->buildPrompt($message)
                                ]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'topK' => 40,
                        'topP' => 0.95,
                        'maxOutputTokens' => 1024,
                    ]
                ]);

            if ($response->successful()) {
                $data = $response->json();
                return $data['candidates'][0]['content']['parts'][0]['text'] ?? $this->getFallbackResponse($message);
            }

            Log::warning('Gemini API error', ['response' => $response->body()]);
            return $this->getFallbackResponse($message);

        } catch (\Exception $e) {
            Log::error('Gemini API exception', ['error' => $e->getMessage()]);
            return $this->getFallbackResponse($message);
        }
    }

    private function buildPrompt(string $message): string
    {
        return "Anda adalah chatbot resmi untuk SMAN 1 Nagreg, sebuah sekolah menengah atas negeri di Nagreg, Kabupaten Bandung, Jawa Barat. 

Informasi tentang sekolah:
- Nama: SMAN 1 Nagreg
- Alamat: Jl. Raya Nagreg No. 123, Nagreg, Bandung 40376
- Telepon: (022) 123-4567
- Email: info@sman1nagreg.sch.id
- Tahun berdiri: 1985
- Status: Terakreditasi A
- Program: IPA, IPS, Bahasa
- Fasilitas: Perpustakaan digital, laboratorium sains, ruang multimedia, program Adiwiyata

Jawab pertanyaan berikut dengan ramah, informatif, dan fokus pada informasi sekolah. Jika ditanya tentang hal di luar konteks sekolah, arahkan kembali ke topik SMAN 1 Nagreg:

Pertanyaan: {$message}

Jawaban:";
    }

    private function getFallbackResponse(string $message): string
    {
        $message = strtolower($message);
        
        // Respons berdasarkan kata kunci
        if (str_contains($message, 'profil') || str_contains($message, 'sejarah') || str_contains($message, 'tentang')) {
            return 'SMAN 1 Nagreg adalah sekolah menengah atas negeri yang didirikan pada tahun 1985 di Nagreg, Kabupaten Bandung. Kami berkomitmen memberikan pendidikan berkualitas tinggi dengan fasilitas modern dan tenaga pengajar yang kompeten. Sekolah kami terakreditasi A dan memiliki program IPA, IPS, dan Bahasa.';
        }
        
        if (str_contains($message, 'alamat') || str_contains($message, 'lokasi') || str_contains($message, 'dimana')) {
            return 'SMAN 1 Nagreg berlokasi di Jl. Raya Nagreg No. 123, Nagreg, Bandung 40376, Jawa Barat. Anda dapat menghubungi kami di telepon (022) 123-4567 atau email info@sman1nagreg.sch.id.';
        }
        
        if (str_contains($message, 'pendaftaran') || str_contains($message, 'spmb') || str_contains($message, 'daftar')) {
            return 'Informasi pendaftaran siswa baru (SPMB) dapat Anda akses melalui website resmi Dinas Pendidikan Jawa Barat di https://disdik.jabarprov.go.id/ atau https://spmb.jabarprov.go.id/. Anda juga bisa mengunjungi halaman SPMB di website kami untuk informasi lebih detail.';
        }
        
        if (str_contains($message, 'ekstrakurikuler') || str_contains($message, 'ekskul') || str_contains($message, 'kegiatan')) {
            return 'SMAN 1 Nagreg memiliki berbagai ekstrakurikuler yang menarik seperti Pramuka, OSIS, Rohani Islam (Rohis), Olahraga (sepak bola, basket, voli), Seni (tari, musik, teater), Jurnalistik, dan masih banyak lagi. Silakan kunjungi halaman Kesiswaan di website kami untuk informasi lebih lengkap.';
        }
        
        if (str_contains($message, 'fasilitas') || str_contains($message, 'laboratorium') || str_contains($message, 'perpustakaan')) {
            return 'Fasilitas SMAN 1 Nagreg meliputi: perpustakaan digital dengan akses ke ribuan buku online, laboratorium sains (kimia, fisika, biologi), ruang multimedia untuk pembelajaran interaktif, laboratorium komputer, ruang kelas ber-AC, lapangan olahraga, dan program Adiwiyata untuk pendidikan lingkungan hidup.';
        }
        
        if (str_contains($message, 'jurusan') || str_contains($message, 'program') || str_contains($message, 'ipa') || str_contains($message, 'ips')) {
            return 'SMAN 1 Nagreg memiliki 3 program studi: IPA (Ilmu Pengetahuan Alam), IPS (Ilmu Pengetahuan Sosial), dan Bahasa. Setiap program dirancang untuk mempersiapkan siswa melanjutkan ke perguruan tinggi sesuai minat dan bakat mereka.';
        }
        
        if (str_contains($message, 'guru') || str_contains($message, 'pengajar') || str_contains($message, 'staff')) {
            return 'SMAN 1 Nagreg memiliki lebih dari 50 guru dan tenaga kependidikan yang kompeten dan berpengalaman. Para guru kami berlatar belakang pendidikan S1 dan S2 dari universitas terkemuka. Informasi lengkap tentang guru dan tenaga kependidikan dapat Anda lihat di halaman Profil > Guru dan Tenaga Kependidikan.';
        }
        
        if (str_contains($message, 'prestasi') || str_contains($message, 'juara') || str_contains($message, 'lomba')) {
            return 'SMAN 1 Nagreg telah meraih berbagai prestasi di tingkat kabupaten, provinsi, dan nasional dalam bidang akademik maupun non-akademik. Prestasi terbaru dan informasi lomba dapat Anda ikuti melalui halaman Berita di website kami.';
        }
        
        if (str_contains($message, 'adiwiyata') || str_contains($message, 'lingkungan')) {
            return 'SMAN 1 Nagreg adalah sekolah Adiwiyata yang berkomitmen pada pendidikan lingkungan hidup. Kami memiliki berbagai program seperti Pokja Kebersihan dan Sanitasi, Pengelolaan Sampah, Penanaman Tanaman, Konservasi Energi dan Air, serta Inovasi Perilaku Ramah Lingkungan.';
        }
        
        if (str_contains($message, 'biaya') || str_contains($message, 'gratis') || str_contains($message, 'bayar')) {
            return 'SMAN 1 Nagreg adalah sekolah negeri sehingga tidak dipungut biaya pendidikan (gratis). Namun ada beberapa kontribusi sukarela untuk kegiatan sekolah dan seragam. Informasi detail tentang kontribusi dapat ditanyakan langsung ke sekolah.';
        }
        
        if (str_contains($message, 'jam') || str_contains($message, 'waktu') || str_contains($message, 'jadwal')) {
            return 'Jam belajar di SMAN 1 Nagreg adalah Senin-Jumat pukul 07.00-15.00 WIB, dan Sabtu pukul 07.00-11.00 WIB. Jadwal pelajaran lengkap dapat dilihat di halaman Akademik > Jadwal Pelajaran di website kami.';
        }
        
        // Respons default
        return 'Terima kasih atas pertanyaan Anda tentang SMAN 1 Nagreg. Untuk informasi lebih detail, silakan kunjungi halaman terkait di website kami atau hubungi langsung ke sekolah di (022) 123-4567. Apakah ada hal lain tentang SMAN 1 Nagreg yang ingin Anda ketahui?';
    }

    // Public method untuk testing
    public function getTestResponse(string $message): string
    {
        return $this->getFallbackResponse($message);
    }
}