@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Kontak Kami
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Hubungi kami untuk informasi lebih lanjut tentang SMAN 1 Nagreg
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center font-medium text-gray-700 hover:text-blue-600">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1 sm:mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Kontak</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Contact Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Alamat</h3>
                <p class="text-sm text-gray-600">Jl. Raya Nagreg No. 123<br>Nagreg, Bandung<br>Jawa Barat 40376</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Telepon</h3>
                <p class="text-sm text-gray-600">(022) 1234-5678<br>(022) 1234-5679<br>Fax: (022) 1234-5680</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                <p class="text-sm text-gray-600">info@sman1nagreg.sch.id<br>admin@sman1nagreg.sch.id<br>humas@sman1nagreg.sch.id</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Jam Operasional</h3>
                <p class="text-sm text-gray-600">Sen-Jum: 07:00-15:00<br>Sabtu: 07:00-12:00<br>Minggu: Tutup</p>
            </div>
        </div>

        <!-- Contact Form & Map -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-900">Kirim Pesan</h3>
                    <p class="text-sm text-blue-700">Silakan isi form di bawah untuk menghubungi kami</p>
                </div>
                <div class="p-6">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">No. Telepon</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                                <select id="subject" name="subject" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Pilih Subjek</option>
                                    <option value="informasi-umum">Informasi Umum</option>
                                    <option value="pendaftaran">Pendaftaran Siswa Baru</option>
                                    <option value="akademik">Informasi Akademik</option>
                                    <option value="ekstrakurikuler">Ekstrakurikuler</option>
                                    <option value="kerjasama">Kerjasama</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="privacy" name="privacy" required class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="privacy" class="ml-2 block text-sm text-gray-700">
                                Saya setuju dengan <a href="#" class="text-blue-600 hover:text-blue-700">kebijakan privasi</a>
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map & Location -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-lg font-semibold text-green-900">Lokasi Kami</h3>
                    <p class="text-sm text-green-700">SMAN 1 Nagreg, Bandung, Jawa Barat</p>
                </div>
                <div class="p-6">
                    <!-- Map Placeholder -->
                    <div class="aspect-w-16 aspect-h-9 mb-6">
                        <div class="w-full h-80 bg-gray-200 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-gray-500">Google Maps</p>
                                <p class="text-sm text-gray-400">SMAN 1 Nagreg</p>
                            </div>
                        </div>
                    </div>

                    <!-- Transportation Info -->
                    <div class="space-y-4">
                        <h4 class="font-medium text-gray-900">Transportasi</h4>
                        
                        <div class="bg-blue-50 rounded-lg p-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2v0a2 2 0 01-2 2H8a2 2 0 01-2-2v0a2 2 0 01-2-2V9a2 2 0 012-2h2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-medium text-blue-900">Kendaraan Umum</h5>
                                    <p class="text-sm text-blue-700">Angkot Cicalengka-Nagreg, Bus Damri Terminal Nagreg</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-green-50 rounded-lg p-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-medium text-green-900">Kendaraan Pribadi</h5>
                                    <p class="text-sm text-green-700">15 menit dari Cicalengka, 30 menit dari Bandung Timur</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-purple-50 rounded-lg p-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-medium text-purple-900">Landmark Terdekat</h5>
                                    <p class="text-sm text-purple-700">Terminal Nagreg, Pasar Tradisional Nagreg, Masjid Agung Nagreg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department Contacts -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-12">
            <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                <h3 class="text-lg font-semibold text-indigo-900">Kontak Departemen</h3>
                <p class="text-sm text-indigo-700">Hubungi langsung departemen yang Anda butuhkan</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                    $departments = [
                        [
                            'name' => 'Tata Usaha',
                            'phone' => '(022) 1234-5678 ext. 101',
                            'email' => 'tu@sman1nagreg.sch.id',
                            'person' => 'Drs. Bambang Sutrisno',
                            'color' => 'blue'
                        ],
                        [
                            'name' => 'Kesiswaan',
                            'phone' => '(022) 1234-5678 ext. 102',
                            'email' => 'kesiswaan@sman1nagreg.sch.id',
                            'person' => 'S.Pd. Rina Safitri',
                            'color' => 'green'
                        ],
                        [
                            'name' => 'Kurikulum',
                            'phone' => '(022) 1234-5678 ext. 103',
                            'email' => 'kurikulum@sman1nagreg.sch.id',
                            'person' => 'Dr. Maya Sari, M.Pd',
                            'color' => 'purple'
                        ],
                        [
                            'name' => 'Humas',
                            'phone' => '(022) 1234-5678 ext. 104',
                            'email' => 'humas@sman1nagreg.sch.id',
                            'person' => 'S.Pd. Agus Priyanto',
                            'color' => 'yellow'
                        ],
                        [
                            'name' => 'Perpustakaan',
                            'phone' => '(022) 1234-5678 ext. 105',
                            'email' => 'perpus@sman1nagreg.sch.id',
                            'person' => 'S.I.Pust. Lina Marlina',
                            'color' => 'indigo'
                        ],
                        [
                            'name' => 'BK (Bimbingan Konseling)',
                            'phone' => '(022) 1234-5678 ext. 106',
                            'email' => 'bk@sman1nagreg.sch.id',
                            'person' => 'S.Pd. Dewi Lestari',
                            'color' => 'pink'
                        ]
                    ];
                    @endphp

                    @foreach($departments as $dept)
                    <div class="bg-{{ $dept['color'] }}-50 border border-{{ $dept['color'] }}-200 rounded-lg p-6">
                        <h4 class="font-semibold text-{{ $dept['color'] }}-900 mb-3">{{ $dept['name'] }}</h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center text-{{ $dept['color'] }}-700">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                {{ $dept['person'] }}
                            </div>
                            <div class="flex items-center text-{{ $dept['color'] }}-700">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                {{ $dept['phone'] }}
                            </div>
                            <div class="flex items-center text-{{ $dept['color'] }}-700">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                {{ $dept['email'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b">
                <h3 class="text-lg font-semibold text-gray-900">Pertanyaan yang Sering Diajukan (FAQ)</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @php
                    $faqs = [
                        [
                            'question' => 'Kapan pendaftaran siswa baru dibuka?',
                            'answer' => 'Pendaftaran siswa baru biasanya dibuka pada bulan Juni-Juli setiap tahunnya. Informasi lengkap akan diumumkan melalui website dan media sosial resmi sekolah.'
                        ],
                        [
                            'question' => 'Apa saja jurusan yang tersedia di SMAN 1 Nagreg?',
                            'answer' => 'SMAN 1 Nagreg menyediakan 2 jurusan: MIPA (Matematika dan Ilmu Pengetahuan Alam) dan IPS (Ilmu Pengetahuan Sosial).'
                        ],
                        [
                            'question' => 'Bagaimana cara mendaftar ekstrakurikuler?',
                            'answer' => 'Pendaftaran ekstrakurikuler dilakukan pada awal tahun ajaran. Siswa dapat mendaftar melalui bagian kesiswaan atau koordinator ekstrakurikuler masing-masing.'
                        ],
                        [
                            'question' => 'Apakah ada program beasiswa?',
                            'answer' => 'Ya, tersedia berbagai program beasiswa seperti KIP (Kartu Indonesia Pintar), beasiswa prestasi, dan beasiswa dari alumni. Informasi lengkap dapat diperoleh di bagian tata usaha.'
                        ],
                        [
                            'question' => 'Bagaimana sistem pembelajaran di SMAN 1 Nagreg?',
                            'answer' => 'SMAN 1 Nagreg menerapkan Kurikulum Merdeka dengan pembelajaran tatap muka, dilengkapi dengan teknologi digital dan pendekatan student-centered learning.'
                        ]
                    ];
                    @endphp

                    @foreach($faqs as $index => $faq)
                    <div class="border border-gray-200 rounded-lg">
                        <button class="w-full px-6 py-4 text-left focus:outline-none faq-toggle" data-target="faq-{{ $index }}">
                            <div class="flex items-center justify-between">
                                <h4 class="font-medium text-gray-900">{{ $faq['question'] }}</h4>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="faq-{{ $index }}" class="hidden px-6 pb-4">
                            <p class="text-gray-600">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const target = document.getElementById(this.getAttribute('data-target'));
            const icon = this.querySelector('.faq-icon');
            
            if (target.classList.contains('hidden')) {
                target.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                target.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
});
</script>
@endsection