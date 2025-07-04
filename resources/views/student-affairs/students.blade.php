@extends('layouts.app')

@section('title', 'Peserta Didik')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Peserta Didik
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Profil dan data siswa SMAN 1 Nagreg Tahun Pelajaran 2024/2025
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Peserta Didik</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Statistics Overview -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Total Siswa</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">1,247</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Laki-laki</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">612</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-pink-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Perempuan</h3>
                <p class="text-lg sm:text-2xl font-bold text-pink-600">635</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Rombel</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">36</p>
            </div>
        </div>

        <!-- Distribution by Grade -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            <!-- Kelas X -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-900">Kelas X</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-blue-600 mb-2">423</div>
                        <p class="text-gray-600">Total Siswa</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">MIPA</span>
                            <span class="text-sm font-medium text-gray-900">12 Kelas (324 Siswa)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">IPS</span>
                            <span class="text-sm font-medium text-gray-900">3 Kelas (99 Siswa)</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="bg-blue-100 rounded-full h-2 mb-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 34%"></div>
                        </div>
                        <p class="text-xs text-gray-500 text-center">34% dari total siswa</p>
                    </div>
                </div>
            </div>

            <!-- Kelas XI -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-lg font-semibold text-green-900">Kelas XI</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-green-600 mb-2">412</div>
                        <p class="text-gray-600">Total Siswa</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">MIPA</span>
                            <span class="text-sm font-medium text-gray-900">12 Kelas (315 Siswa)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">IPS</span>
                            <span class="text-sm font-medium text-gray-900">3 Kelas (97 Siswa)</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="bg-green-100 rounded-full h-2 mb-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 33%"></div>
                        </div>
                        <p class="text-xs text-gray-500 text-center">33% dari total siswa</p>
                    </div>
                </div>
            </div>

            <!-- Kelas XII -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-purple-50 border-b border-purple-200">
                    <h3 class="text-lg font-semibold text-purple-900">Kelas XII</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-purple-600 mb-2">412</div>
                        <p class="text-gray-600">Total Siswa</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">MIPA</span>
                            <span class="text-sm font-medium text-gray-900">12 Kelas (318 Siswa)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">IPS</span>
                            <span class="text-sm font-medium text-gray-900">3 Kelas (94 Siswa)</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="bg-purple-100 rounded-full h-2 mb-2">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 33%"></div>
                        </div>
                        <p class="text-xs text-gray-500 text-center">33% dari total siswa</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Outstanding Students -->
        <div class="mb-8">
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-yellow-50 border-b border-yellow-200">
                    <h3 class="text-lg font-semibold text-yellow-900">Siswa Berprestasi 2024/2025</h3>
                    <p class="text-sm text-yellow-700">Siswa yang meraih prestasi gemilang di berbagai bidang</p>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                        $outstandingStudents = [
                            [
                                'name' => 'Aisyah Putri Maharani',
                                'class' => 'XII MIPA 1',
                                'achievement' => 'Juara 1 Olimpiade Fisika Nasional',
                                'year' => '2024',
                                'category' => 'Akademik',
                                'color' => 'blue'
                            ],
                            [
                                'name' => 'Muhammad Rizky Pratama',
                                'class' => 'XI MIPA 2',
                                'achievement' => 'Juara 2 Kompetisi Matematika Internasional',
                                'year' => '2024',
                                'category' => 'Akademik',
                                'color' => 'indigo'
                            ],
                            [
                                'name' => 'Sari Dewi Anggraeni',
                                'class' => 'XII IPS 1',
                                'achievement' => 'Juara 1 Lomba Pidato Bahasa Indonesia',
                                'year' => '2024',
                                'category' => 'Bahasa',
                                'color' => 'green'
                            ],
                            [
                                'name' => 'Ahmad Fadhil Rahman',
                                'class' => 'XI MIPA 3',
                                'achievement' => 'Juara 3 Olimpiade Kimia Provinsi',
                                'year' => '2024',
                                'category' => 'Akademik',
                                'color' => 'purple'
                            ],
                            [
                                'name' => 'Nadia Syifa Rahma',
                                'class' => 'X MIPA 1',
                                'achievement' => 'Juara 1 Lomba Essay Lingkungan',
                                'year' => '2025',
                                'category' => 'Lingkungan',
                                'color' => 'emerald'
                            ],
                            [
                                'name' => 'Bayu Adi Nugroho',
                                'class' => 'XII MIPA 2',
                                'achievement' => 'Juara 2 Kompetisi Robot Nasional',
                                'year' => '2024',
                                'category' => 'Teknologi',
                                'color' => 'orange'
                            ]
                        ];
                        @endphp

                        @foreach($outstandingStudents as $student)
                        <div class="bg-{{ $student['color'] }}-50 border border-{{ $student['color'] }}-200 rounded-lg p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-{{ $student['color'] }}-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-{{ $student['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-{{ $student['color'] }}-900 mb-1">{{ $student['name'] }}</h4>
                                    <p class="text-sm text-{{ $student['color'] }}-700 mb-2">{{ $student['class'] }}</p>
                                    <p class="text-sm text-{{ $student['color'] }}-800 font-medium mb-2">{{ $student['achievement'] }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-{{ $student['color'] }}-100 text-{{ $student['color'] }}-800">
                                            {{ $student['category'] }}
                                        </span>
                                        <span class="text-xs text-{{ $student['color'] }}-600">{{ $student['year'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Demographics -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Geographic Distribution -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                    <h3 class="text-lg font-semibold text-indigo-900">Sebaran Geografis</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $regions = [
                            ['name' => 'Nagreg', 'percentage' => 45, 'students' => 561],
                            ['name' => 'Cicalengka', 'percentage' => 18, 'students' => 224],
                            ['name' => 'Rancaekek', 'percentage' => 12, 'students' => 150],
                            ['name' => 'Majalaya', 'percentage' => 10, 'students' => 125],
                            ['name' => 'Ibun', 'percentage' => 8, 'students' => 100],
                            ['name' => 'Lainnya', 'percentage' => 7, 'students' => 87]
                        ];
                        @endphp

                        @foreach($regions as $region)
                        <div class="flex items-center justify-between">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900">{{ $region['name'] }}</span>
                                    <span class="text-sm text-gray-500">{{ $region['students'] }} siswa</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-600 h-2 rounded-full" style="width: {{ $region['percentage'] }}%"></div>
                                </div>
                            </div>
                            <div class="ml-4 text-sm font-medium text-gray-900">{{ $region['percentage'] }}%</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Academic Performance -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-lg font-semibold text-green-900">Prestasi Akademik</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-2">8.45</div>
                            <p class="text-sm text-gray-600">Rata-rata Nilai UN</p>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2">95.2%</div>
                            <p class="text-sm text-gray-600">Tingkat Kelulusan</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Matematika</span>
                                <span class="text-sm text-gray-500">8.7</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 87%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Bahasa Indonesia</span>
                                <span class="text-sm text-gray-500">8.5</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Bahasa Inggris</span>
                                <span class="text-sm text-gray-500">8.2</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 82%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">IPA</span>
                                <span class="text-sm text-gray-500">8.3</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 83%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Services -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Layanan Siswa</h3>
                <p class="text-gray-600">Berbagai layanan untuk mendukung kehidupan akademik dan non-akademik siswa</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Administrasi</h4>
                    <p class="text-sm text-gray-600">Surat keterangan, legalisir, dan administrasi lainnya</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Bimbingan Konseling</h4>
                    <p class="text-sm text-gray-600">Konsultasi akademik, karir, dan pribadi</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Perpustakaan</h4>
                    <p class="text-sm text-gray-600">Layanan peminjaman buku dan literasi digital</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Laboratorium</h4>
                    <p class="text-sm text-gray-600">Lab IPA, Komputer, dan Bahasa untuk praktikum</p>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Hubungi Bagian Kesiswaan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection