@extends('layouts.app')

@section('title', 'Alumni')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-amber-600 via-orange-600 to-red-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Alumni SMAN 1 Nagreg
                </h1>
                <p class="text-xl text-amber-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Jejak prestasi dan kontribusi alumni dalam membangun bangsa
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        "Bangga Menjadi Bagian Keluarga Besar SMAN 1 Nagreg"
                    </span>
                </div>
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
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Kesiswaan</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Alumni</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Alumni Statistics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-amber-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Total Alumni</h3>
                <p class="text-lg sm:text-2xl font-bold text-amber-600">15,247</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2-2H5a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Melanjutkan Kuliah</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">87%</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Bekerja</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">92%</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Alumni Berprestasi</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">156</p>
            </div>
        </div>

        <!-- Featured Alumni -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Alumni Inspiratif</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Alumni SMAN 1 Nagreg yang telah mencapai kesuksesan dan memberikan kontribusi nyata bagi masyarakat
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $featuredAlumni = [
                    [
                        'name' => 'Dr. Siti Nurhaliza, M.Si',
                        'graduation_year' => '1998',
                        'current_position' => 'Direktur Rumah Sakit Umum Daerah',
                        'achievement' => 'Dokter spesialis yang memimpin transformasi digital layanan kesehatan',
                        'field' => 'Kesehatan',
                        'color' => 'blue',
                        'image' => 'alumni-1.jpg'
                    ],
                    [
                        'name' => 'Ir. Ahmad Fadhil Rahman, M.T',
                        'graduation_year' => '2001',
                        'current_position' => 'CEO Tech Startup Unicorn',
                        'achievement' => 'Founder startup teknologi yang berhasil mencapai valuasi $1 miliar',
                        'field' => 'Teknologi',
                        'color' => 'purple',
                        'image' => 'alumni-2.jpg'
                    ],
                    [
                        'name' => 'Prof. Dr. Maya Sari Dewi, Ph.D',
                        'graduation_year' => '1995',
                        'current_position' => 'Profesor Fisika ITB',
                        'achievement' => 'Peneliti terkemuka dalam bidang energi terbarukan',
                        'field' => 'Akademisi',
                        'color' => 'green',
                        'image' => 'alumni-3.jpg'
                    ],
                    [
                        'name' => 'Drs. Bambang Sutrisno, M.M',
                        'graduation_year' => '1992',
                        'current_position' => 'Bupati Kabupaten Bandung',
                        'achievement' => 'Pemimpin daerah yang berinovasi dalam pelayanan publik',
                        'field' => 'Pemerintahan',
                        'color' => 'red',
                        'image' => 'alumni-4.jpg'
                    ],
                    [
                        'name' => 'Hj. Rina Safitri, S.E, M.M',
                        'graduation_year' => '2000',
                        'current_position' => 'Direktur Bank Nasional',
                        'achievement' => 'Eksekutif perbankan yang memimpin transformasi digital',
                        'field' => 'Perbankan',
                        'color' => 'yellow',
                        'image' => 'alumni-5.jpg'
                    ],
                    [
                        'name' => 'Dr. Agus Priyanto, Sp.PD',
                        'graduation_year' => '1997',
                        'current_position' => 'Dokter Spesialis & Peneliti',
                        'achievement' => 'Dokter yang berkontribusi dalam penelitian obat COVID-19',
                        'field' => 'Medis',
                        'color' => 'indigo',
                        'image' => 'alumni-6.jpg'
                    ]
                ];
                @endphp

                @foreach($featuredAlumni as $alumni)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-48 bg-{{ $alumni['color'] }}-100">
                        <img src="{{ asset('images/alumni/' . $alumni['image']) }}" alt="{{ $alumni['name'] }}" 
                             class="w-full h-full object-cover" 
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="absolute inset-0 bg-{{ $alumni['color'] }}-500 bg-opacity-20 hidden items-center justify-center">
                            <svg class="w-16 h-16 text-{{ $alumni['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-white text-{{ $alumni['color'] }}-800">
                                Angkatan {{ $alumni['graduation_year'] }}
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $alumni['color'] }}-100 text-{{ $alumni['color'] }}-800">
                                {{ $alumni['field'] }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $alumni['name'] }}</h3>
                        <p class="text-{{ $alumni['color'] }}-600 font-semibold mb-3">{{ $alumni['current_position'] }}</p>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $alumni['achievement'] }}</p>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">Lulus: {{ $alumni['graduation_year'] }}</span>
                            <button class="text-{{ $alumni['color'] }}-600 hover:text-{{ $alumni['color'] }}-700 text-sm font-medium">
                                Lihat Profil →
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- University Distribution -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Top Universities -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-900">Perguruan Tinggi Favorit</h3>
                    <p class="text-sm text-blue-700">Universitas tujuan alumni SMAN 1 Nagreg</p>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $universities = [
                            ['name' => 'Institut Teknologi Bandung (ITB)', 'percentage' => 25, 'students' => 1247],
                            ['name' => 'Universitas Padjadjaran (UNPAD)', 'percentage' => 22, 'students' => 1095],
                            ['name' => 'Universitas Indonesia (UI)', 'percentage' => 15, 'students' => 747],
                            ['name' => 'Universitas Gadjah Mada (UGM)', 'percentage' => 12, 'students' => 598],
                            ['name' => 'Institut Pertanian Bogor (IPB)', 'percentage' => 10, 'students' => 498],
                            ['name' => 'Lainnya', 'percentage' => 16, 'students' => 798]
                        ];
                        @endphp

                        @foreach($universities as $university)
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900">{{ $university['name'] }}</span>
                                    <span class="text-sm text-gray-500">{{ number_format($university['students']) }} alumni</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $university['percentage'] }}%"></div>
                                </div>
                            </div>
                            <div class="ml-4 text-sm font-medium text-gray-900">{{ $university['percentage'] }}%</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Career Fields -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-lg font-semibold text-green-900">Bidang Karir</h3>
                    <p class="text-sm text-green-700">Distribusi karir alumni berdasarkan bidang pekerjaan</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-2">65%</div>
                            <p class="text-sm text-gray-600">Sektor Swasta</p>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2">35%</div>
                            <p class="text-sm text-gray-600">Sektor Publik</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        @php
                        $careers = [
                            ['field' => 'Teknologi & IT', 'percentage' => 28],
                            ['field' => 'Kesehatan & Medis', 'percentage' => 18],
                            ['field' => 'Pendidikan', 'percentage' => 15],
                            ['field' => 'Bisnis & Keuangan', 'percentage' => 12],
                            ['field' => 'Pemerintahan', 'percentage' => 10],
                            ['field' => 'Lainnya', 'percentage' => 17]
                        ];
                        @endphp

                        @foreach($careers as $career)
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-900">{{ $career['field'] }}</span>
                                <span class="text-sm text-gray-500">{{ $career['percentage'] }}%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: {{ $career['percentage'] }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Alumni Events & News -->
        <div class="mb-16">
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-amber-50 border-b border-amber-200">
                    <h3 class="text-lg font-semibold text-amber-900">Kegiatan & Berita Alumni</h3>
                    <p class="text-sm text-amber-700">Update terbaru dari komunitas alumni SMAN 1 Nagreg</p>
                </div>
                <div class="divide-y divide-gray-200">
                    @php
                    $alumniNews = [
                        [
                            'title' => 'Reuni Akbar Alumni Angkatan 1995 - 30 Tahun Bersama',
                            'date' => '2025-06-15',
                            'type' => 'Event',
                            'description' => 'Acara reuni akbar alumni angkatan 1995 yang mengusung tema "30 Tahun Bersama, Berbagi Inspirasi".',
                            'participants' => '250+ Alumni',
                            'color' => 'blue'
                        ],
                        [
                            'title' => 'Alumni Raih Penghargaan Inovator Muda Terbaik 2025',
                            'date' => '2025-05-28',
                            'type' => 'Prestasi',
                            'description' => 'Ahmad Fadhil Rahman (Angkatan 2001) meraih penghargaan Inovator Muda Terbaik dari Kementerian Riset dan Teknologi.',
                            'participants' => 'Ahmad Fadhil Rahman',
                            'color' => 'green'
                        ],
                                                [
                            'title' => 'Program Beasiswa Alumni untuk Siswa Berprestasi',
                            'date' => '2025-04-20',
                            'type' => 'Program',
                            'description' => 'Ikatan Alumni SMAN 1 Nagreg meluncurkan program beasiswa untuk 50 siswa berprestasi kurang mampu.',
                            'participants' => '50 Penerima Beasiswa',
                            'color' => 'purple'
                        ],
                        [
                            'title' => 'Webinar "Kewirausahaan Digital di Era Modern"',
                            'date' => '2025-03-10',
                            'type' => 'Webinar',
                            'description' => 'Webinar motivasi yang menghadirkan alumni sukses di bidang kewirausahaan digital.',
                            'participants' => '500+ Peserta',
                            'color' => 'yellow'
                        ]
                    ];
                    @endphp

                    @foreach($alumniNews as $news)
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:space-x-6">
                            <div class="flex-shrink-0 mb-4 lg:mb-0">
                                <div class="text-center lg:w-20">
                                    <div class="text-2xl font-bold text-{{ $news['color'] }}-600">{{ date('d', strtotime($news['date'])) }}</div>
                                    <div class="text-sm text-gray-500">{{ date('M Y', strtotime($news['date'])) }}</div>
                                </div>
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $news['color'] }}-100 text-{{ $news['color'] }}-800">
                                        {{ $news['type'] }}
                                    </span>
                                    <span class="text-sm text-gray-500">{{ date('d M Y', strtotime($news['date'])) }}</span>
                                </div>

                                <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $news['title'] }}</h4>
                                <p class="text-gray-600 mb-3">{{ $news['description'] }}</p>

                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    {{ $news['participants'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Alumni Association & Contact -->
        <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Ikatan Alumni SMAN 1 Nagreg</h3>
                <p class="text-gray-600">Bergabunglah dengan komunitas alumni untuk tetap terhubung dan berbagi inspirasi</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Networking</h4>
                    <p class="text-sm text-gray-600">Membangun jaringan profesional yang kuat</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Mentoring</h4>
                    <p class="text-sm text-gray-600">Program bimbingan untuk adik kelas</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Donasi</h4>
                    <p class="text-sm text-gray-600">Kontribusi untuk kemajuan almamater</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Events</h4>
                    <p class="text-sm text-gray-600">Reuni dan acara alumni rutin</p>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <h4 class="font-medium text-gray-900 mb-3">Kontak Sekretariat Alumni</h4>
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            alumni@sman1nagreg.sch.id
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            (022) 1234-5678 ext. 105
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Ruang Alumni Lantai 1
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-medium text-gray-900 mb-3">Media Sosial Alumni</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center hover:bg-blue-200 transition-colors">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center hover:bg-pink-200 transition-colors">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center hover:bg-red-200 transition-colors">
                            <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-amber-600 text-white font-semibold rounded-lg hover:bg-amber-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Daftar Alumni
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Update Profil
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        Donasi Sekolah
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection