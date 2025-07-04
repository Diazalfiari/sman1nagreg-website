@extends('layouts.app')

@section('title', 'Agenda Kesiswaan')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-purple-600 via-purple-700 to-purple-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Agenda Kesiswaan
                </h1>
                <p class="text-xl text-purple-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Jadwal kegiatan dan program kesiswaan SMAN 1 Nagreg
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Agenda Kesiswaan</span>
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
                    <h2 class="text-lg font-semibold text-gray-900">Filter Agenda</h2>
                    <p class="text-sm text-gray-600">Pilih kategori dan periode agenda kesiswaan</p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                        <option value="all">Semua Kategori</option>
                        <option value="osis">OSIS</option>
                        <option value="ekstrakurikuler">Ekstrakurikuler</option>
                        <option value="lomba">Lomba & Kompetisi</option>
                        <option value="karakter">Pembinaan Karakter</option>
                        <option value="prestasi">Apresiasi Prestasi</option>
                    </select>
                    
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                        <option value="semua">Semua Bulan</option>
                        <option value="juli" selected>Juli 2025</option>
                        <option value="agustus">Agustus 2025</option>
                        <option value="september">September 2025</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Total Agenda</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">24</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Selesai</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">18</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Berlangsung</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">3</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Mendatang</h3>
                <p class="text-lg sm:text-2xl font-bold text-yellow-600">3</p>
            </div>
        </div>

        <!-- Agenda List -->
        <div class="space-y-6">
            <!-- Current Month -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-purple-50 border-b border-purple-200">
                    <h3 class="text-lg font-semibold text-purple-900">Juli 2025</h3>
                </div>
                <div class="divide-y divide-gray-200">
                    @php
                    $agendaItems = [
                        [
                            'date' => '2025-07-05',
                            'day' => 'Sabtu',
                            'title' => 'Pemilihan Ketua OSIS Periode 2025/2026',
                            'category' => 'OSIS',
                            'time' => '08:00 - 12:00',
                            'location' => 'Aula Sekolah',
                            'description' => 'Pemilihan ketua OSIS dan pengurus inti untuk periode kepengurusan 2025/2026.',
                            'status' => 'upcoming',
                            'participants' => 'Seluruh Siswa Kelas X & XI'
                        ],
                        [
                            'date' => '2025-07-10',
                            'day' => 'Kamis',
                            'title' => 'Workshop Leadership untuk Pengurus OSIS',
                            'category' => 'Pembinaan Karakter',
                            'time' => '13:00 - 16:00',
                            'location' => 'Ruang Multimedia',
                            'description' => 'Pelatihan kepemimpinan dan manajemen organisasi untuk pengurus OSIS baru.',
                            'status' => 'upcoming',
                            'participants' => 'Pengurus OSIS Terpilih'
                        ],
                        [
                            'date' => '2025-07-15',
                            'day' => 'Selasa',
                            'title' => 'Pendaftaran Ekstrakurikuler Tahun Ajaran 2025/2026',
                            'category' => 'Ekstrakurikuler',
                            'time' => '07:00 - 14:00',
                            'location' => 'Lapangan & Ruang Kelas',
                            'description' => 'Pendaftaran dan pameran ekstrakurikuler untuk siswa baru dan siswa lama.',
                            'status' => 'ongoing',
                            'participants' => 'Seluruh Siswa'
                        ],
                        [
                            'date' => '2025-07-20',
                            'day' => 'Minggu',
                            'title' => 'Lomba Kreativitas Siswa Tingkat Sekolah',
                            'category' => 'Lomba & Kompetisi',
                            'time' => '08:00 - 15:00',
                            'location' => 'Seluruh Area Sekolah',
                            'description' => 'Lomba kreativitas meliputi seni, olahraga, dan karya ilmiah sebagai ajang prestasi siswa.',
                            'status' => 'upcoming',
                            'participants' => 'Perwakilan Kelas'
                        ],
                        [
                            'date' => '2025-07-25',
                            'day' => 'Jumat',
                            'title' => 'Bakti Sosial Peduli Lingkungan',
                            'category' => 'Pembinaan Karakter',
                            'time' => '07:00 - 11:00',
                            'location' => 'Lingkungan Sekitar Sekolah',
                            'description' => 'Kegiatan membersihkan lingkungan sekitar sekolah dan menanam pohon.',
                            'status' => 'upcoming',
                            'participants' => 'Seluruh Siswa Kelas X'
                        ]
                    ];
                    @endphp

                    @foreach($agendaItems as $item)
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:space-x-6">
                            <!-- Date Column -->
                            <div class="flex-shrink-0 mb-4 lg:mb-0">
                                <div class="text-center lg:w-20">
                                    <div class="text-2xl font-bold text-purple-600">{{ date('d', strtotime($item['date'])) }}</div>
                                    <div class="text-sm text-gray-500">{{ $item['day'] }}</div>
                                    <div class="text-xs text-gray-400">Juli</div>
                                </div>
                            </div>

                            <!-- Content Column -->
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-3">
                                    <div class="flex flex-wrap items-center gap-2 mb-2 sm:mb-0">
                                        @php
                                        $categoryColors = [
                                            'OSIS' => 'bg-blue-100 text-blue-800',
                                            'Ekstrakurikuler' => 'bg-green-100 text-green-800',
                                            'Lomba & Kompetisi' => 'bg-yellow-100 text-yellow-800',
                                            'Pembinaan Karakter' => 'bg-purple-100 text-purple-800',
                                            'Apresiasi Prestasi' => 'bg-pink-100 text-pink-800'
                                        ];
                                        $statusColors = [
                                            'upcoming' => 'bg-orange-100 text-orange-800',
                                            'ongoing' => 'bg-green-100 text-green-800',
                                            'completed' => 'bg-gray-100 text-gray-800'
                                        ];
                                        $statusLabels = [
                                            'upcoming' => 'Mendatang',
                                            'ongoing' => 'Berlangsung',
                                            'completed' => 'Selesai'
                                        ];
                                        @endphp
                                        
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $categoryColors[$item['category']] }}">
                                            {{ $item['category'] }}
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusColors[$item['status']] }}">
                                            {{ $statusLabels[$item['status']] }}
                                        </span>
                                    </div>
                                    <div class="text-sm text-gray-500">{{ $item['time'] }}</div>
                                </div>

                                <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $item['title'] }}</h4>
                                <p class="text-gray-600 mb-3">{{ $item['description'] }}</p>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        {{ $item['location'] }}
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        {{ $item['participants'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mt-8 bg-gradient-to-r from-purple-50 to-blue-50 rounded-lg border p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Kontak Kesiswaan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Koordinator Kesiswaan</h4>
                    <p class="text-gray-600 mb-1">Drs. H. Bambang Sutrisno, M.Pd</p>
                    <p class="text-sm text-gray-500">Email: kesiswaan@sman1nagreg.sch.id</p>
                    <p class="text-sm text-gray-500">Telp: (022) 1234-5678 ext. 102</p>
                </div>
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Jam Pelayanan</h4>
                    <p class="text-gray-600">Senin - Jumat: 07:00 - 15:00 WIB</p>
                    <p class="text-gray-600">Sabtu: 07:00 - 12:00 WIB</p>
                    <p class="text-gray-600">Minggu: Tutup</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection