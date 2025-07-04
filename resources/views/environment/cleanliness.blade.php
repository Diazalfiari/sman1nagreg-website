@extends('layouts.app')

@section('title', 'Pokja Kebersihan, Sanitasi, dan Drainase')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-teal-600 via-cyan-600 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Pokja Kebersihan, Sanitasi & Drainase
                </h1>
                <p class="text-xl text-teal-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Menjaga kebersihan, sanitasi, dan sistem drainase sekolah untuk lingkungan yang sehat dan nyaman
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        🌊 "Bersih, Sehat, Berkelanjutan"
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Adiwiyata</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Kebersihan & Sanitasi</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Overview Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-teal-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Area Bersih</h3>
                <p class="text-lg sm:text-2xl font-bold text-teal-600">28</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Toilet Sehat</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">45</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Saluran Drainase</h3>
                <p class="text-lg sm:text-2xl font-bold text-cyan-600">850m</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Target 2025</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">95%</p>
            </div>
        </div>

        <!-- Program Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Kebersihan -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-teal-50 border-b border-teal-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-teal-900">Program Kebersihan</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pembersihan ruangan harian</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Jadwal piket kelas terstruktur</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Lomba kebersihan antar kelas</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Penyediaan tempat sampah terpilah</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sanitasi -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-blue-50 border-b border-blue-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-900">Program Sanitasi</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Perawatan toilet berkala</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Penyediaan hand sanitizer</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pemeriksaan kualitas air</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Edukasi PHBS untuk siswa</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Drainase -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-cyan-50 border-b border-cyan-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-cyan-900">Program Drainase</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pembersihan saluran rutin</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pembuatan biopori</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Sistem drainase berkelanjutan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Monitoring curah hujan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Activities & Progress -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Recent Activities -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-teal-50 border-b border-teal-200">
                    <h3 class="text-lg font-semibold text-teal-900">Kegiatan Terbaru</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $activities = [
                            [
                                'date' => '2025-07-01',
                                'title' => 'Pembersihan Saluran Drainase Utama',
                                'description' => 'Pembersihan dan pemeliharaan saluran drainase sepanjang 200 meter',
                                'status' => 'completed',
                                'participants' => '25 siswa'
                            ],
                            [
                                'date' => '2025-06-28',
                                'title' => 'Sosialisasi PHBS Kelas X',
                                'description' => 'Edukasi Perilaku Hidup Bersih dan Sehat untuk siswa baru',
                                'status' => 'completed',
                                'participants' => '423 siswa'
                            ],
                            [
                                'date' => '2025-06-25',
                                'title' => 'Pembuatan 50 Lubang Biopori',
                                'description' => 'Pembuatan lubang biopori di area halaman sekolah',
                                'status' => 'ongoing',
                                'participants' => '30 siswa'
                            ],
                            [
                                'date' => '2025-06-20',
                                'title' => 'Lomba Kebersihan Kelas Bulan Juni',
                                'description' => 'Evaluasi kebersihan kelas dan pengumuman pemenang',
                                'status' => 'completed',
                                'participants' => '36 kelas'
                            ]
                        ];
                        @endphp

                        @foreach($activities as $activity)
                        <div class="border-l-4 border-teal-500 pl-4">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold text-gray-900">{{ $activity['title'] }}</h4>
                                @if($activity['status'] === 'completed')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Selesai
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Berlangsung
                                    </span>
                                @endif
                            </div>
                            <p class="text-sm text-gray-600 mb-2">{{ $activity['description'] }}</p>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span>{{ date('d M Y', strtotime($activity['date'])) }}</span>
                                <span>{{ $activity['participants'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Progress Monitoring -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-900">Monitoring Progress</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Kebersihan Ruangan</span>
                                <span class="text-sm text-gray-500">92%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-teal-600 h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Sanitasi Toilet</span>
                                <span class="text-sm text-gray-500">88%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Sistem Drainase</span>
                                <span class="text-sm text-gray-500">85%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-cyan-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">Partisipasi Siswa</span>
                                <span class="text-sm text-gray-500">95%</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4 mt-6">
                            <h4 class="font-medium text-gray-900 mb-2">Target Semester Ini</h4>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Mencapai 95% standar kebersihan</li>
                                <li>• Renovasi 5 unit toilet</li>
                                <li>• Pembangunan 100 lubang biopori</li>
                                <li>• Zero waste to landfill</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Information -->
        <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tim Pokja Kebersihan, Sanitasi & Drainase</h3>
                <p class="text-gray-600">Bergabunglah dengan kami untuk menciptakan lingkungan sekolah yang bersih dan sehat</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Koordinator</h4>
                    <p class="text-sm text-gray-600">Drs. Bambang Sutrisno, M.Pd</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Anggota Guru</h4>
                    <p class="text-sm text-gray-600">8 Guru</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Siswa Aktif</h4>
                    <p class="text-sm text-gray-600">156 Siswa</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Kontak</h4>
                    <p class="text-sm text-gray-600">kebersihan@sman1nagreg.sch.id</p>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Bergabung dengan Tim
                </a>
            </div>
        </div>
    </div>
</div>
@endsection