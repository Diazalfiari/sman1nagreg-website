@extends('layouts.app')

@section('title', 'Profil Sekolah')

@push('styles')
<style>
    @keyframes fade-in-up {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .bg-clip-text {
        background-clip: text;
        -webkit-background-clip: text;
    }
    
    .text-transparent {
        color: transparent;
    }
</style>
@endpush

@section('content')
<div class="bg-white">
    <!-- Header -->
    <div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)" />
            </svg>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white bg-opacity-5 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-32 w-12 h-12 bg-white bg-opacity-15 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <!-- Logo Section -->
                <div class="mb-8 animate-fade-in-up">
                    @if($profile && $profile->school_logo)
                        <div class="relative inline-block">
                            <div class="w-28 h-28 bg-white rounded-full p-3 shadow-2xl mx-auto mb-4 transform hover:scale-105 transition-transform duration-300">
                                <img src="{{ Storage::url($profile->school_logo) }}" alt="Logo Sekolah" class="w-full h-full object-contain rounded-full">
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                    @else
                        <div class="w-28 h-28 bg-white bg-opacity-20 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <!-- School Name -->
                <h1 class="text-5xl md:text-6xl font-black mb-6 tracking-tight animate-fade-in-up" style="animation-delay: 0.2s;">
                    <span class="bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
                        {{ $profile->school_name ?? 'SMAN 1 Nagreg' }}
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl opacity-90 mb-8 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.4s;">
                    Profil Lengkap & Informasi Resmi Sekolah
                </p>
                
                <!-- Status Badges -->
                <div class="flex flex-wrap justify-center gap-4 text-sm animate-fade-in-up" style="animation-delay: 0.6s;">
                    @if($profile && $profile->accreditation_grade)
                        <div class="group">
                            <span class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                                Akreditasi {{ $profile->accreditation_grade }}
                            </span>
                        </div>
                    @endif
                    @if($profile && $profile->school_status)
                        <div class="group">
                            <span class="inline-flex items-center bg-gradient-to-r from-blue-500 to-cyan-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                {{ $profile->school_status }}
                            </span>
                        </div>
                    @endif
                    @if($profile && $profile->establishment_year)
                        <div class="group">
                            <span class="inline-flex items-center bg-gradient-to-r from-purple-500 to-pink-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Berdiri {{ $profile->establishment_year }}
                            </span>
                        </div>
                    @endif
                </div>
                
                <!-- Scroll Indicator -->
                <div class="mt-12 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-white opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    @if($profile)
        <!-- School Image Section -->
        @if($profile->school_image)
            <div class="relative">
                <!-- Main Image Container -->
                <div class="relative h-[500px] overflow">
                    <img src="{{ Storage::url($profile->school_image) }}" alt="{{ $profile->school_name }}" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    
                    <!-- Gradient Overlays -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/30 to-transparent"></div>
                    
                    <!-- Content Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <div class="max-w-7xl mx-auto">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- School Stats -->
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m3 4.197V9a3 3 0 00-3-3v5.197m3-4.197V9a3 3 0 013 3v5.197"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-semibold">Siswa Aktif</h3>
                                    </div>
                                    <p class="text-3xl font-bold">1000+</p>
                                    <p class="text-sm opacity-80">Peserta didik</p>
                                </div>
                                
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-semibold">Tenaga Pendidik</h3>
                                    </div>
                                    <p class="text-3xl font-bold">60+</p>
                                    <p class="text-sm opacity-80">Guru profesional</p>
                                </div>
                                
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                    <div class="flex items-center mb-3">
                                        <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-semibold">Pengalaman</h3>
                                    </div>
                                    <p class="text-3xl font-bold">{{ $profile->establishment_year ? date('Y') - $profile->establishment_year : '40' }}+</p>
                                    <p class="text-sm opacity-80">Tahun mengabdi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute top-8 right-8">
                        <div class="w-20 h-20 border-2 border-white/30 rounded-full animate-spin" style="animation-duration: 20s;"></div>
                        <div class="absolute top-2 left-2 w-16 h-16 border-2 border-white/50 rounded-full animate-spin" style="animation-duration: 15s; animation-direction: reverse;"></div>
                    </div>
                </div>
                
                <!-- Achievement Badges -->
                <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2">
                    <div class="flex space-x-4">
                        @if($profile->accreditation_grade)
                            <div class="bg-white rounded-full p-4 shadow-xl border-4 border-green-100">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600">{{ $profile->accreditation_grade }}</div>
                                    <div class="text-xs text-green-500 font-medium">Akreditasi</div>
                                </div>
                            </div>
                        @endif
                        
                        <div class="bg-white rounded-full p-4 shadow-xl border-4 border-blue-100">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">ISO</div>
                                <div class="text-xs text-blue-500 font-medium">Certified</div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-full p-4 shadow-xl border-4 border-purple-100">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600">★</div>
                                <div class="text-xs text-purple-500 font-medium">Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Fallback Image Section -->
            <div class="relative h-96 bg-gradient-to-r from-gray-100 to-gray-200">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Gambar Sekolah</h3>
                        <p class="text-gray-500">Foto sekolah akan ditampilkan di sini</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            
            <!-- Informasi Dasar -->
            <div class="mb-12">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Informasi Dasar Sekolah</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Nama Sekolah</h4>
                                <p class="text-gray-600">{{ $profile->school_name ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">NSS</h4>
                                <p class="text-gray-600">{{ $profile->nss ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">NPSN</h4>
                                <p class="text-gray-600">{{ $profile->npsn ?? '-' }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Status Sekolah</h4>
                                <p class="text-gray-600">{{ $profile->school_status ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Tahun Pendirian</h4>
                                <p class="text-gray-600">{{ $profile->establishment_year ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Organisasi Penyelenggara</h4>
                                <p class="text-gray-600">{{ $profile->organizing_institution ?? '-' }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Alamat Sekolah</h4>
                                <p class="text-gray-600">{{ $profile->school_address ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Kode Pos</h4>
                                <p class="text-gray-600">{{ $profile->postal_code ?? '-' }}</p>
                            </div>
                            <div class="space-y-2">
                                <div class="p-4 bg-blue-50 rounded-lg">
                                    <h4 class="font-semibold text-blue-800 mb-2">No. Telepon</h4>
                                    <p class="text-blue-600">{{ $profile->school_phone ?? '-' }}</p>
                                </div>
                                <div class="p-4 bg-green-50 rounded-lg">
                                    <h4 class="font-semibold text-green-800 mb-2">Email Sekolah</h4>
                                    <p class="text-green-600">{{ $profile->school_email ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Surat Keputusan -->
            <div class="mb-12">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Surat Keputusan</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="p-4 bg-yellow-50 rounded-lg border-l-4 border-yellow-400">
                                <h4 class="font-semibold text-yellow-800 mb-2">Izin Pendirian Sekolah Nomor</h4>
                                <p class="text-yellow-700">{{ $profile->establishment_permit_number ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Pejabat Penandatangan Izin Pendirian</h4>
                                <p class="text-gray-600">{{ $profile->establishment_official ?? '-' }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="p-4 bg-indigo-50 rounded-lg border-l-4 border-indigo-400">
                                <h4 class="font-semibold text-indigo-800 mb-2">Penegerian Nomor</h4>
                                <p class="text-indigo-700">{{ $profile->nationalization_permit_number ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Pejabat Penandatangan Penegerian</h4>
                                <p class="text-gray-600">{{ $profile->nationalization_official ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Akreditasi -->
            <div class="mb-12">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Akreditasi Sekolah</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-lg text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">{{ $profile->accreditation_grade ?? '-' }}</div>
                            <p class="text-green-800 font-medium">Predikat Akreditasi</p>
                        </div>
                        
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-2">SK BAN-S/M Propinsi No.</h4>
                            <p class="text-gray-600">{{ $profile->accreditation_sk_number ?? '-' }}</p>
                        </div>
                        
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Tanggal Akreditasi</h4>
                            <p class="text-blue-600">{{ $profile->accreditation_date ? \Carbon\Carbon::parse($profile->accreditation_date)->format('d F Y') : '-' }}</p>
                        </div>
                        
                        <div class="p-4 bg-orange-50 rounded-lg">
                            <h4 class="font-semibold text-orange-800 mb-2">Berlaku s.d</h4>
                            <p class="text-orange-600">{{ $profile->accreditation_valid_until ? \Carbon\Carbon::parse($profile->accreditation_valid_until)->format('d F Y') : '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lokasi dan Bangunan -->
            <div class="mb-12">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Lokasi dan Bangunan</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="p-4 bg-gray-50 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Bangunan Sekolah</h4>
                                <p class="text-gray-600">{{ $profile->building_ownership ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg">
                                <h4 class="font-semibold text-blue-800 mb-2">Jarak dari Pusat Kecamatan</h4>
                                <p class="text-blue-600">{{ $profile->distance_from_subdistrict ?? '-' }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="p-4 bg-green-50 rounded-lg">
                                <h4 class="font-semibold text-green-800 mb-2">Jarak dari Pusat Kota Kabupaten</h4>
                                <p class="text-green-600">{{ $profile->distance_from_district ?? '-' }}</p>
                            </div>
                            <div class="p-4 bg-purple-50 rounded-lg">
                                <h4 class="font-semibold text-purple-800 mb-2">Terletak pada Lintas</h4>
                                <p class="text-purple-600">{{ $profile->located_on_route ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Kepala Sekolah -->
            <div class="mb-12">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Data Kepala Sekolah</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Foto Kepala Sekolah -->
                        <div class="text-center">
                            @if($profile->principal_photo)
                                <img src="{{ Storage::url($profile->principal_photo) }}" alt="Foto Kepala Sekolah" class="w-48 h-48 object-cover rounded-full mx-auto shadow-lg mb-4">
                            @else
                                <div class="w-48 h-48 bg-gray-200 rounded-full mx-auto flex items-center justify-center mb-4">
                                    <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            @endif
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $profile->principal_name ?? 'Nama Kepala Sekolah' }}</h3>
                            <p class="text-gray-600">Kepala Sekolah</p>
                        </div>
                        
                        <!-- Data Kepala Sekolah -->
                        <div class="lg:col-span-2 space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-4 bg-blue-50 rounded-lg">
                                    <h4 class="font-semibold text-blue-800 mb-2">Nama Lengkap</h4>
                                    <p class="text-blue-600">{{ $profile->principal_name ?? '-' }}</p>
                                </div>
                                <div class="p-4 bg-green-50 rounded-lg">
                                    <h4 class="font-semibold text-green-800 mb-2">NIP</h4>
                                    <p class="text-green-600">{{ $profile->principal_nip ?? '-' }}</p>
                                </div>
                                <div class="p-4 bg-purple-50 rounded-lg">
                                    <h4 class="font-semibold text-purple-800 mb-2">Pangkat/Golongan</h4>
                                    <p class="text-purple-600">{{ $profile->principal_rank ?? '-' }}</p>
                                </div>
                                <div class="p-4 bg-orange-50 rounded-lg">
                                    <h4 class="font-semibold text-orange-800 mb-2">Pendidikan</h4>
                                    <p class="text-orange-600">{{ $profile->principal_education ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @else
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto flex items-center justify-center mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Data Tidak Tersedia</h3>
                <p class="text-gray-500">Informasi profil sekolah sedang dalam proses pembaruan.</p>
            </div>
        </div>
    @endif
</div>
@endsection