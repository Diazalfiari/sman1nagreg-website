@extends('layouts.app')

@section('title', 'Guru dan Tenaga Kependidikan')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Guru dan Tenaga Kependidikan
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Tim profesional dan berpengalaman yang berdedikasi untuk mencerdaskan bangsa
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Profil</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Guru dan Tenaga Kependidikan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Statistics Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold text-gray-900 mb-1">58</div>
                <div class="text-sm text-gray-600">Total Guru</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold text-gray-900 mb-1">22</div>
                <div class="text-sm text-gray-600">Tenaga Kependidikan</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold text-gray-900 mb-1">45</div>
                <div class="text-sm text-gray-600">Guru S2</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-md text-center">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold text-gray-900 mb-1">52</div>
                <div class="text-sm text-gray-600">Guru Bersertifikat</div>
            </div>
        </div>

        <!-- Leadership Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pimpinan Sekolah</h2>
                                    Tim kepemimpinan yang berpengalaman dalam mengelola dan mengembangkan institusi pendidikan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kepala Sekolah -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8 text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-6 overflow-hidden">
                            <img src="{{ asset('images/teachers/kepala-sekolah.jpg') }}" alt="Kepala Sekolah" class="w-full h-full object-cover" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Drs. H. Ahmad Supriatna, M.Pd</h3>
                        <p class="text-blue-600 font-semibold mb-4">Kepala Sekolah</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Memimpin SMAN 1 Nagreg sejak tahun 2019 dengan pengalaman lebih dari 25 tahun di bidang pendidikan.
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                S2 Manajemen Pendidikan
                            </div>
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                25+ Tahun Pengalaman
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wakil Kepala Sekolah -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8 text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-6 overflow-hidden">
                            <img src="{{ asset('images/teachers/wakil-kepala.jpg') }}" alt="Wakil Kepala Sekolah" class="w-full h-full object-cover" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Dra. Hj. Siti Nurhasanah, M.Pd</h3>
                        <p class="text-green-600 font-semibold mb-4">Wakil Kepala Sekolah</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Membidangi kurikulum dan pembelajaran dengan fokus pada inovasi pendidikan.
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                S2 Teknologi Pendidikan
                            </div>
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Bidang Kurikulum
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Koordinator BK -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-8 text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-6 overflow-hidden">
                            <img src="{{ asset('images/teachers/koordinator-bk.jpg') }}" alt="Koordinator BK" class="w-full h-full object-cover" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">S.Pd. Bambang Hermawan, M.Pd</h3>
                        <p class="text-purple-600 font-semibold mb-4">Koordinator BK</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Menangani bimbingan dan konseling untuk mendukung perkembangan siswa secara optimal.
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                S2 Bimbingan Konseling
                            </div>
                            <div class="flex items-center justify-center text-gray-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Konselor Profesional
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department Sections -->
        <div class="space-y-16">
            <!-- Guru Mata Pelajaran -->
            <div>
                <div class="flex items-center mb-8">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <div class="flex-shrink-0 px-4">
                        <h2 class="text-2xl font-bold text-gray-900">Guru Mata Pelajaran</h2>
                    </div>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <!-- Subject Categories -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- MIPA -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Matematika & IPA</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Matematika</h4>
                                <p class="text-sm text-gray-600">8 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Fisika</h4>
                                <p class="text-sm text-gray-600">4 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Kimia</h4>
                                <p class="text-sm text-gray-600">4 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-yellow-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Biologi</h4>
                                <p class="text-sm text-gray-600">4 Guru • S1 & S2</p>
                            </div>
                        </div>
                    </div>

                    <!-- IPS -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Ilmu Pengetahuan Sosial</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Sejarah</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-indigo-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Geografi</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-pink-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Ekonomi</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-teal-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Sosiologi</h4>
                                <p class="text-sm text-gray-600">2 Guru • S1 & S2</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bahasa -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Bahasa</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Bahasa Indonesia</h4>
                                <p class="text-sm text-gray-600">5 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Bahasa Inggris</h4>
                                <p class="text-sm text-gray-600">4 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Bahasa Jepang</h4>
                                <p class="text-sm text-gray-600">2 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-yellow-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Bahasa Sunda</h4>
                                <p class="text-sm text-gray-600">2 Guru • S1</p>
                            </div>
                        </div>
                    </div>

                    <!-- Agama & PKn -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Agama & Kewarganegaraan</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900">PAI</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900">PKn</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Agama Kristen</h4>
                                <p class="text-sm text-gray-600">1 Guru • S1</p>
                            </div>
                            <div class="border-l-4 border-red-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Agama Katolik</h4>
                                <p class="text-sm text-gray-600">1 Guru • S1</p>
                            </div>
                        </div>
                    </div>

                    <!-- Seni & Olahraga -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Seni & Olahraga</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Seni Budaya</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900">PJOK</h4>
                                <p class="text-sm text-gray-600">3 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Prakarya</h4>
                                <p class="text-sm text-gray-600">2 Guru • S1</p>
                            </div>
                        </div>
                    </div>

                    <!-- TIK -->
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Teknologi Informasi</h3>
                        </div>
                        <div class="space-y-3">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Informatika</h4>
                                <p class="text-sm text-gray-600">2 Guru • S1 & S2</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900">Multimedia</h4>
                                <p class="text-sm text-gray-600">1 Guru • S1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tenaga Kependidikan -->
            <div>
                <div class="flex items-center mb-8">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <div class="flex-shrink-0 px-4">
                        <h2 class="text-2xl font-bold text-gray-900">Tenaga Kependidikan</h2>
                    </div>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Staff -->
                    <div class="bg-white rounded-xl p-6 shadow-md text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Tata Usaha</h3>
                        <p class="text-2xl font-bold text-blue-600 mb-1">8</p>
                        <p class="text-sm text-gray-600">Orang</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Perpustakaan</h3>
                        <p class="text-2xl font-bold text-green-600 mb-1">3</p>
                        <p class="text-sm text-gray-600">Orang</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Laboratorium</h3>
                        <p class="text-2xl font-bold text-purple-600 mb-1">5</p>
                        <p class="text-sm text-gray-600">Orang</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md text-center">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Keamanan</h3>
                        <p class="text-2xl font-bold text-yellow-600 mb-1">6</p>
                        <p class="text-sm text-gray-600">Orang</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profesional Development Section -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 md:p-12 mt-16">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pengembangan Profesional</h2>
                <p class="text-lg text-gray-600">
                    Komitmen kami dalam meningkatkan kualitas SDM melalui program pengembangan berkelanjutan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pelatihan Rutin</h3>
                    <p class="text-gray-600">
                        Program pelatihan berkelanjutan untuk meningkatkan kompetensi pedagogi dan profesional
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sertifikasi</h3>
                    <p class="text-gray-600">
                        90% guru telah tersertifikasi sebagai pengakuan atas profesionalisme dan kompetensi
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Kolaborasi</h3>
                    <p class="text-gray-600">
                        Kerja sama dengan institusi pendidikan lain untuk sharing knowledge dan best practices
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mt-16 text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Bergabung dengan Tim Kami</h3>
            <p class="text-lg text-gray-600 mb-8">
                Kami selalu terbuka untuk pendidik berkualitas yang ingin berkontribusi memajukan pendidikan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Hubungi Kami
                </a>
                <a href="mailto:hrd@sman1nagreg.sch.id" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Email HRD
                </a>
            </div>
        </div>
    </div>
</div>
@endsection