@extends('layouts.app')

@section('title', 'Sejarah Sekolah')

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
    
    @keyframes slide-in-left {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slide-in-right {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes bounce-slow {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }
    
    @keyframes float-delayed {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
    }
    
    @keyframes pulse-slow {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .animate-slide-in-left {
        animation: slide-in-left 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .animate-slide-in-right {
        animation: slide-in-right 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 2s infinite;
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .animate-float-delayed {
        animation: float-delayed 3s ease-in-out infinite;
        animation-delay: 1s;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
    
    .animation-delay-200 {
        animation-delay: 0.2s;
    }
    
    .animation-delay-300 {
        animation-delay: 0.3s;
    }
    
    .animation-delay-400 {
        animation-delay: 0.4s;
    }
    
    .timeline-item {
        transition: all 0.3s ease;
    }
    
    .timeline-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .founder-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .founder-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .hero-pattern {
        background-image: radial-gradient(circle at 25px 25px, rgba(255,255,255,0.2) 2px, transparent 0),
                          radial-gradient(circle at 75px 75px, rgba(255,255,255,0.1) 2px, transparent 0);
        background-size: 100px 100px;
    }
    
    .text-shadow {
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hover-scale {
        transition: transform 0.3s ease;
    }
    
    .hover-scale:hover {
        transform: scale(1.05);
    }
    
    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
    }
    
    .floating-shapes::before,
    .floating-shapes::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(99, 102, 241, 0.1));
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-shapes::before {
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }
    
    .floating-shapes::after {
        bottom: 10%;
        right: 10%;
        animation-delay: 3s;
    }
</style>
@endpush

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white overflow-hidden hero-pattern">
        <!-- Floating Shapes -->
        <div class="floating-shapes"></div>
        
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
        <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full animate-float"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white bg-opacity-5 rounded-full animate-float-delayed"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-indigo-300 bg-opacity-30 rounded-full animate-pulse-slow"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 z-10">
            <div class="text-center">
                <div class="mb-8">
                    <div class="inline-flex items-center px-6 py-3 bg-white bg-opacity-20 rounded-full mb-6 animate-bounce-slow">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <span class="font-medium">Perjalanan Sejarah</span>
                    </div>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-black mb-6 tracking-tight animate-fade-in-up text-shadow">
                    <span class="bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
                        Sejarah Berdirinya
                    </span>
                </h1>
                
                <h2 class="text-3xl md:text-4xl font-bold mb-6 animate-fade-in-up animation-delay-200 text-blue-100">
                    SMA Negeri 1 Nagreg
                </h2>
                
                <p class="text-xl md:text-2xl opacity-90 mb-8 max-w-4xl mx-auto animate-fade-in-up animation-delay-300 leading-relaxed">
                    Kisah perjalanan pendirian sekolah yang diprakarsai oleh elemen masyarakat Kecamatan Nagreg pada tahun 2004
                </p>
                
                <div class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-600 text-white px-8 py-4 rounded-full font-semibold shadow-lg animate-fade-in-up hover-scale animation-delay-400">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Dies Natalis: 12 Juli 2004
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Introduction Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6 animate-fade-in-up">Sejarah Singkat Berdiri</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 mx-auto mb-8"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-slide-in-left">
                    <div class="glass-effect rounded-2xl p-8 shadow-xl">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Hari Bersejarah</h3>
                                <p class="text-blue-600 font-semibold">Dies Natalis SMA Negeri 1 Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p class="text-lg">
                                <strong>Alhamdulillah</strong>, SMA Negeri 1 Nagreg berdiri pada tahun akademik <span class="font-bold text-blue-600">2004/2005</span>. 
                                Tepatnya pada hari <span class="font-bold text-green-600">Senin, 12 Juli 2004</span>, hari tersebut diabadikan sebagai 
                                <strong>Dies Natalis SMA Negeri 1 Nagreg</strong>.
                            </p>
                            
                            <p>
                                Pendirian sekolah ini berawal dari <strong>prakarsa Bapak Drs. Didi Bachrudin</strong> yang pada saat itu 
                                menjabat sebagai Kepala Cabang Dinas Pendidikan dan Kebudayaan Kecamatan Nagreg. Beliaulah yang menjadi 
                                <span class="font-semibold text-blue-600">inspirator utama</span> pendirian SMA Negeri 1 Nagreg.
                            </p>
                            
                            <p>
                                Kegiatan selanjutnya dilaksanakan oleh <strong>Bapak Drs. Sujana</strong> sebagai ketua panitia dan 
                                <strong>Bapak Yuyu Kusnadi</strong> sebagai sekretaris, yang dibantu oleh Bapak Mamad, S.Ag, dan 
                                Ibu Ai Dedah sebagai anggota. Mereka didukung penuh oleh para tokoh pemerintahan, tokoh pendidikan, 
                                tokoh politik, dan tokoh masyarakat Kecamatan Nagreg.
                            </p>
                            
                            <p>
                                Sejak awal berdirinya, SMAN 1 Nagreg telah berkomitmen untuk menjadi lembaga pendidikan 
                                yang unggul dalam prestasi, berkarakter, dan berwawasan lingkungan, sejalan dengan 
                                perkembangan zaman dan kebutuhan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="animate-slide-in-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-2xl transform rotate-3"></div>
                        <div class="relative bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center">
                                <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-2">12 Juli 2004</h3>
                                <p class="text-lg text-gray-600 mb-4">Hari Pendirian</p>
                                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Dies Natalis
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background & Motivation Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Latar Belakang Pendirian</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kebutuhan nyata masyarakat Kecamatan Nagreg yang mendorong pendirian SMA Negeri 1 Nagreg
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-600 mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Problem Statement -->
                <div class="animate-slide-in-left">
                    <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-red-50 to-orange-50">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Tantangan Pendidikan</h3>
                                <p class="text-red-600 font-semibold">Kondisi Sebelum Tahun 2004</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Akses Terbatas:</strong> Sebagian besar siswa tamatan SMP tidak dapat melanjutkan 
                                    ke jenjang SMA karena jarak yang jauh dari jangkauan mereka.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Kendala Transportasi:</strong> Siswa harus bersekolah ke wilayah Kecamatan Cicalengka 
                                    dengan pertimbangan biaya transportasi yang memberatkan orang tua.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Daya Tampung Terbatas:</strong> SMA Negeri Cicalengka tidak dapat menampung 
                                    seluruh calon siswa dari wilayah Nagreg.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-red-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Kesenjangan Sosial:</strong> Hanya siswa dari keluarga mampu yang bisa melanjutkan 
                                    ke sekolah swasta, sedangkan yang kurang mampu terpaksa putus sekolah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Solution & Impact -->
                <div class="animate-slide-in-right">
                    <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-green-50 to-emerald-50">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">Solusi dan Dampak</h3>
                                <p class="text-green-600 font-semibold">Perubahan Setelah Pendirian</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Akses Pendidikan Merata:</strong> Memenuhi kebutuhan nyata warga Kecamatan Nagreg, 
                                    khususnya anak-anak usia sekolah yang ingin melanjutkan ke tingkat SMA.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Penghematan Biaya:</strong> Mengurangi beban transportasi dan biaya pendidikan 
                                    bagi keluarga di Kecamatan Nagreg.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Kesetaraan Peluang:</strong> Memberikan kesempatan yang sama bagi semua lapisan 
                                    masyarakat untuk mengenyam pendidikan berkualitas.
                                </p>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p>
                                    <strong>Kemajuan Daerah:</strong> Menjadi salah satu faktor pendorong perubahan dan 
                                    kemajuan warga Kecamatan Nagreg secara keseluruhan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quote Section -->
            <div class="mt-12">
                <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-blue-50 to-indigo-50 text-center">
                    <svg class="w-12 h-12 text-blue-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <blockquote class="text-xl italic text-gray-700 mb-4">
                        "Lambatnya perubahan kemajuan warga Kecamatan Nagreg salah satunya disebabkan oleh 
                        terbatasnya akses pendidikan menengah atas. Pendirian SMAN 1 Nagreg menjadi solusi 
                        nyata untuk memutus mata rantai tersebut."
                    </blockquote>
                    <p class="text-sm text-gray-600 font-medium">
                        - Refleksi dari Para Pendiri SMAN 1 Nagreg -
                    </p>
                </div>
            </div>
        </div>

        <!-- Modal Dasar Pendirian Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Modal Dasar Pendirian</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Faktor-faktor pendukung yang menjadi modal dasar untuk mendirikan SMA Negeri 1 Nagreg
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-indigo-600 mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Faktor 1 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg bg-gradient-to-br from-purple-50 to-indigo-50">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">1</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Perkembangan Strategis</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Perkembangan dan pertumbuhan Kecamatan Nagreg sebagai <strong>pintu gerbang wilayah timur 
                                Kabupaten Bandung</strong> yang semakin meningkat pesat, berdampak pada meningkatnya tuntutan 
                                kebutuhan akan sarana dan fasilitas pendidikan, khususnya untuk Sekolah Menengah Atas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Faktor 2 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg bg-gradient-to-br from-blue-50 to-cyan-50">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">2</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Aspirasi Masyarakat</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Masyarakat Kecamatan Nagreg, dalam rangka <strong>percepatan pembangunan di bidang 
                                sumber daya manusia</strong> sangat menginginkan adanya SMA Negeri yang berada di wilayahnya 
                                untuk meningkatkan kualitas pendidikan lokal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Faktor 3 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg bg-gradient-to-br from-green-50 to-emerald-50">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">3</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Keterbatasan Daya Tampung</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Daya tampung SMA Negeri yang ada di sekitar Kecamatan Nagreg <strong>tidak mampu menampung 
                                calon peserta didik</strong> yang ada, terutama yang berasal dari Kecamatan Nagreg dan 
                                sekitarnya, menciptakan gap yang signifikan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Faktor 4 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg bg-gradient-to-br from-orange-50 to-red-50">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">4</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Beban Biaya Transportasi</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Belum adanya SMA di wilayah Kecamatan Nagreg berdampak terhadap <strong>biaya pendidikan 
                                warga menjadi lebih mahal</strong> karena beban biaya transportasi bersekolah di SMA 
                                di luar Kecamatan Nagreg.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data SMP Section -->
            <div class="glass-effect rounded-2xl p-8 shadow-xl">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Potensi Sumber Siswa</h3>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-6">
                        SMA Negeri 1 Nagreg diprediksikan tidak akan kekurangan masukan siswa karena sumber peserta 
                        didik cukup memadai dengan adanya SMP di sekitarnya
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Data Kantor Cabang Dinas Kecamatan Nagreg 2006
                    </div>
                </div>

                <!-- Table Header -->
                <div class="overflow-x-auto">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-t-xl p-4 mb-6">
                        <h4 class="text-xl font-bold text-center">SMP yang Ada di Sekitar Wilayah Nagreg</h4>
                    </div>

                    <!-- Schools Data -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <!-- SMPN 1 Nagreg -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-blue-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SMPN 1 Nagreg</h5>
                                    <p class="text-sm text-blue-600">Sekolah Negeri</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">960</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">320</span>
                                </div>
                            </div>
                        </div>

                        <!-- SMPS Tribakti -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-green-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SMPS Tribakti</h5>
                                    <p class="text-sm text-green-600">Sekolah Swasta</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">100</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">33</span>
                                </div>
                            </div>
                        </div>

                        <!-- SMPS YP 17 Nagreg -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-purple-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SMPS YP 17 Nagreg</h5>
                                    <p class="text-sm text-purple-600">Sekolah Swasta</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">240</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">75</span>
                                </div>
                            </div>
                        </div>

                        <!-- SMPS PGRI Nagreg -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-orange-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">4</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SMPS PGRI Nagreg</h5>
                                    <p class="text-sm text-orange-600">Sekolah Swasta</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">220</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">73</span>
                                </div>
                            </div>
                        </div>

                        <!-- MTs Yapmi -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-teal-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">5</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">MTs Yapmi</h5>
                                    <p class="text-sm text-teal-600">Madrasah</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">75</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">28</span>
                                </div>
                            </div>
                        </div>

                        <!-- SMPS Miftahul Anwar -->
                        <div class="bg-white rounded-xl p-6 shadow-md border border-indigo-100 hover-scale">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                                    <span class="text-white font-bold">6</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SMPS Miftahul Anwar</h5>
                                    <p class="text-sm text-indigo-600">Sekolah Swasta</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Siswa:</span>
                                    <span class="font-bold text-blue-600">90</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kelas 3:</span>
                                    <span class="font-bold text-green-600">27</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Summary Statistics -->
                    <div class="bg-gradient-to-r from-emerald-500 to-green-600 text-white rounded-xl p-8">
                        <h4 class="text-2xl font-bold text-center mb-6">Total Potensi Siswa</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">1,685</div>
                                <p class="text-emerald-100">Total Siswa SMP</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold mb-2">556</div>
                                <p class="text-emerald-100">Siswa Kelas 3 (Calon Lulusan)</p>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-emerald-100 text-lg">
                                Potensi siswa yang dapat melanjutkan ke SMA Negeri 1 Nagreg sangat memadai
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Implementasi dan Struktur Awal Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Implementasi dan Struktur Awal</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Detail pelaksanaan pendirian sekolah, lokasi, struktur organisasi, dan proses menuju penegerian
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-teal-500 to-cyan-600 mx-auto mt-6"></div>
            </div>
            
            <!-- Lokasi Section -->
            <div class="mb-16">
                <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-emerald-50 to-green-50">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Lokasi dan Tanah Wakaf</h3>
                            <p class="text-emerald-600 font-semibold">Kampong Gamblung, Desa Nagreg</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <div class="bg-white rounded-xl p-6 shadow-md">
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                                    </svg>
                                    Detail Lokasi
                                </h4>
                                <div class="space-y-2 text-gray-700">
                                    <p><strong>Alamat:</strong> Kampong Gamblung RT. 03/RW 06</p>
                                    <p><strong>Desa:</strong> Nagreg</p>
                                    <p><strong>Kabupaten:</strong> Bandung</p>
                                    <p><strong>Luas Tanah:</strong> <span class="font-bold text-emerald-600">7,000 M²</span></p>
                                    <p><strong>Status:</strong> Tanah Wakaf Masyarakat</p>
                                    <p><strong>Hak Guna:</strong> Pemerintah Kabupaten Bandung</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="bg-white rounded-xl p-6 shadow-md">
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Sejarah Tanah
                                </h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Asal mulanya tanah tersebut diwakafkan kepada <strong>Dinas Kesehatan</strong> untuk 
                                    pendirian Rumah Sakit Umum Daerah (RSUD). Namun karena alasan tertentu, pendirian 
                                    RSUD tidak jadi dibangun di lokasi tersebut dan dialihkan ke wilayah Cicalengka, 
                                    sehingga tanah tersebut dapat dimanfaatkan untuk pendirian SMA Negeri 1 Nagreg.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lokasi Sementara Section -->
            <div class="mb-16">
                <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-blue-50 to-indigo-50">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Lokasi Sementara Pembelajaran</h3>
                            <p class="text-blue-600 font-semibold">Sebelum Gedung Utama Berdiri</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-md border border-blue-100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SD Negeri Nagreg 2</h5>
                                    <p class="text-sm text-blue-600">Lokasi Sementara 1</p>
                                </div>
                            </div>
                            <p class="text-gray-700 text-sm mb-2">
                                <strong>Kepala Sekolah:</strong> Bapak Drs. Yayat Hidayat, M.Pd
                            </p>
                            <p class="text-gray-600 text-sm">
                                Berdasarkan kesepakatan dan dukungan penuh dari kepala sekolah
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md border border-green-100">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-900">SD Negeri Nagreg 5</h5>
                                    <p class="text-sm text-green-600">Lokasi Sementara 2</p>
                                </div>
                            </div>
                            <p class="text-gray-700 text-sm mb-2">
                                <strong>Kepala Sekolah:</strong> Bapak Juhara, S.Pd
                            </p>
                            <p class="text-gray-600 text-sm">
                                Mendukung penuh penggunaan fasilitas untuk pembelajaran sementara
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-white rounded-xl p-6 shadow-md">
                        <div class="flex items-center mb-3">
                            <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <h5 class="font-bold text-gray-900">Lokasi Strategis</h5>
                        </div>
                        <p class="text-gray-700">
                            Terletak di <strong>Jalan Raya Nagreg KM. 38</strong>, dekat dengan Kantor KCD dan 
                            Kantor Desa Nagreg, memberikan aksesibilitas yang mudah bagi siswa dan koordinasi 
                            dengan instansi terkait.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Struktur Organisasi Awal -->
            <div class="mb-16">
                <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-purple-50 to-indigo-50">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">Struktur Organisasi Awal</h3>
                        <p class="text-lg text-gray-600">
                            Susunan kepemimpinan dan tenaga pengajar pada masa awal pendirian
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Pimpinan Sekolah -->
                        <div class="bg-white rounded-xl p-6 shadow-md text-center hover-scale">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Dra. Etty Sutiarsih</h4>
                            <div class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-3">
                                Pimpinan Sekolah
                            </div>
                            <p class="text-gray-600 text-sm">
                                Kepala SMA Negeri 1 Cicalengka sebagai sekolah induk dari SMA Negeri 1 Nagreg
                            </p>
                        </div>

                        <!-- Tenaga Pengajar -->
                        <div class="bg-white rounded-xl p-6 shadow-md text-center hover-scale">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Tenaga Pengajar</h4>
                            <div class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-3">
                                Guru PNS & Honorer
                            </div>
                            <p class="text-gray-600 text-sm">
                                Terdiri dari guru-guru SMA Negeri 1 Cicalengka dan tenaga honorer yang direkrut khusus
                            </p>
                        </div>

                        <!-- Tenaga TU -->
                        <div class="bg-white rounded-xl p-6 shadow-md text-center hover-scale">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Tenaga TU</h4>
                            <div class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-3">
                                Tata Usaha
                            </div>
                            <p class="text-gray-600 text-sm">
                                Tenaga Tata Laksana (TU) berupa tenaga honorer untuk mendukung administrasi sekolah
                            </p>
                        </div>

                        <!-- Siswa Baru -->
                        <div class="bg-white rounded-xl p-6 shadow-md text-center hover-scale">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m3 4.197V9a3 3 0 00-3-3v5.197m3-4.197V9a3 3 0 013 3v5.197"></path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">4 Kelas</h4>
                            <div class="inline-block px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm font-medium mb-3">
                                Siswa Baru 2004/2005
                            </div>
                            <p class="text-gray-600 text-sm">
                                Rencana penerimaan siswa baru dilaksanakan di SMA Negeri 1 Cicalengka pada Juli 2004
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proses Penegerian -->
            <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-yellow-50 to-orange-50">
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Proses Menuju Penegerian</h3>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Perjalanan dari status filial menuju sekolah negeri yang mandiri
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                                Status Filial
                            </h4>
                            <p class="text-gray-700 leading-relaxed">
                                SMA Negeri 1 Nagreg akan <strong>berfilial dengan SMAN 1 Cicalengka</strong> pada 
                                tahap awal. Status filial ini memungkinkan sekolah untuk beroperasi sambil 
                                mempersiapkan diri menuju status negeri yang mandiri.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Proses Persiapan
                            </h4>
                            <p class="text-gray-700 leading-relaxed">
                                SMA Negeri 1 Nagreg terus <strong>berbenah dan menyiapkan diri</strong> untuk 
                                mencapai atau memperoleh status negeri dari Bapak Bupati Kabupaten Bandung 
                                melalui Kepala Dinas Pendidikan Kabupaten Bandung.
                            </p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Makna Penegerian
                            </h4>
                            <p class="text-gray-700 leading-relaxed">
                                Penegerian SMA Negeri 1 Nagreg <strong>sangat berarti bagi warga sekolah dan 
                                masyarakat</strong> Kecamatan Nagreg. Dengan status negeri, pengelolaan dan 
                                pengembangan sekolah akan lebih seksama dan leluasa.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                                Manajemen Berbasis Sekolah
                            </h4>
                            <p class="text-gray-700 leading-relaxed">
                                Status negeri memungkinkan implementasi <strong>manajemen berbasis sekolah</strong> 
                                yang lebih optimal, sekaligus menjadi kebanggaan masyarakat Kecamatan Nagreg 
                                yang memiliki SMA Negeri di wilayahnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Penutup dan Harapan -->
            <div class="mt-16">
                <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-indigo-50 to-purple-50 text-center">
                    <svg class="w-16 h-16 text-indigo-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Harapan dan Doa</h3>
                    <blockquote class="text-xl italic text-gray-700 mb-6 max-w-4xl mx-auto leading-relaxed">
                        "Diharapkan dengan pengajuan permohonan dan pemaparan sejarah singkat ini akan memberi 
                        gambaran nyata terhadap kelayakan SMA Negeri 1 Nagreg untuk menyandang predikat sekolah 
                        Negeri kelak di kemudian hari."
                    </blockquote>
                    <div class="bg-white rounded-xl p-6 max-w-3xl mx-auto">
                        <p class="text-lg text-gray-700 mb-4">
                            <strong>"Akhirnya hanya kepada Allah SWT. lah kami memohon dan berserah diri..."</strong>
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Semoga dalam perjalanannya kelak di kemudian hari, SMA Negeri 1 Nagreg dapat sejajar 
                            dengan SMA yang ada di Kabupaten Bandung secara keseluruhan, dan semoga semua pihak 
                            yang ikut andil dalam mewujudkan cita-cita pendirian SMA Negeri 1 Nagreg mendapat 
                            pahala yang berlipat ganda dari Allah SWT.
                        </p>
                        <p class="text-indigo-600 font-semibold mt-4">
                            <em>Aamiin Ya Rabbal 'Alamiin</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Founding Committee Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Panitia Pendiri</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Para tokoh yang berdedikasi mewujudkan cita-cita pendidikan berkualitas di Kecamatan Nagreg
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-emerald-600 mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pemrakarsa Pendiri -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Drs. Didi Bachrudin</h3>
                        <div class="inline-block px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium mb-4">
                            Inspirator & Pemrakarsa
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Kepala Cabang Dinas Pendidikan dan Kebudayaan (KCD) Kecamatan Nagreg. Beliaulah inspirator utama 
                            dan motor penggerak pendirian SMA Negeri 1 Nagreg.
                        </p>
                    </div>
                </div>

                <!-- Ketua Panitia -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Drs. Sujana</h3>
                        <div class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                            Ketua Panitia Pendiri
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Guru SMA Negeri 1 Cicalengka, bertempat tinggal di Kp. Babakan Desa Nagreg Kecamatan Nagreg. 
                            Memimpin pelaksanaan kegiatan pendirian sekolah.
                        </p>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Yuyu Kusnadi</h3>
                        <div class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-4">
                            Sekretaris Panitia
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Guru SMA Negeri 1 Cicalengka, bertempat tinggal di Kp. Lebakjero Desa Ciherang Kecamatan Nagreg.
                        </p>
                    </div>
                </div>

                <!-- Anggota 1 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mamad S.Ag.</h3>
                        <div class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-4">
                            Anggota Panitia
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Guru SMA Negeri 1 Cicalengka, bertempat tinggal di Kampung Pulosari Kecamatan Balubur Limbangan.
                        </p>
                    </div>
                </div>

                <!-- Anggota 2 -->
                <div class="founder-card glass-effect rounded-2xl p-8 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-rose-500 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ai Dedah</h3>
                        <div class="inline-block px-3 py-1 bg-rose-100 text-rose-800 rounded-full text-sm font-medium mb-4">
                            Anggota Panitia
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Tokoh masyarakat yang bertempat tinggal di Kp. Lebakjero Desa Ciherang Kecamatan Nagreg.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Supporting Figures Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Tokoh Pendukung</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Para tokoh masyarakat dan pemerintahan yang memberikan andil besar dalam pendirian SMA Negeri 1 Nagreg
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 mx-auto mt-6"></div>
            </div>
            
            <div class="glass-effect rounded-2xl p-8 shadow-xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">AA. Gundara</h4>
                                <p class="text-gray-600 text-sm">Camat Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Poppi Hopipah, M.Si</h4>
                                <p class="text-gray-600 text-sm">Camat Nagreg (Penerus)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Agus Setiawan, SE.</h4>
                                <p class="text-gray-600 text-sm">Kapolsek Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">4</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Ade Yuswannirwana</h4>
                                <p class="text-gray-600 text-sm">Kasubdin Disdikbud Kabupaten Bandung</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">5</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Nana Rohana, S.Sos.</h4>
                                <p class="text-gray-600 text-sm">Sekcam Nagreg</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex items-center p-4 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">6</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Atang Mulyana</h4>
                                <p class="text-gray-600 text-sm">Kepala Daltrnatib (Satpol PP)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">7</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Adang</h4>
                                <p class="text-gray-600 text-sm">Komisaris Partai Golkar Kecamatan Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">8</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Para Kepala Desa</h4>
                                <p class="text-gray-600 text-sm">Se-Kecamatan Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-violet-50 to-purple-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">9</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Yayat Hidayat, M.Pd.</h4>
                                <p class="text-gray-600 text-sm">Ketua PGRI Kecamatan Nagreg</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-600 rounded-lg flex items-center justify-center mr-4">
                                <span class="text-white font-bold">10</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Para Ketua BPD dan LKMD</h4>
                                <p class="text-gray-600 text-sm">Se-Kecamatan Nagreg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Timeline Perkembangan</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Perjalanan panjang SMAN 1 Nagreg dari masa ke masa dalam membangun pendidikan berkualitas
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 mx-auto mt-6"></div>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-600 rounded-full"></div>
                
                <div class="space-y-12">
                    <!-- Timeline Item 1 -->
                    <div class="timeline-item flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="glass-effect rounded-2xl p-6 shadow-lg">
                                <div class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-3">
                                    2004
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Pendirian Sekolah</h3>
                                <p class="text-gray-600">
                                    Prakarsa masyarakat Kecamatan Nagreg untuk mendirikan SMA Negeri 1 Nagreg. 
                                    Mulai beroperasi dengan fasilitas terbatas namun semangat tinggi.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-blue-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="timeline-item flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="glass-effect rounded-2xl p-6 shadow-lg">
                                <div class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-3">
                                    2005-2010
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Masa Konsolidasi</h3>
                                <p class="text-gray-600">
                                    Periode pembangunan fondasi yang kuat. Peningkatan kualitas tenaga pendidik 
                                    dan pengembangan kurikulum sesuai standar nasional.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 3 -->
                    <div class="timeline-item flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="glass-effect rounded-2xl p-6 shadow-lg">
                                <div class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-3">
                                    2010-2015
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Era Pengembangan</h3>
                                <p class="text-gray-600">
                                    Peningkatan fasilitas pendidikan, laboratorium, dan sarana olahraga. 
                                    Mulai meraih prestasi akademik dan non-akademik di tingkat kabupaten.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-purple-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    
                    <!-- Timeline Item 4 -->
                    <div class="timeline-item flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-orange-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="glass-effect rounded-2xl p-6 shadow-lg">
                                <div class="inline-block px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm font-medium mb-3">
                                    2015-2020
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Modernisasi</h3>
                                <p class="text-gray-600">
                                    Era digitalisasi pendidikan. Implementasi teknologi pembelajaran, 
                                    pembangunan infrastruktur IT, dan program Adiwiyata.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 5 -->
                    <div class="timeline-item flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="glass-effect rounded-2xl p-6 shadow-lg">
                                <div class="inline-block px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm font-medium mb-3">
                                    2020-Sekarang
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Era Digital</h3>
                                <p class="text-gray-600">
                                    Adaptasi pembelajaran digital, implementasi kurikulum merdeka, 
                                    dan pengembangan karakter siswa menuju sekolah unggul berwawasan global.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-6 h-6 bg-indigo-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Achievements Section -->
        <div class="glass-effect rounded-2xl p-8 shadow-xl">
            <h3 class="text-3xl font-bold text-gray-900 text-center mb-12 gradient-text">Pencapaian Hingga Kini</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center hover-scale">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-pulse-slow">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">21+</div>
                    <div class="text-sm text-gray-600 font-medium">Tahun Mengabdi</div>
                </div>
                
                <div class="text-center hover-scale">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-pulse-slow" style="animation-delay: 0.5s;">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m3 4.197V9a3 3 0 00-3-3v5.197m3-4.197V9a3 3 0 013 3v5.197"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-green-600 mb-2">1000+</div>
                    <div class="text-sm text-gray-600 font-medium">Siswa Aktif</div>
                </div>
                
                <div class="text-center hover-scale">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-pulse-slow" style="animation-delay: 1s;">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-purple-600 mb-2">60+</div>
                    <div class="text-sm text-gray-600 font-medium">Tenaga Pendidik</div>
                </div>
                
                <div class="text-center hover-scale">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full mx-auto mb-4 flex items-center justify-center animate-pulse-slow" style="animation-delay: 1.5s;">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-orange-600 mb-2">5000+</div>
                    <div class="text-sm text-gray-600 font-medium">Alumni</div>
                </div>
            </div>
        </div>
        
        <!-- Future Vision Section -->
        <div class="mt-20">
            <div class="glass-effect rounded-2xl p-8 shadow-xl bg-gradient-to-br from-blue-50 to-indigo-50">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold gradient-text mb-4">Melangkah ke Masa Depan</h3>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Dengan fondasi yang kuat dari para pendiri dan dukungan masyarakat, SMAN 1 Nagreg terus berkomitmen 
                        untuk menjadi lembaga pendidikan unggul yang menghasilkan generasi berkarakter, berprestasi, dan berwawasan global.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-6 bg-white rounded-xl shadow-md hover-scale">
                        <div class="w-12 h-12 bg-green-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Inovasi Pendidikan</h4>
                        <p class="text-sm text-gray-600">Mengembangkan metode pembelajaran modern dan teknologi terdepan</p>
                    </div>
                    
                    <div class="text-center p-6 bg-white rounded-xl shadow-md hover-scale">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Wawasan Global</h4>
                        <p class="text-sm text-gray-600">Mempersiapkan siswa menghadapi tantangan dunia internasional</p>
                    </div>
                    
                    <div class="text-center p-6 bg-white rounded-xl shadow-md hover-scale">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Karakter Bangsa</h4>
                        <p class="text-sm text-gray-600">Membentuk pribadi yang berakhlak mulia dan berjiwa nasionalis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection