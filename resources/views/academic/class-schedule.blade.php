@extends('layouts.app')

@section('title', 'Jadwal Pelajaran')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Jadwal Pelajaran
                </h1>
                <p class="text-xl text-green-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Jadwal Kegiatan Belajar Mengajar Semester Ganjil 2024/2025
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
                            <span class="hidden sm:inline">Beranda</span>
                            <span class="sm:hidden">Home</span>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Akademik</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Jadwal Pelajaran</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Filter & Controls -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 mb-8">
            <div class="flex flex-col space-y-4">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">Filter Jadwal</h2>
                    <p class="text-sm text-gray-600">Pilih kelas untuk melihat jadwal pelajaran</p>
                </div>
                
                <!-- Filter Controls - Responsive Layout -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <!-- Class Filter -->
                    <div class="flex-1 sm:flex-initial sm:min-w-[200px]">
                        <label class="block text-sm font-medium text-gray-700 mb-1 sm:hidden">Kelas</label>
                        <select id="class-filter" class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white">
                            <option value="X-MIPA-1" selected>X MIPA 1</option>
                            <option value="X-MIPA-2">X MIPA 2</option>
                            <option value="X-MIPA-3">X MIPA 3</option>
                            <option value="X-IPS-1">X IPS 1</option>
                            <option value="X-IPS-2">X IPS 2</option>
                            <option value="XI-MIPA-1">XI MIPA 1</option>
                            <option value="XI-MIPA-2">XI MIPA 2</option>
                            <option value="XI-MIPA-3">XI MIPA 3</option>
                            <option value="XI-IPS-1">XI IPS 1</option>
                            <option value="XI-IPS-2">XI IPS 2</option>
                            <option value="XII-MIPA-1">XII MIPA 1</option>
                            <option value="XII-MIPA-2">XII MIPA 2</option>
                            <option value="XII-MIPA-3">XII MIPA 3</option>
                            <option value="XII-IPS-1">XII IPS 1</option>
                            <option value="XII-IPS-2">XII IPS 2</option>
                        </select>
                    </div>
                    
                    <!-- Semester Filter -->
                    <div class="flex-1 sm:flex-initial sm:min-w-[180px]">
                        <label class="block text-sm font-medium text-gray-700 mb-1 sm:hidden">Semester</label>
                        <select class="w-full px-3 py-2 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white">
                            <option value="ganjil" selected>Semester Ganjil</option>
                            <option value="genap">Semester Genap</option>
                        </select>
                    </div>

                    <!-- Download Button -->
                    <div class="flex-1 sm:flex-initial">
                        <button class="w-full sm:w-auto px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-200 flex items-center justify-center text-sm sm:text-base">
                            <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="whitespace-nowrap">Download PDF</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Info Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Kelas Aktif</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">X MIPA 1</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Wali Kelas</h3>
                <p class="text-xs sm:text-2xl font-bold text-blue-600">Dra. Siti Aminah</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Jumlah Siswa</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">36</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Jam Pelajaran</h3>
                <p class="text-lg sm:text-2xl font-bold text-yellow-600">45</p>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
            <div class="p-4 sm:p-6 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Jadwal Pelajaran Kelas X MIPA 1</h3>
                        <p class="text-sm text-gray-600">Semester Ganjil Tahun Pelajaran 2024/2025</p>
                    </div>
                    <div class="text-sm text-gray-500 mt-2 sm:mt-0">
                        Effective: {{ date('d M Y') }}
                    </div>
                </div>
            </div>

            <!-- Desktop Schedule Table -->
            <div class="hidden xl:block overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Jam
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Senin
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Selasa
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rabu
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Kamis
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Jumat
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                        $schedule = [
                            [
                                'time' => '07:00 - 07:45',
                                'senin' => ['subject' => 'Upacara', 'teacher' => '', 'room' => 'Lapangan', 'color' => 'red'],
                                'selasa' => ['subject' => 'Matematika', 'teacher' => 'Drs. Ahmad', 'room' => 'X-1', 'color' => 'blue'],
                                'rabu' => ['subject' => 'B. Indonesia', 'teacher' => 'Dra. Siti', 'room' => 'X-1', 'color' => 'green'],
                                'kamis' => ['subject' => 'Fisika', 'teacher' => 'M.Pd. Budi', 'room' => 'Lab Fisika', 'color' => 'purple'],
                                'jumat' => ['subject' => 'PAI', 'teacher' => 'S.Ag. Ali', 'room' => 'X-1', 'color' => 'yellow']
                            ],
                            [
                                'time' => '07:45 - 08:30',
                                'senin' => ['subject' => 'Matematika', 'teacher' => 'Drs. Ahmad', 'room' => 'X-1', 'color' => 'blue'],
                                'selasa' => ['subject' => 'Kimia', 'teacher' => 'S.Pd. Rina', 'room' => 'Lab Kimia', 'color' => 'indigo'],
                                'rabu' => ['subject' => 'B. Inggris', 'teacher' => 'S.Pd. Maya', 'room' => 'X-1', 'color' => 'pink'],
                                'kamis' => ['subject' => 'Biologi', 'teacher' => 'M.Pd. Dewi', 'room' => 'Lab Bio', 'color' => 'teal'],
                                'jumat' => ['subject' => 'Sejarah', 'teacher' => 'S.Pd. Joni', 'room' => 'X-1', 'color' => 'orange']
                            ],
                            [
                                'time' => '08:30 - 09:15',
                                'senin' => ['subject' => 'B. Indonesia', 'teacher' => 'Dra. Siti', 'room' => 'X-1', 'color' => 'green'],
                                'selasa' => ['subject' => 'Matematika', 'teacher' => 'Drs. Ahmad', 'room' => 'X-1', 'color' => 'blue'],
                                'rabu' => ['subject' => 'Fisika', 'teacher' => 'M.Pd. Budi', 'room' => 'Lab Fisika', 'color' => 'purple'],
                                'kamis' => ['subject' => 'Kimia', 'teacher' => 'S.Pd. Rina', 'room' => 'Lab Kimia', 'color' => 'indigo'],
                                'jumat' => ['subject' => 'B. Inggris', 'teacher' => 'S.Pd. Maya', 'room' => 'X-1', 'color' => 'pink']
                            ],
                            [
                                'time' => '09:15 - 09:30',
                                'senin' => ['subject' => 'ISTIRAHAT', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'selasa' => ['subject' => 'ISTIRAHAT', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'rabu' => ['subject' => 'ISTIRAHAT', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'kamis' => ['subject' => 'ISTIRAHAT', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'jumat' => ['subject' => 'ISTIRAHAT', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ],
                            [
                                'time' => '09:30 - 10:15',
                                'senin' => ['subject' => 'Fisika', 'teacher' => 'M.Pd. Budi', 'room' => 'Lab Fisika', 'color' => 'purple'],
                                'selasa' => ['subject' => 'B. Indonesia', 'teacher' => 'Dra. Siti', 'room' => 'X-1', 'color' => 'green'],
                                'rabu' => ['subject' => 'Matematika', 'teacher' => 'Drs. Ahmad', 'room' => 'X-1', 'color' => 'blue'],
                                'kamis' => ['subject' => 'B. Inggris', 'teacher' => 'S.Pd. Maya', 'room' => 'X-1', 'color' => 'pink'],
                                'jumat' => ['subject' => 'Geografi', 'teacher' => 'S.Pd. Rudi', 'room' => 'X-1', 'color' => 'cyan']
                            ],
                            [
                                'time' => '10:15 - 11:00',
                                'senin' => ['subject' => 'Kimia', 'teacher' => 'S.Pd. Rina', 'room' => 'Lab Kimia', 'color' => 'indigo'],
                                'selasa' => ['subject' => 'Fisika', 'teacher' => 'M.Pd. Budi', 'room' => 'Lab Fisika', 'color' => 'purple'],
                                'rabu' => ['subject' => 'Biologi', 'teacher' => 'M.Pd. Dewi', 'room' => 'Lab Bio', 'color' => 'teal'],
                                'kamis' => ['subject' => 'Matematika', 'teacher' => 'Drs. Ahmad', 'room' => 'X-1', 'color' => 'blue'],
                                'jumat' => ['subject' => 'SHALAT JUMAT', 'teacher' => '', 'room' => 'Masjid', 'color' => 'yellow']
                            ],
                            [
                                'time' => '11:00 - 11:45',
                                'senin' => ['subject' => 'B. Inggris', 'teacher' => 'S.Pd. Maya', 'room' => 'X-1', 'color' => 'pink'],
                                'selasa' => ['subject' => 'Biologi', 'teacher' => 'M.Pd. Dewi', 'room' => 'Lab Bio', 'color' => 'teal'],
                                'rabu' => ['subject' => 'Kimia', 'teacher' => 'S.Pd. Rina', 'room' => 'Lab Kimia', 'color' => 'indigo'],
                                'kamis' => ['subject' => 'PKn', 'teacher' => 'S.Pd. Hadi', 'room' => 'X-1', 'color' => 'red'],
                                'jumat' => ['subject' => '', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ],
                            [
                                'time' => '11:45 - 12:30',
                                'senin' => ['subject' => 'Biologi', 'teacher' => 'M.Pd. Dewi', 'room' => 'Lab Bio', 'color' => 'teal'],
                                'selasa' => ['subject' => 'B. Inggris', 'teacher' => 'S.Pd. Maya', 'room' => 'X-1', 'color' => 'pink'],
                                'rabu' => ['subject' => 'Sejarah', 'teacher' => 'S.Pd. Joni', 'room' => 'X-1', 'color' => 'orange'],
                                'kamis' => ['subject' => 'Seni Budaya', 'teacher' => 'S.Pd. Lina', 'room' => 'R. Seni', 'color' => 'violet'],
                                'jumat' => ['subject' => '', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ],
                            [
                                'time' => '12:30 - 13:00',
                                'senin' => ['subject' => 'ISHOMA', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'selasa' => ['subject' => 'ISHOMA', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'rabu' => ['subject' => 'ISHOMA', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'kamis' => ['subject' => 'ISHOMA', 'teacher' => '', 'room' => '', 'color' => 'gray'],
                                'jumat' => ['subject' => '', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ],
                            [
                                'time' => '13:00 - 13:45',
                                'senin' => ['subject' => 'Geografi', 'teacher' => 'S.Pd. Rudi', 'room' => 'X-1', 'color' => 'cyan'],
                                'selasa' => ['subject' => 'Sejarah', 'teacher' => 'S.Pd. Joni', 'room' => 'X-1', 'color' => 'orange'],
                                'rabu' => ['subject' => 'PKn', 'teacher' => 'S.Pd. Hadi', 'room' => 'X-1', 'color' => 'red'],
                                'kamis' => ['subject' => 'PJOK', 'teacher' => 'S.Pd. Agus', 'room' => 'Lapangan', 'color' => 'lime'],
                                'jumat' => ['subject' => '', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ],
                            [
                                'time' => '13:45 - 14:30',
                                'senin' => ['subject' => 'Seni Budaya', 'teacher' => 'S.Pd. Lina', 'room' => 'R. Seni', 'color' => 'violet'],
                                'selasa' => ['subject' => 'PKn', 'teacher' => 'S.Pd. Hadi', 'room' => 'X-1', 'color' => 'red'],
                                'rabu' => ['subject' => 'Prakarya', 'teacher' => 'S.Pd. Sari', 'room' => 'R. Prakarya', 'color' => 'emerald'],
                                'kamis' => ['subject' => 'PJOK', 'teacher' => 'S.Pd. Agus', 'room' => 'Lapangan', 'color' => 'lime'],
                                'jumat' => ['subject' => '', 'teacher' => '', 'room' => '', 'color' => 'gray']
                            ]
                        ];
                        @endphp

                        @foreach($schedule as $row)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 bg-gray-50">
                                {{ $row['time'] }}
                            </td>
                            @foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat'] as $day)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                @if($row[$day]['subject'])
                                    @if($row[$day]['subject'] === 'ISTIRAHAT' || $row[$day]['subject'] === 'ISHOMA' || $row[$day]['subject'] === 'SHALAT JUMAT')
                                        <div class="text-center py-2 px-3 bg-gray-100 text-gray-600 rounded-md font-medium">
                                            {{ $row[$day]['subject'] }}
                                        </div>
                                    @else
                                        <div class="bg-{{ $row[$day]['color'] }}-50 border border-{{ $row[$day]['color'] }}-200 rounded-lg p-3">
                                            <div class="font-semibold text-{{ $row[$day]['color'] }}-900 mb-1">
                                                {{ $row[$day]['subject'] }}
                                            </div>
                                            @if($row[$day]['teacher'])
                                                <div class="text-xs text-{{ $row[$day]['color'] }}-700 mb-1">
                                                    {{ $row[$day]['teacher'] }}
                                                </div>
                                            @endif
                                            @if($row[$day]['room'])
                                                <div class="text-xs text-{{ $row[$day]['color'] }}-600 flex items-center">
                                                    <svg class="w-3 h-3 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $row[$day]['room'] }}
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tablet Schedule View (iPad) -->
            <div class="hidden md:block xl:hidden overflow-x-auto">
                <div class="min-w-[800px]">
                    <div class="grid grid-cols-6 gap-2 p-4">
                        <!-- Header -->
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Jam</div>
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Senin</div>
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Selasa</div>
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Rabu</div>
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Kamis</div>
                        <div class="font-medium text-center p-2 bg-gray-50 rounded">Jumat</div>
                        
                        @foreach($schedule as $row)
                            <!-- Time -->
                            <div class="text-xs font-medium text-center p-2 bg-gray-50 rounded">
                                {{ $row['time'] }}
                            </div>
                            
                            @foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat'] as $day)
                            <div class="text-xs">
                                @if($row[$day]['subject'])
                                    @if($row[$day]['subject'] === 'ISTIRAHAT' || $row[$day]['subject'] === 'ISHOMA' || $row[$day]['subject'] === 'SHALAT JUMAT')
                                        <div class="text-center py-2 px-2 bg-gray-100 text-gray-600 rounded font-medium">
                                            {{ $row[$day]['subject'] }}
                                        </div>
                                    @else
                                        <div class="bg-{{ $row[$day]['color'] }}-50 border border-{{ $row[$day]['color'] }}-200 rounded p-2">
                                            <div class="font-semibold text-{{ $row[$day]['color'] }}-900 mb-1">
                                                {{ $row[$day]['subject'] }}
                                            </div>
                                            @if($row[$day]['teacher'])
                                                <div class="text-{{ $row[$day]['color'] }}-700 mb-1">
                                                    {{ $row[$day]['teacher'] }}
                                                </div>
                                            @endif
                                            @if($row[$day]['room'])
                                                <div class="text-{{ $row[$day]['color'] }}-600 flex items-center">
                                                    <svg class="w-2 h-2 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    <span class="truncate">{{ $row[$day]['room'] }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endif
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Mobile Schedule View -->
            <div class="md:hidden">
                @foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat'] as $dayIndex => $day)
                <div class="border-b border-gray-200 last:border-b-0">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <h3 class="text-base font-semibold text-gray-900 capitalize">{{ $day }}</h3>
                    </div>
                    <div class="p-3 space-y-2">
                        @foreach($schedule as $timeSlot)
                            @if($timeSlot[$day]['subject'])
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-16 text-center">
                                    <div class="text-xs font-medium text-gray-500">
                                        {{ explode(' - ', $timeSlot['time'])[0] }}
                                    </div>
                                    <div class="text-xs text-gray-400">
                                        {{ explode(' - ', $timeSlot['time'])[1] }}
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    @if($timeSlot[$day]['subject'] === 'ISTIRAHAT' || $timeSlot[$day]['subject'] === 'ISHOMA' || $timeSlot[$day]['subject'] === 'SHALAT JUMAT')
                                        <div class="text-center py-2 px-3 bg-gray-100 text-gray-600 rounded font-medium text-xs">
                                            {{ $timeSlot[$day]['subject'] }}
                                        </div>
                                    @else
                                        <div class="bg-{{ $timeSlot[$day]['color'] }}-50 border border-{{ $timeSlot[$day]['color'] }}-200 rounded p-2">
                                            <div class="font-semibold text-{{ $timeSlot[$day]['color'] }}-900 mb-1 text-sm">
                                                {{ $timeSlot[$day]['subject'] }}
                                            </div>
                                            @if($timeSlot[$day]['teacher'])
                                                <div class="text-xs text-{{ $timeSlot[$day]['color'] }}-700 mb-1">
                                                    {{ $timeSlot[$day]['teacher'] }}
                                                </div>
                                            @endif
                                            @if($timeSlot[$day]['room'])
                                                <div class="text-xs text-{{ $timeSlot[$day]['color'] }}-600 flex items-center">
                                                    <svg class="w-3 h-3 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $timeSlot[$day]['room'] }}
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Subject Summary -->
        <div class="mt-8 bg-white rounded-lg shadow-sm border p-4 sm:p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Ringkasan Mata Pelajaran</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @php
                $subjects = [
                    ['name' => 'Matematika', 'teacher' => 'Drs. Ahmad Supardi', 'hours' => 4, 'color' => 'blue'],
                    ['name' => 'Bahasa Indonesia', 'teacher' => 'Dra. Siti Nurhasanah', 'hours' => 4, 'color' => 'green'],
                    ['name' => 'Bahasa Inggris', 'teacher' => 'S.Pd. Maya Sari', 'hours' => 3, 'color' => 'pink'],
                    ['name' => 'Fisika', 'teacher' => 'M.Pd. Budi Santoso', 'hours' => 3, 'color' => 'purple'],
                    ['name' => 'Kimia', 'teacher' => 'S.Pd. Rina Mulyani', 'hours' => 3, 'color' => 'indigo'],
                    ['name' => 'Biologi', 'teacher' => 'M.Pd. Dewi Lestari', 'hours' => 3, 'color' => 'teal'],
                    ['name' => 'Sejarah', 'teacher' => 'S.Pd. Joni Hermawan', 'hours' => 2, 'color' => 'orange'],
                    ['name' => 'Geografi', 'teacher' => 'S.Pd. Rudi Hartono', 'hours' => 2, 'color' => 'cyan'],
                    ['name' => 'PKn', 'teacher' => 'S.Pd. Hadi Wijaya', 'hours' => 2, 'color' => 'red'],
                    ['name' => 'PAI', 'teacher' => 'S.Ag. Ali Rahman', 'hours' => 2, 'color' => 'yellow'],
                    ['name' => 'Seni Budaya', 'teacher' => 'S.Pd. Lina Marlina', 'hours' => 2, 'color' => 'violet'],
                    ['name' => 'PJOK', 'teacher' => 'S.Pd. Agus Priyanto', 'hours' => 2, 'color' => 'lime'],
                    ['name' => 'Prakarya', 'teacher' => 'S.Pd. Sari Indah', 'hours' => 2, 'color' => 'emerald']
                ];
                @endphp

                @foreach($subjects as $subject)
                <div class="bg-{{ $subject['color'] }}-50 border border-{{ $subject['color'] }}-200 rounded-lg p-3 sm:p-4">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold text-{{ $subject['color'] }}-900 text-sm sm:text-base">{{ $subject['name'] }}</h4>
                        <span class="bg-{{ $subject['color'] }}-100 text-{{ $subject['color'] }}-800 text-xs font-medium px-2 py-0.5 rounded-full whitespace-nowrap">
                            {{ $subject['hours'] }} JP/Minggu
                        </span>
                    </div>
                    <p class="text-xs sm:text-sm text-{{ $subject['color'] }}-700">{{ $subject['teacher'] }}</p>
                </div>
                @endforeach
            </div>

            <!-- Total Hours -->
            <div class="mt-6 pt-6 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <span class="text-base sm:text-lg font-semibold text-gray-900">Total Jam Pelajaran per Minggu:</span>
                    <span class="text-xl sm:text-2xl font-bold text-green-600">{{ collect($subjects)->sum('hours') }} JP</span>
                </div>
            </div>
        </div>

        <!-- Schedule Notes -->
        <div class="mt-8 bg-white rounded-lg shadow-sm border p-4 sm:p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Catatan Jadwal</h3>
            <div class="space-y-3 text-sm text-gray-600">
                <div class="flex items-start space-x-2">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                    <p>Setiap jam pelajaran berdurasi 45 menit dengan istirahat 15 menit setiap 2 jam pelajaran.</p>
                </div>
                <div class="flex items-start space-x-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                    <p>Upacara bendera dilaksanakan setiap hari Senin pukul 07:00 - 07:45 WIB.</p>
                </div>
                <div class="flex items-start space-x-2">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2 flex-shrink-0"></div>
                    <p>Shalat Jumat untuk siswa laki-laki dilaksanakan di masjid sekolah pukul 11:00 - 12:00 WIB.</p>
                </div>
                <div class="flex items-start space-x-2">
                    <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                    <p>Pembelajaran praktikum dilaksanakan di laboratorium sesuai mata pelajaran.</p>
                </div>
                <div class="flex items-start space-x-2">
                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                    <p>Jadwal dapat berubah sewaktu-waktu atas kebijakan sekolah. Perubahan akan diinformasikan melalui pengumuman resmi.</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8 bg-gradient-to-r from-green-50 to-blue-50 rounded-lg border p-4 sm:p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                <button class="flex items-center justify-center px-4 py-3 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="font-medium text-gray-900 text-sm sm:text-base">Download PDF</span>
                </button>
                
                <button class="flex items-center justify-center px-4 py-3 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    <span class="font-medium text-gray-900 text-sm sm:text-base">Bagikan Jadwal</span>
                </button>
                
                <button class="flex items-center justify-center px-4 py-3 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="font-medium text-gray-900 text-sm sm:text-base">Sinkron Kalender</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const classFilter = document.getElementById('class-filter');
    
    classFilter.addEventListener('change', function() {
        // In a real application, this would trigger an AJAX request to load the schedule
        // For demo purposes, we'll just show a loading state
        const scheduleContainer = document.querySelector('.bg-white.rounded-lg.shadow-sm.border.overflow-hidden');
        const currentClass = this.value;
        
        // Show loading state
        scheduleContainer.style.opacity = '0.6';
        
        // Simulate loading delay
        setTimeout(() => {
            scheduleContainer.style.opacity = '1';
            // Update the title
            const titleElement = scheduleContainer.querySelector('h3');
            if (titleElement) {
                titleElement.textContent = `Jadwal Pelajaran Kelas ${currentClass.replace('-', ' ')}`;
            }
        }, 500);
    });
});
</script>
@endsection