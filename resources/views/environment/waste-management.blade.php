@extends('layouts.app')

@section('title', 'Pokja Pengelolaan Sampah')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-green-600 via-emerald-600 to-teal-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Pokja Pengelolaan Sampah
                </h1>
                <p class="text-xl text-green-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Mengelola sampah secara berkelanjutan dengan prinsip 3R: Reduce, Reuse, Recycle
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        ♻️ "Zero Waste, Maximum Impact"
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Pengelolaan Sampah</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Waste Statistics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Sampah Daur Ulang</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">85%</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Produksi Harian</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">125kg</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Kompos Bulanan</h3>
                <p class="text-lg sm:text-2xl font-bold text-yellow-600">450kg</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Pendapatan</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">Rp 2.5M</p>
            </div>
        </div>

        <!-- 3R Programs -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Reduce -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-red-50 border-b border-red-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4 4m4-4l-4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-red-900">REDUCE (Kurangi)</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-red-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Penggunaan tumbler pribadi</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-red-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Paperless classroom</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-red-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Tas belanja ramah lingkungan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-red-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Hemat kemasan makanan</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Reuse -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-blue-50 border-b border-blue-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-900">REUSE (Gunakan Kembali)</h3>
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
                            <span class="text-sm text-gray-700">Botol bekas jadi pot tanaman</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Kertas bekas untuk draft</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Kardus bekas untuk kerajinan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Bank sampah sekolah</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Recycle -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-green-50 border-b border-green-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-green-900">RECYCLE (Daur Ulang)</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pembuatan kompos organik</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Kertas daur ulang handmade</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Pengolahan plastik jadi ecobrick</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Kerjasama pengepul sampah</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Waste Separation System -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-12">
            <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                <h3 class="text-lg font-semibold text-green-900">Sistem Pemilahan Sampah</h3>
                <p class="text-sm text-green-700">Panduan pemilahan sampah berdasarkan kategori</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Organik -->
                    <div class="text-center p-6 bg-green-50 rounded-lg border border-green-200">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-green-900 mb-2">Sampah Organik</h4>
                        <div class="text-xs text-green-700 space-y-1">
                            <p>• Sisa makanan</p>
                            <p>• Daun kering</p>
                            <p>• Kulit buah</p>
                            <p>• Sampah kebun</p>
                        </div>
                        <div class="mt-3 text-xs font-medium text-green-800 bg-green-100 py-1 px-2 rounded">
                            HIJAU
                        </div>
                    </div>

                    <!-- Anorganik -->
                    <div class="text-center p-6 bg-blue-50 rounded-lg border border-blue-200">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-blue-900 mb-2">Sampah Anorganik</h4>
                        <div class="text-xs text-blue-700 space-y-1">
                            <p>• Plastik</p>
                            <p>• Botol kaca</p>
                            <p>• Kaleng</p>
                            <p>• Kertas/kardus</p>
                        </div>
                        <div class="mt-3 text-xs font-medium text-blue-800 bg-blue-100 py-1 px-2 rounded">
                            BIRU
                        </div>
                    </div>

                    <!-- B3 -->
                    <div class="text-center p-6 bg-red-50 rounded-lg border border-red-200">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-red-900 mb-2">Sampah B3</h4>
                        <div class="text-xs text-red-700 space-y-1">
                            <p>• Baterai bekas</p>
                            <p>• Lampu neon</p>
                            <p>• Tinta printer</p>
                            <p>• Elektronik rusak</p>
                        </div>
                        <div class="mt-3 text-xs font-medium text-red-800 bg-red-100 py-1 px-2 rounded">
                            MERAH
                        </div>
                    </div>

                    <!-- Residu -->
                    <div class="text-center p-6 bg-gray-50 rounded-lg border border-gray-200">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Sampah Residu</h4>
                        <div class="text-xs text-gray-700 space-y-1">
                            <p>• Puntung rokok</p>
                            <p>• Pembalut</p>
                            <p>• Popok</p>
                            <p>• Sampah toilet</p>
                        </div>
                        <div class="mt-3 text-xs font-medium text-gray-800 bg-gray-100 py-1 px-2 rounded">
                            HITAM
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Monthly Progress & Bank Sampah -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Monthly Waste Chart -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h3 class="text-lg font-semibold text-green-900">Progress Bulanan (2025)</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $monthlyData = [
                            ['month' => 'Jan', 'organic' => 85, 'inorganic' => 78, 'recycle' => 82],
                            ['month' => 'Feb', 'organic' => 88, 'inorganic' => 82, 'recycle' => 85],
                            ['month' => 'Mar', 'organic' => 90, 'inorganic' => 85, 'recycle' => 88],
                            ['month' => 'Apr', 'organic' => 87, 'inorganic' => 83, 'recycle' => 86],
                            ['month' => 'Mei', 'organic' => 92, 'inorganic' => 88, 'recycle' => 90],
                            ['month' => 'Jun', 'organic' => 89, 'inorganic' => 86, 'recycle' => 88]
                        ];
                        @endphp

                        @foreach($monthlyData as $data)
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">{{ $data['month'] }} 2025</span>
                                <span class="text-sm text-gray-500">{{ round(($data['organic'] + $data['inorganic'] + $data['recycle']) / 3) }}%</span>
                            </div>
                            <div class="space-y-1">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <div class="flex-1 bg-gray-200 rounded-full h-1">
                                        <div class="bg-green-500 h-1 rounded-full" style="width: {{ $data['organic'] }}%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $data['organic'] }}%</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                    <div class="flex-1 bg-gray-200 rounded-full h-1">
                                        <div class="bg-blue-500 h-1 rounded-full" style="width: {{ $data['inorganic'] }}%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $data['inorganic'] }}%</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                    <div class="flex-1 bg-gray-200 rounded-full h-1">
                                        <div class="bg-purple-500 h-1 rounded-full" style="width: {{ $data['recycle'] }}%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $data['recycle'] }}%</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-4 text-xs">
                            <div class="flex items-center space-x-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span>Organik</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                <span>Anorganik</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                <span>Daur Ulang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bank Sampah -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-yellow-50 border-b border-yellow-200">
                    <h3 class="text-lg font-semibold text-yellow-900">Bank Sampah Sekolah</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">Rp 2.547.000</div>
                        <p class="text-sm text-gray-600">Total Pendapatan Semester Ini</p>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-yellow-50 rounded-lg p-4">
                            <h4 class="font-medium text-yellow-900 mb-3">Harga Sampah Hari Ini</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Plastik PET</span>
                                    <span class="font-medium">Rp 3.500/kg</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Kertas HVS</span>
                                    <span class="font-medium">Rp 2.200/kg</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Kardus</span>
                                    <span class="font-medium">Rp 1.800/kg</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Botol Kaca</span>
                                    <span class="font-medium">Rp 800/kg</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Kaleng</span>
                                    <span class="font-medium">Rp 4.200/kg</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-green-50 rounded-lg p-4">
                            <h4 class="font-medium text-green-900 mb-2">Partisipasi Kelas</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">XII MIPA 1</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">Juara 1</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">XI IPS 2</span>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs font-medium">Juara 2</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">X MIPA 3</span>
                                    <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs font-medium">Juara 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team & Contact -->
        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tim Pokja Pengelolaan Sampah</h3>
                <p class="text-gray-600">Bergabunglah dengan gerakan zero waste untuk masa depan yang berkelanjutan</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Koordinator</h4>
                    <p class="text-sm text-gray-600">S.Pd. Rina Safitri, M.Si</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Tim Guru</h4>
                    <p class="text-sm text-gray-600">12 Guru</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Relawan Siswa</h4>
                    <p class="text-sm text-gray-600">234 Siswa</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Kontak</h4>
                    <p class="text-sm text-gray-600">sampah@sman1nagreg.sch.id</p>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Bergabung Zero Waste Movement
                </a>
            </div>
        </div>
    </div>
</div>
@endsection