@extends('layouts.app')

@section('title', 'Info SPMB')

@section('content')
@php
    use Illuminate\Support\Facades\Storage;
@endphp
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Informasi SPMB
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Seleksi Penerimaan Mahasiswa Baru - Panduan lengkap untuk calon siswa SMAN 1 Nagreg
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tahun Ajaran 2025/2026
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
                        <a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600 transition-colors duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-500">SPMB</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-900 font-medium">Info</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Quick Links -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <a href="https://spmb.jabarprov.go.id/tahapan-spmb" target="_blank" class="bg-white rounded-lg shadow-sm border p-6 hover:shadow-md transition-shadow duration-200">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Tahapan SPMB</h3>
                <p class="text-sm text-gray-600">Lihat jadwal dan tahapan lengkap SPMB</p>
                <div class="mt-4 flex items-center text-blue-600 text-sm font-medium">
                    Kunjungi
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </div>
            </a>

            <a href="https://disdik.jabarprov.go.id/" target="_blank" class="bg-white rounded-lg shadow-sm border p-6 hover:shadow-md transition-shadow duration-200">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Pendaftaran</h3>
                <p class="text-sm text-gray-600">Akses portal pendaftaran SPMB</p>
                <div class="mt-4 flex items-center text-green-600 text-sm font-medium">
                    Daftar
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </div>
            </a>

            <a href="https://spmb.jabarprov.go.id/" target="_blank" class="bg-white rounded-lg shadow-sm border p-6 hover:shadow-md transition-shadow duration-200">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Hasil Kelulusan</h3>
                <p class="text-sm text-gray-600">Cek hasil seleksi SPMB</p>
                <div class="mt-4 flex items-center text-purple-600 text-sm font-medium">
                    Cek Hasil
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </div>
            </a>

            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg shadow-sm p-6 text-white">
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2">Butuh Bantuan?</h3>
                <p class="text-sm text-indigo-100 mb-4">Hubungi panitia SPMB untuk informasi lebih lanjut</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-medium text-white hover:text-indigo-200 transition-colors duration-200">
                    Kontak Kami
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Information Content -->
        @if($infos && count($infos) > 0)
            <div class="space-y-8">
                @foreach($infos as $info)
                    <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $info->title }}</h2>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        Dipublikasi: {{ $info->created_at->format('d F Y') }}
                                    </div>
                                    @if($info->start_date && $info->end_date)
                                        <div class="flex items-center text-sm text-gray-500 mt-1">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            Periode: {{ $info->start_date->format('d M Y') }} - {{ $info->end_date->format('d M Y') }}
                                        </div>
                                    @endif
                                </div>
                                @if($info->is_active)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Aktif
                                    </span>
                                @endif
                            </div>
                            <div class="prose max-w-none text-gray-700">
                                {!! nl2br(e($info->description)) !!}
                            </div>
                            @if($info->file)
                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                        </svg>
                                        <a href="{{ Storage::url($info->file) }}" target="_blank" class="text-blue-600 hover:text-blue-800 font-medium">
                                            Unduh Lampiran
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Default Content when no info available -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- General Information -->
                <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                    <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                        <h3 class="text-lg font-semibold text-blue-900">Informasi Umum SPMB</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-medium text-gray-900 mb-2">Apa itu SPMB?</h4>
                                <p class="text-sm text-gray-600">
                                    Seleksi Penerimaan Mahasiswa Baru (SPMB) adalah sistem penerimaan siswa baru 
                                    yang diselenggarakan secara terpusat oleh Dinas Pendidikan Provinsi Jawa Barat.
                                </p>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-900 mb-2">Syarat Pendaftaran</h4>
                                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                                    <li>Lulusan SMP/MTs atau sederajat</li>
                                    <li>Memiliki NISN yang valid</li>
                                    <li>Tidak berusia lebih dari 21 tahun pada 1 Juli 2025</li>
                                    <li>Sehat jasmani dan rohani</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Dates -->
                <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                    <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                        <h3 class="text-lg font-semibold text-green-900">Jadwal Penting</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm font-medium text-gray-900">Pendaftaran Online</span>
                                <span class="text-sm text-gray-600">Juni 2025</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm font-medium text-gray-900">Verifikasi Berkas</span>
                                <span class="text-sm text-gray-600">Juni 2025</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="text-sm font-medium text-gray-900">Tes Seleksi</span>
                                <span class="text-sm text-gray-600">Juli 2025</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-sm font-medium text-gray-900">Pengumuman Hasil</span>
                                <span class="text-sm text-gray-600">Juli 2025</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-yellow-50 rounded-lg">
                            <p class="text-xs text-yellow-800">
                                <strong>Catatan:</strong> Jadwal dapat berubah sewaktu-waktu. 
                                Silakan pantau pengumuman resmi di website SPMB.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="mt-8 bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                    <h3 class="text-lg font-semibold text-indigo-900">Program Keahlian SMAN 1 Nagreg</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="text-center p-4 border border-gray-200 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 mb-1">IPA</h4>
                            <p class="text-sm text-gray-600">Ilmu Pengetahuan Alam</p>
                        </div>
                        <div class="text-center p-4 border border-gray-200 rounded-lg">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 mb-1">IPS</h4>
                            <p class="text-sm text-gray-600">Ilmu Pengetahuan Sosial</p>
                        </div>
                        <div class="text-center p-4 border border-gray-200 rounded-lg">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17v4a2 2 0 002 2h4M11 7h1"></path>
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-900 mb-1">Bahasa</h4>
                            <p class="text-sm text-gray-600">Bahasa dan Budaya</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Contact Information -->
        <div class="mt-12 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border p-6">
            <div class="text-center">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Informasi Lebih Lanjut</h3>
                <p class="text-gray-600 mb-6">
                    Untuk informasi lebih detail tentang SPMB, silakan hubungi panitia penerimaan siswa baru 
                    atau kunjungi website resmi SPMB Jawa Barat.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Hubungi Kami
                    </a>
                    <a href="https://spmb.jabarprov.go.id/" target="_blank" class="inline-flex items-center px-6 py-3 bg-white border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Website SPMB
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
