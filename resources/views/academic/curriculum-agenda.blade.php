@extends('layouts.app')

@section('title', 'Agenda Kurikulum')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Agenda Kurikulum
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Jadwal kegiatan kurikulum dan akademik Tahun Pelajaran 2024/2025
                </p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Akademik</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Agenda Kurikulum</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Filter & Controls -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white rounded-lg shadow-sm border p-6 mb-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">Filter Agenda</h2>
                    <p class="text-sm text-gray-600">Pilih periode dan kategori agenda yang ingin ditampilkan</p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                    <!-- Semester Filter -->
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="all">Semua Semester</option>
                        <option value="ganjil" selected>Semester Ganjil</option>
                        <option value="genap">Semester Genap</option>
                    </select>
                    
                    <!-- Category Filter -->
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="all">Semua Kategori</option>
                        <option value="pembelajaran">Pembelajaran</option>
                        <option value="ujian">Ujian & Evaluasi</option>
                        <option value="kegiatan">Kegiatan Sekolah</option>
                        <option value="libur">Libur & Cuti</option>
                    </select>

                    <!-- View Toggle -->
                    <div class="flex bg-gray-100 rounded-lg p-1">
                        <button class="px-3 py-1 rounded bg-blue-600 text-white text-sm font-medium transition-colors" id="calendar-view">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Kalender
                        </button>
                        <button class="px-3 py-1 rounded text-gray-600 text-sm font-medium transition-colors hover:bg-gray-200" id="list-view">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            List
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Year Info -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Tahun Pelajaran</h3>
                <p class="text-2xl font-bold text-blue-600">2024/2025</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Semester Aktif</h3>
                <p class="text-2xl font-bold text-green-600">Ganjil</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Total Agenda</h3>
                <p class="text-2xl font-bold text-purple-600">89</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-6 text-center">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Agenda Mendatang</h3>
                <p class="text-2xl font-bold text-yellow-600">12</p>
            </div>
        </div>

        <!-- Calendar View -->
        <div id="calendar-content" class="bg-white rounded-lg shadow-sm border overflow-hidden mb-8">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Juli 2025</h3>
                    <div class="flex space-x-2">
                        <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button class="px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded-lg">Hari Ini</button>
                        <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Calendar Grid -->
            <div class="p-6">
                <!-- Day Headers -->
                <div class="grid grid-cols-7 gap-px mb-2">
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Min</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Sen</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Sel</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Rab</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Kam</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Jum</div>
                    <div class="p-2 text-center text-sm font-medium text-gray-700">Sab</div>
                </div>

                <!-- Calendar Days -->
                <div class="grid grid-cols-7 gap-px border border-gray-200 rounded-lg overflow-hidden">
                    <!-- Week 1 -->
                    <div class="bg-gray-50 p-2 min-h-[100px] text-gray-400">
                        <div class="text-right text-sm mb-1">30</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">1</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded truncate">
                                Awal Semester
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">2</div>
                    </div>
                    <div class="bg-blue-50 p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium text-blue-600">3</div>
                        <div class="text-xs text-blue-600 font-medium">Hari Ini</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">4</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">5</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded truncate">
                                Libur Nasional
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">6</div>
                    </div>

                    <!-- Week 2 -->
                    <div class="bg-white p-2 min-h-[100px] border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">7</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">8</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded truncate">
                                Rapat Guru
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">9</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">10</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded truncate">
                                MPLS Mulai
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">11</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">12</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded truncate">
                                MPLS Selesai
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">13</div>
                    </div>

                    <!-- Week 3 -->
                    <div class="bg-white p-2 min-h-[100px] border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">14</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">15</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded truncate">
                                KBM Normal
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">16</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">17</div>
                        <div class="space-y-1">
                            <div class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded truncate">
                                Kemerdekaan RI
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">18</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">19</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">20</div>
                    </div>

                    <!-- Week 4 -->
                    <div class="bg-white p-2 min-h-[100px] border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">21</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">22</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">23</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">24</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">25</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">26</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">27</div>
                    </div>

                    <!-- Week 5 -->
                    <div class="bg-white p-2 min-h-[100px] border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">28</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">29</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">30</div>
                    </div>
                    <div class="bg-white p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 font-medium">31</div>
                    </div>
                    <div class="bg-gray-50 p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 text-gray-400">1</div>
                    </div>
                    <div class="bg-gray-50 p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 text-gray-400">2</div>
                    </div>
                    <div class="bg-gray-50 p-2 min-h-[100px] border-l border-t border-gray-200">
                        <div class="text-right text-sm mb-1 text-gray-400">3</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- List View (Hidden by default) -->
        <div id="list-content" class="hidden space-y-6">
            <!-- Upcoming Events -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Agenda Mendatang</h3>
                    <p class="text-sm text-gray-600">Kegiatan yang akan datang dalam 2 minggu ke depan</p>
                </div>
                <div class="divide-y divide-gray-200">
                    <!-- Event Item -->
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-16 text-center">
                                <div class="text-2xl font-bold text-blue-600">8</div>
                                <div class="text-sm text-gray-500">Jul</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        Rapat
                                    </span>
                                    <span class="text-sm text-gray-500">14:00 - 16:00</span>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Rapat Koordinasi Guru Mata Pelajaran</h4>
                                <p class="text-gray-600 mb-3">Koordinasi pembelajaran semester ganjil dan persiapan materi pembelajaran.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Ruang Guru
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Item -->
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-16 text-center">
                                <div class="text-2xl font-bold text-purple-600">10</div>
                                <div class="text-sm text-gray-500">Jul</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        Orientasi
                                    </span>
                                    <span class="text-sm text-gray-500">07:00 - 17:00</span>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">MPLS (Masa Pengenalan Lingkungan Sekolah)</h4>
                                <p class="text-gray-600 mb-3">Kegiatan pengenalan lingkungan sekolah untuk siswa baru kelas X.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Seluruh Area Sekolah
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Item -->
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-16 text-center">
                                <div class="text-2xl font-bold text-green-600">15</div>
                                <div class="text-sm text-gray-500">Jul</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Pembelajaran
                                    </span>
                                    <span class="text-sm text-gray-500">07:00 - 14:30</span>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Dimulainya KBM (Kegiatan Belajar Mengajar) Normal</h4>
                                <p class="text-gray-600 mb-3">Kegiatan belajar mengajar normal dimulai sesuai jadwal pelajaran yang telah ditetapkan.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Seluruh Ruang Kelas
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Monthly Agenda -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Agenda Bulan Juli 2025</h3>
                    <p class="text-sm text-gray-600">Semua kegiatan yang dijadwalkan bulan ini</p>
                </div>
                <div class="divide-y divide-gray-200">
                    @php
                    $agendaItems = [
                        [
                            'date' => '1 Jul',
                            'title' => 'Awal Tahun Pelajaran 2024/2025',
                            'category' => 'Akademik',
                            'color' => 'green',
                            'time' => 'Full Day',
                            'description' => 'Dimulainya tahun pelajaran baru dengan berbagai persiapan dan orientasi.',
                            'location' => 'Seluruh Sekolah'
                        ],
                        [
                            'date' => '5 Jul',
                            'title' => 'Libur Isra Miraj',
                            'category' => 'Libur',
                            'color' => 'red',
                            'time' => 'Full Day',
                            'description' => 'Libur nasional dalam rangka memperingati Isra Miraj Nabi Muhammad SAW.',
                            'location' => '-'
                        ],
                        [
                            'date' => '8 Jul',
                            'title' => 'Rapat Koordinasi Guru',
                            'category' => 'Rapat',
                            'color' => 'blue',
                            'time' => '14:00 - 16:00',
                            'description' => 'Koordinasi pembelajaran semester ganjil dan evaluasi kurikulum.',
                            'location' => 'Ruang Guru'
                        ],
                        [
                            'date' => '10-12 Jul',
                            'title' => 'MPLS Kelas X',
                            'category' => 'Orientasi',
                            'color' => 'purple',
                            'time' => '07:00 - 17:00',
                            'description' => 'Masa Pengenalan Lingkungan Sekolah untuk siswa baru.',
                            'location' => 'Seluruh Area Sekolah'
                        ],
                        [
                            'date' => '15 Jul',
                            'title' => 'Mulai KBM Normal',
                            'category' => 'Pembelajaran',
                            'color' => 'green',
                            'time' => '07:00 - 14:30',
                            'description' => 'Dimulainya kegiatan belajar mengajar normal sesuai jadwal.',
                            'location' => 'Ruang Kelas'
                        ],
                        [
                            'date' => '17 Jul',
                            'title' => 'Hari Kemerdekaan RI',
                            'category' => 'Libur',
                            'color' => 'red',
                            'time' => 'Full Day',
                            'description' => 'Peringatan Hari Kemerdekaan Republik Indonesia ke-80.',
                            'location' => '-'
                        ],
                        [
                            'date' => '22 Jul',
                            'title' => 'Pemilihan Pengurus OSIS',
                            'category' => 'Kesiswaan',
                            'color' => 'indigo',
                            'time' => '08:00 - 12:00',
                            'description' => 'Pemilihan pengurus OSIS periode 2024/2025.',
                            'location' => 'Aula Sekolah'
                        ],
                        [
                            'date' => '29 Jul',
                            'title' => 'Evaluasi Pembelajaran Minggu Pertama',
                            'category' => 'Evaluasi',
                            'color' => 'yellow',
                            'time' => '13:00 - 15:00',
                            'description' => 'Evaluasi dan refleksi pembelajaran minggu pertama.',
                            'location' => 'Ruang Guru'
                        ]
                    ];
                    @endphp

                    @foreach($agendaItems as $item)
                    <div class="p-6 hover:bg-gray-50 transition-colors">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-20 text-center">
                                <div class="text-lg font-bold text-{{ $item['color'] }}-600">{{ $item['date'] }}</div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-800">
                                        {{ $item['category'] }}
                                    </span>
                                    <span class="text-sm text-gray-500">{{ $item['time'] }}</span>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $item['title'] }}</h4>
                                <p class="text-gray-600 mb-3">{{ $item['description'] }}</p>
                                @if($item['location'] !== '-')
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $item['location'] }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Legend -->
        <div class="bg-white rounded-lg shadow-sm border p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Keterangan</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-green-100 border border-green-200 rounded"></div>
                    <span class="text-sm text-gray-700">Pembelajaran</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-blue-100 border border-blue-200 rounded"></div>
                    <span class="text-sm text-gray-700">Rapat</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-purple-100 border border-purple-200 rounded"></div>
                    <span class="text-sm text-gray-700">Orientasi</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-yellow-100 border border-yellow-200 rounded"></div>
                    <span class="text-sm text-gray-700">Evaluasi</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-red-100 border border-red-200 rounded"></div>
                    <span class="text-sm text-gray-700">Libur</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-indigo-100 border border-indigo-200 rounded"></div>
                    <span class="text-sm text-gray-700">Kesiswaan</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarBtn = document.getElementById('calendar-view');
    const listBtn = document.getElementById('list-view');
    const calendarContent = document.getElementById('calendar-content');
    const listContent = document.getElementById('list-content');

    calendarBtn.addEventListener('click', function() {
        calendarBtn.classList.add('bg-blue-600', 'text-white');
        calendarBtn.classList.remove('text-gray-600');
        listBtn.classList.remove('bg-blue-600', 'text-white');
        listBtn.classList.add('text-gray-600');
        
        calendarContent.classList.remove('hidden');
        listContent.classList.add('hidden');
    });

    listBtn.addEventListener('click', function() {
        listBtn.classList.add('bg-blue-600', 'text-white');
        listBtn.classList.remove('text-gray-600');
        calendarBtn.classList.remove('bg-blue-600', 'text-white');
        calendarBtn.classList.add('text-gray-600');
        
        listContent.classList.remove('hidden');
        calendarContent.classList.add('hidden');
    });
});
</script>
@endsection