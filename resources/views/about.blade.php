@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-indigo-600 via-blue-600 to-cyan-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Tentang SMAN 1 Nagreg
                </h1>
                <p class="text-xl text-indigo-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Sekolah unggulan dengan komitmen tinggi pada pendidikan berkualitas dan pembentukan karakter
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Tentang Kami</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- School Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah SMAN 1 Nagreg</h2>
                <div class="prose prose-lg text-gray-600">
                    <p class="mb-4">
                        SMA Negeri 1 Nagreg didirikan pada tahun 1985 sebagai upaya pemerintah untuk meningkatkan akses pendidikan menengah atas di wilayah Kabupaten Bandung bagian timur. Sekolah ini awalnya hanya memiliki 3 kelas dengan 120 siswa.
                    </p>
                    <p class="mb-4">
                        Dari tahun ke tahun, SMAN 1 Nagreg terus berkembang dan kini telah menjadi salah satu sekolah unggulan di Kabupaten Bandung. Dengan mengusung visi "Terwujudnya Peserta Didik yang Cerdas, Terampil, Berkarakter, dan Berwawasan Lingkungan", sekolah ini berkomitmen untuk memberikan pendidikan terbaik.
                    </p>
                    <p>
                        Saat ini, SMAN 1 Nagreg memiliki 36 rombongan belajar dengan lebih dari 1.200 siswa yang dibimbing oleh 85 tenaga pendidik dan kependidikan yang profesional dan berpengalaman.
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="{{ asset('images/about/school-history.jpg') }}" alt="Sejarah SMAN 1 Nagreg" 
                         class="w-full h-80 object-cover rounded-lg shadow-lg"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQwIiBoZWlnaHQ9IjQ4MCIgdmlld0JveD0iMCAwIDY0MCA0ODAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3Qgd2lkdGg9IjY0MCIgaGVpZ2h0PSI0ODAiIGZpbGw9IiNGM0Y0RjYiLz48cGF0aCBkPSJNMzIwIDI0MEM0MTkuNDEgMjQwIDQ5NiAxNjMuNDEgNDk2IDY0UzQxOS40MS0xMiAzMjAtMTJTMTQ0IDY0LjU5IDE0NCA2NFM5OC41OSAyNDAgMzIwIDI0MFoiIGZpbGw9IiNFNUU3RUIiLz48cGF0aCBkPSJNMzIwIDI2NEw0NTAuMzUyIDEzNkg0MTYuMTc2TDM4NC4xNzYgMTY4SDI1NS44MjRMMjIzLjgyNCAxMzZIMTg5LjY0N0wzMjAgMjY0WiIgZmlsbD0iI0Q1RDlERCIvPjwvc3ZnPg=='">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Vision -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-xl font-semibold text-blue-900">Visi</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <blockquote class="text-lg text-gray-700 italic text-center leading-relaxed">
                        "Terwujudnya Peserta Didik yang Cerdas, Terampil, Berkarakter, dan Berwawasan Lingkungan"
                    </blockquote>
                </div>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-xl font-semibold text-green-900">Misi</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Menyelenggarakan pendidikan yang berkualitas dan berkarakter</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Mengembangkan potensi peserta didik secara optimal</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Menanamkan nilai-nilai religius dan nasionalisme</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Menciptakan lingkungan sekolah yang kondusif dan ramah lingkungan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Membangun kerjasama dengan stakeholder pendidikan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- School Statistics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">1,247</h3>
                <p class="text-gray-600">Total Siswa</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">85</h3>
                <p class="text-gray-600">Tenaga Pendidik</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">36</h3>
                <p class="text-gray-600">Rombongan Belajar</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">40</h3>
                <p class="text-gray-600">Tahun Berdiri</p>
            </div>
        </div>

        <!-- Achievements & Awards -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-16">
            <div class="px-6 py-4 bg-yellow-50 border-b border-yellow-200">
                <h3 class="text-xl font-semibold text-yellow-900">Prestasi & Penghargaan</h3>
                <p class="text-sm text-yellow-700">Pencapaian SMAN 1 Nagreg dalam berbagai bidang</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                    $achievements = [
                        [
                            'title' => 'Sekolah Adiwiyata Nasional',
                            'year' => '2023',
                            'description' => 'Penghargaan dari Kementerian Lingkungan Hidup untuk sekolah peduli lingkungan',
                            'color' => 'green'
                        ],
                        [
                            'title' => 'Juara 1 Olimpiade Sains Nasional',
                            'year' => '2024',
                            'description' => 'Bidang Fisika tingkat SMA se-Indonesia',
                            'color' => 'blue'
                        ],
                        [
                            'title' => 'Sekolah Referensi Kurikulum Merdeka',
                            'year' => '2024',
                            'description' => 'Sekolah percontohan implementasi Kurikulum Merdeka di Jawa Barat',
                            'color' => 'purple'
                        ],
                        [
                            'title' => 'Juara 2 Lomba Sekolah Sehat',
                            'year' => '2023',
                            'description' => 'Tingkat Provinsi Jawa Barat kategori SMA',
                            'color' => 'yellow'
                        ],
                        [
                            'title' => 'Akreditasi A',
                            'year' => '2022',
                            'description' => 'Akreditasi Unggul dari Badan Akreditasi Nasional Sekolah/Madrasah',
                            'color' => 'indigo'
                        ],
                        [
                            'title' => 'Best Practice Digitalisasi Sekolah',
                            'year' => '2024',
                            'description' => 'Penghargaan inovasi teknologi pendidikan tingkat Kabupaten Bandung',
                            'color' => 'pink'
                        ]
                    ];
                    @endphp

                    @foreach($achievements as $achievement)
                    <div class="bg-{{ $achievement['color'] }}-50 border border-{{ $achievement['color'] }}-200 rounded-lg p-6">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="font-semibold text-{{ $achievement['color'] }}-900 text-lg leading-tight">{{ $achievement['title'] }}</h4>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-{{ $achievement['color'] }}-100 text-{{ $achievement['color'] }}-800">
                                {{ $achievement['year'] }}
                            </span>
                        </div>
                        <p class="text-{{ $achievement['color'] }}-700 text-sm">{{ $achievement['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-16">
            <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                <h3 class="text-xl font-semibold text-indigo-900">Fasilitas Sekolah</h3>
                <p class="text-sm text-indigo-700">Sarana dan prasarana pendukung kegiatan belajar mengajar</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                    $facilities = [
                        ['name' => 'Ruang Kelas', 'count' => '36', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['name' => 'Laboratorium', 'count' => '8', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                        ['name' => 'Perpustakaan', 'count' => '1', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                        ['name' => 'Lapangan Olahraga', 'count' => '4', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                        ['name' => 'Aula', 'count' => '1', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['name' => 'Masjid', 'count' => '1', 'icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z'],
                        ['name' => 'Kantin', 'count' => '3', 'icon' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'],
                                                ['name' => 'Parking Area', 'count' => '2', 'icon' => 'M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2v0a2 2 0 01-2 2H8a2 2 0 01-2-2v0a2 2 0 01-2-2V9a2 2 0 012-2h2z']
                    ];
                    @endphp

                    @foreach($facilities as $facility)
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $facility['icon'] }}"></path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-gray-900 mb-1">{{ $facility['name'] }}</h4>
                        <p class="text-2xl font-bold text-indigo-600">{{ $facility['count'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- School Values -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border p-8">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Nilai-Nilai SMAN 1 Nagreg</h3>
                <p class="text-gray-600 max-w-3xl mx-auto">Lima pilar utama yang menjadi fondasi pendidikan karakter di SMAN 1 Nagreg</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                @php
                $values = [
                    [
                        'name' => 'RELIGIUS',
                        'description' => 'Menjalankan ajaran agama dengan penuh ketakwaan',
                        'icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z',
                        'color' => 'green'
                    ],
                    [
                        'name' => 'INTEGRITAS',
                        'description' => 'Menjunjung tinggi kejujuran dan konsistensi',
                        'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                        'color' => 'blue'
                    ],
                    [
                        'name' => 'MANDIRI',
                        'description' => 'Mengembangkan kemandirian dan tanggung jawab',
                        'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                        'color' => 'purple'
                    ],
                    [
                        'name' => 'GOTONG ROYONG',
                        'description' => 'Membangun semangat kerjasama dan kebersamaan',
                        'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                        'color' => 'yellow'
                    ],
                    [
                        'name' => 'BERKEBINEKAAN',
                        'description' => 'Menghargai perbedaan dan keberagaman',
                        'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                        'color' => 'red'
                    ]
                ];
                @endphp

                @foreach($values as $value)
                <div class="text-center">
                    <div class="w-16 h-16 bg-{{ $value['color'] }}-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-{{ $value['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['icon'] }}"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-{{ $value['color'] }}-900 mb-2 text-sm">{{ $value['name'] }}</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">{{ $value['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection