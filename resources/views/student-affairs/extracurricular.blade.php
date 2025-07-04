@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Ekstrakurikuler
                </h1>
                <p class="text-xl text-emerald-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Wadah pengembangan bakat, minat, dan kreativitas siswa SMAN 1 Nagreg
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Ekstrakurikuler</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Section -->
        <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 mb-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">Filter Ekstrakurikuler</h2>
                    <p class="text-sm text-gray-600">Pilih kategori ekstrakurikuler yang ingin dilihat</p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                    <select id="category-filter" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="all">Semua Kategori</option>
                        <option value="olahraga">Olahraga</option>
                        <option value="seni">Seni & Budaya</option>
                        <option value="akademik">Akademik</option>
                        <option value="teknologi">Teknologi</option>
                        <option value="keagamaan">Keagamaan</option>
                        <option value="sosial">Sosial & Lingkungan</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-emerald-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Total Ekskul</h3>
                <p class="text-lg sm:text-2xl font-bold text-emerald-600">24</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Peserta Aktif</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">892</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Prestasi 2025</h3>
                <p class="text-lg sm:text-2xl font-bold text-yellow-600">47</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Pembina</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">32</p>
            </div>
        </div>

        <!-- Ekstrakurikuler Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @php
            $extracurriculars = [
                [
                    'name' => 'Pramuka',
                    'category' => 'sosial',
                    'description' => 'Kegiatan kepanduan untuk membangun karakter kepemimpinan dan kemandirian siswa.',
                    'coach' => 'Drs. Bambang Sutrisno',
                    'schedule' => 'Sabtu, 14:00-16:00',
                    'members' => 125,
                    'achievements' => 'Juara 1 Lomba Tingkat Kabupaten 2024',
                    'color' => 'green',
                    'image' => 'pramuka.jpg'
                ],
                [
                    'name' => 'Basket',
                    'category' => 'olahraga',
                    'description' => 'Tim basket sekolah yang aktif mengikuti kompetisi antar sekolah tingkat regional.',
                    'coach' => 'S.Pd. Agus Priyanto',
                    'schedule' => 'Selasa & Kamis, 15:30-17:00',
                    'members' => 28,
                    'achievements' => 'Juara 2 DBL 2024',
                    'color' => 'orange',
                    'image' => 'basket.jpg'
                ],
                [
                    'name' => 'Paduan Suara',
                    'category' => 'seni',
                    'description' => 'Ekstrakurikuler musik vokal yang mengembangkan bakat menyanyi dan harmonisasi.',
                    'coach' => 'S.Pd. Lina Marlina',
                    'schedule' => 'Rabu, 14:00-16:00',
                    'members' => 42,
                    'achievements' => 'Juara 1 FLS2N Tingkat Provinsi',
                    'color' => 'purple',
                    'image' => 'paduan-suara.jpg'
                ],
                [
                    'name' => 'English Club',
                    'category' => 'akademik',
                    'description' => 'Klub bahasa Inggris untuk meningkatkan kemampuan speaking dan writing.',
                    'coach' => 'S.Pd. Maya Sari',
                    'schedule' => 'Jumat, 13:00-15:00',
                    'members' => 35,
                    'achievements' => 'Juara 3 English Speech Contest',
                    'color' => 'blue',
                    'image' => 'english-club.jpg'
                ],
                [
                    'name' => 'Robotika',
                    'category' => 'teknologi',
                    'description' => 'Ekstrakurikuler teknologi yang mempelajari pemrograman dan robotika.',
                    'coach' => 'S.Kom. Rudi Hartono',
                    'schedule' => 'Sabtu, 09:00-12:00',
                    'members' => 22,
                    'achievements' => 'Finalis KRI 2024',
                    'color' => 'indigo',
                    'image' => 'robotika.jpg'
                ],
                [
                    'name' => 'Rohis',
                    'category' => 'keagamaan',
                    'description' => 'Rohani Islam untuk pengembangan spiritual dan kegiatan keagamaan.',
                    'coach' => 'S.Ag. Ali Rahman',
                    'schedule' => 'Jumat, 11:30-12:30',
                    'members' => 89,
                    'achievements' => 'Juara 1 MTQ Pelajar Tingkat Kota',
                    'color' => 'emerald',
                    'image' => 'rohis.jpg'
                ]
            ];
            @endphp

            @foreach($extracurriculars as $ekskul)
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-md transition-shadow duration-300 ekskul-card" data-category="{{ $ekskul['category'] }}">
                <div class="relative h-48 bg-{{ $ekskul['color'] }}-100">
                    <img src="{{ asset('images/extracurricular/' . $ekskul['image']) }}" alt="{{ $ekskul['name'] }}" 
                         class="w-full h-full object-cover" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="absolute inset-0 bg-{{ $ekskul['color'] }}-500 bg-opacity-20 hidden items-center justify-center">
                        <svg class="w-16 h-16 text-{{ $ekskul['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-4 left-4">
                        @php
                        $categoryLabels = [
                            'olahraga' => 'Olahraga',
                            'seni' => 'Seni & Budaya',
                            'akademik' => 'Akademik',
                            'teknologi' => 'Teknologi',
                            'keagamaan' => 'Keagamaan',
                            'sosial' => 'Sosial & Lingkungan'
                        ];
                        @endphp
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-white text-{{ $ekskul['color'] }}-800">
                            {{ $categoryLabels[$ekskul['category']] }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $ekskul['name'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $ekskul['description'] }}</p>
                    
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center text-gray-500">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            {{ $ekskul['coach'] }}
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ $ekskul['schedule'] }}
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            {{ $ekskul['members'] }} Anggota
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-start space-x-2 mb-4">
                            <svg class="w-4 h-4 mt-0.5 text-yellow-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-xs text-gray-600 font-medium">{{ $ekskul['achievements'] }}</span>
                        </div>

                        <!-- Button yang diperbaiki -->
                        <div class="mt-4">
                            @if($ekskul['color'] === 'orange')
                                <!-- Untuk basket menggunakan warna yang lebih kontras -->
                                <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                    Daftar Ekstrakurikuler
                                </button>
                            @elseif($ekskul['color'] === 'emerald')
                                <!-- Untuk rohis menggunakan warna emerald yang lebih kontras -->
                                <button class="w-full bg-emerald-500 hover:bg-emerald-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                                    Daftar Ekstrakurikuler
                                </button>
                            @else
                                <!-- Untuk ekstrakurikuler lainnya -->
                                <button class="w-full bg-{{ $ekskul['color'] }}-600 hover:bg-{{ $ekskul['color'] }}-700 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-{{ $ekskul['color'] }}-500 focus:ring-offset-2">
                                    Daftar Ekstrakurikuler
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Registration Info -->
        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg border p-6">
            <div class="text-center mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Informasi Pendaftaran</h3>
                <p class="text-gray-600">Bergabunglah dengan ekstrakurikuler sesuai minat dan bakatmu!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Periode Pendaftaran</h4>
                    <p class="text-sm text-gray-600">15-31 Juli 2025</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Syarat</h4>
                    <p class="text-sm text-gray-600">Formulir & Surat Izin Ortu</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Lokasi</h4>
                    <p class="text-sm text-gray-600">Ruang Kesiswaan</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Kontak</h4>
                    <p class="text-sm text-gray-600">kesiswaan@sman1nagreg.sch.id</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('category-filter');
    const ekskulCards = document.querySelectorAll('.ekskul-card');

    categoryFilter.addEventListener('change', function() {
        const selectedCategory = this.value;
        
        ekskulCards.forEach(card => {
            if (selectedCategory === 'all' || card.getAttribute('data-category') === selectedCategory) {
                card.style.display = 'block';
                card.classList.add('animate-fade-in');
            } else {
                card.style.display = 'none';
                card.classList.remove('animate-fade-in');
            }
        });
    });
});
</script>

<style>
.animate-fade-in {
    animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Tambahan CSS untuk memastikan button terlihat dengan baik */
.ekskul-card button {
    z-index: 10;
    position: relative;
}

/* Pastikan button memiliki kontras yang baik */
.bg-orange-500 {
    background-color: #f97316 !important;
}

.bg-orange-600 {
    background-color: #ea580c !important;
}

.bg-emerald-500 {
    background-color: #10b981 !important;
}

.bg-emerald-600 {
    background-color: #059669 !important;
}

/* Focus states untuk accessibility */
button:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}

.focus\:ring-orange-500:focus {
    --tw-ring-color: rgb(249 115 22);
}

.focus\:ring-emerald-500:focus {
    --tw-ring-color: rgb(16 185 129);
}
</style>
@endsection