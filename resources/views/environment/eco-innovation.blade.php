@extends('layouts.app')

@section('title', 'Pokja Inovasi Perilaku Ramah Lingkungan Hidup')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-2xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Pokja Inovasi Perilaku Ramah Lingkungan
                </h1>
                <p class="text-xl text-purple-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Menciptakan inovasi dan membudayakan perilaku ramah lingkungan di seluruh komunitas sekolah
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        🌍 "Innovation for Sustainable Future"
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Inovasi Ramah Lingkungan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Innovation Statistics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Inovasi Aktif</h3>
                <p class="text-lg sm:text-2xl font-bold text-purple-600">42</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Eco Champions</h3>
                <p class="text-lg sm:text-2xl font-bold text-indigo-600">267</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Project Success</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">89%</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Impact Score</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">A+</p>
            </div>
        </div>

                <!-- Innovation Categories -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Digital Innovation -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-purple-50 border-b border-purple-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-purple-900">Digital Innovation</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Aplikasi EcoTracker sekolah</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Smart waste monitoring IoT</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">AI carbon footprint calculator</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Virtual reality eco education</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Social Innovation -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-indigo-50 border-b border-indigo-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-indigo-900">Social Innovation</h3>
                    </div>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-indigo-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Green lifestyle challenge</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-indigo-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Eco-ambassador program</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-indigo-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Community eco workshop</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-indigo-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Peer-to-peer education</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Product Innovation -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-blue-50 border-b border-blue-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-900">Product Innovation</h3>
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
                            <span class="text-sm text-gray-700">Ecobrick furniture</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Biodegradable packaging</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Solar phone charger</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Organic soap from used oil</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Featured Innovations -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-12">
            <div class="px-6 py-4 bg-purple-50 border-b border-purple-200">
                <h3 class="text-lg font-semibold text-purple-900">Inovasi Unggulan 2025</h3>
                <p class="text-sm text-purple-700">Proyek inovasi terbaik yang telah diimplementasikan</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                    $featuredInnovations = [
                        [
                            'title' => 'EcoTracker App',
                            'description' => 'Aplikasi mobile untuk tracking jejak karbon personal dan sekolah',
                            'team' => 'Kelas XII MIPA 1',
                            'impact' => '30% pengurangan jejak karbon',
                            'status' => 'Implemented',
                            'color' => 'purple'
                        ],
                        [
                            'title' => 'Smart Composter',
                            'description' => 'Komposter otomatis dengan sensor IoT dan monitoring real-time',
                            'team' => 'Tim Robotika',
                            'impact' => '85% pengurangan sampah organik',
                            'status' => 'Pilot Testing',
                            'color' => 'green'
                        ],
                        [
                            'title' => 'Eco-Fashion Show',
                            'description' => 'Fashion show dengan bahan daur ulang dan sustainable fabric',
                            'team' => 'OSIS & Seni Budaya',
                            'impact' => '500+ awareness reach',
                            'status' => 'Completed',
                            'color' => 'blue'
                        ],
                        [
                            'title' => 'Vertical Garden System',
                            'description' => 'Sistem taman vertikal otomatis dengan drip irrigation',
                            'team' => 'Kelas XI IPA 2',
                            'impact' => '40% peningkatan green space',
                            'status' => 'Implemented',
                            'color' => 'emerald'
                        ],
                        [
                            'title' => 'Zero Waste Canteen',
                            'description' => 'Program kantin tanpa sampah dengan packaging reusable',
                            'team' => 'Kelas X IPS 1',
                            'impact' => '90% pengurangan sampah kantin',
                            'status' => 'Scaling Up',
                            'color' => 'orange'
                        ],
                        [
                            'title' => 'Solar Workshop',
                            'description' => 'Workshop pembuatan panel surya mini untuk lighting sekolah',
                            'team' => 'Ekstrakurikuler Fisika',
                            'impact' => '15kW renewable energy',
                            'status' => 'Ongoing',
                            'color' => 'yellow'
                        ]
                    ];
                    @endphp

                    @foreach($featuredInnovations as $innovation)
                    <div class="bg-{{ $innovation['color'] }}-50 border border-{{ $innovation['color'] }}-200 rounded-lg p-6">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="font-semibold text-{{ $innovation['color'] }}-900 text-lg">{{ $innovation['title'] }}</h4>
                            @php
                            $statusColors = [
                                'Implemented' => 'bg-green-100 text-green-800',
                                'Pilot Testing' => 'bg-yellow-100 text-yellow-800',
                                'Completed' => 'bg-blue-100 text-blue-800',
                                'Scaling Up' => 'bg-purple-100 text-purple-800',
                                'Ongoing' => 'bg-orange-100 text-orange-800'
                            ];
                            @endphp
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $statusColors[$innovation['status']] }}">
                                {{ $innovation['status'] }}
                            </span>
                        </div>
                        <p class="text-{{ $innovation['color'] }}-700 text-sm mb-4">{{ $innovation['description'] }}</p>
                        
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center text-{{ $innovation['color'] }}-600">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                {{ $innovation['team'] }}
                            </div>
                            <div class="flex items-center text-{{ $innovation['color'] }}-600">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                {{ $innovation['impact'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Behavior Change Programs -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Behavior Tracking -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                    <h3 class="text-lg font-semibold text-indigo-900">Tracking Perubahan Perilaku</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $behaviorMetrics = [
                            ['behavior' => 'Membuang sampah pada tempatnya', 'progress' => 92, 'trend' => 'up'],
                            ['behavior' => 'Menggunakan tumbler sendiri', 'progress' => 78, 'trend' => 'up'],
                            ['behavior' => 'Mematikan lampu saat keluar ruangan', 'progress' => 85, 'trend' => 'up'],
                            ['behavior' => 'Menggunakan transportasi ramah lingkungan', 'progress' => 65, 'trend' => 'up'],
                            ['behavior' => 'Mengurangi penggunaan plastik', 'progress' => 73, 'trend' => 'up']
                        ];
                        @endphp

                        @foreach($behaviorMetrics as $metric)
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">{{ $metric['behavior'] }}</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500">{{ $metric['progress'] }}%</span>
                                    @if($metric['trend'] === 'up')
                                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                        </svg>
                                    @endif
                                </div>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: {{ $metric['progress'] }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-6 p-4 bg-indigo-50 rounded-lg">
                        <h4 class="font-medium text-indigo-900 mb-2">Target Semester Ini</h4>
                        <p class="text-sm text-indigo-700">Mencapai 90% adoption rate untuk semua perilaku ramah lingkungan di komunitas sekolah.</p>
                    </div>
                </div>
            </div>

            <!-- Innovation Pipeline -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-purple-50 border-b border-purple-200">
                    <h3 class="text-lg font-semibold text-purple-900">Pipeline Inovasi Mendatang</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $pipelineProjects = [
                            [
                                'title' => 'Blockchain Carbon Credit',
                                'stage' => 'Research',
                                'timeline' => 'Q3 2025',
                                'team' => 'IT Club',
                                'progress' => 25
                            ],
                            [
                                'title' => 'Aquaponics System',
                                'stage' => 'Prototype',
                                'timeline' => 'Q2 2025',
                                'team' => 'Biologi Club',
                                'progress' => 60
                            ],
                            [
                                'title' => 'Green Cryptocurrency',
                                'stage' => 'Concept',
                                'timeline' => 'Q4 2025',
                                'team' => 'Ekonomi Club',
                                'progress' => 15
                            ],
                            [
                                'title' => 'Biodegradable Mask',
                                'stage' => 'Testing',
                                'timeline' => 'Q2 2025',
                                'team' => 'Kimia Club',
                                'progress' => 75
                            ]
                        ];
                        @endphp

                        @foreach($pipelineProjects as $project)
                        <div class="border-l-4 border-purple-500 pl-4">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold text-gray-900 text-sm">{{ $project['title'] }}</h4>
                                @php
                                $stageColors = [
                                    'Research' => 'bg-yellow-100 text-yellow-800',
                                    'Prototype' => 'bg-blue-100 text-blue-800',
                                    'Concept' => 'bg-gray-100 text-gray-800',
                                    'Testing' => 'bg-green-100 text-green-800'
                                ];
                                @endphp
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $stageColors[$project['stage']] }}">
                                    {{ $project['stage'] }}
                                </span>
                            </div>
                            <div class="flex items-center justify-between text-xs text-gray-600 mb-2">
                                <span>{{ $project['team'] }}</span>
                                <span>{{ $project['timeline'] }}</span>
                            </div>
                            <div class="bg-gray-200 rounded-full h-1">
                                <div class="bg-purple-600 h-1 rounded-full" style="width: {{ $project['progress'] }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Innovation Challenges -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-12">
            <div class="px-6 py-4 bg-gradient-to-r from-purple-50 to-indigo-50 border-b">
                <h3 class="text-lg font-semibold text-gray-900">Tantangan Inovasi Terbuka</h3>
                <p class="text-sm text-gray-600">Ajang kompetisi untuk mencari solusi inovatif masalah lingkungan</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                    $challenges = [
                        [
                            'title' => 'Zero Plastic School Challenge',
                            'description' => 'Ciptakan solusi untuk menghilangkan 100% penggunaan plastik sekali pakai di sekolah',
                            'deadline' => '2025-08-15',
                            'prize' => 'Rp 5.000.000',
                            'participants' => 23,
                            'status' => 'Open'
                        ],
                        [
                            'title' => 'Smart Energy Management',
                            'description' => 'Rancang sistem manajemen energi pintar untuk mengoptimalkan konsumsi listrik sekolah',
                            'deadline' => '2025-09-01',
                            'prize' => 'Rp 3.000.000',
                            'participants' => 15,
                            'status' => 'Open'
                        ],
                        [
                            'title' => 'Circular Economy Model',
                            'description' => 'Buat model ekonomi sirkular untuk mengelola seluruh waste stream sekolah',
                            'deadline' => '2025-07-30',
                            'prize' => 'Rp 4.000.000',
                            'participants' => 31,
                            'status' => 'Closing Soon'
                        ],
                        [
                            'title' => 'Green Transportation',
                            'description' => 'Solusi transportasi ramah lingkungan untuk komunitas sekolah',
                            'deadline' => '2025-10-15',
                            'prize' => 'Rp 2.500.000',
                            'participants' => 8,
                            'status' => 'New'
                        ]
                    ];
                    @endphp

                    @foreach($challenges as $challenge)
                    <div class="border rounded-lg p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="font-semibold text-gray-900 text-lg">{{ $challenge['title'] }}</h4>
                            @php
                            $statusColors = [
                                'Open' => 'bg-green-100 text-green-800',
                                'Closing Soon' => 'bg-yellow-100 text-yellow-800',
                                'New' => 'bg-blue-100 text-blue-800'
                            ];
                            @endphp
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $statusColors[$challenge['status']] }}">
                                {{ $challenge['status'] }}
                            </span>
                        </div>
                        
                        <p class="text-gray-600 text-sm mb-4">{{ $challenge['description'] }}</p>
                        
                        <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                            <div>
                                <span class="text-gray-500">Deadline:</span>
                                <span class="font-medium ml-1">{{ date('d M Y', strtotime($challenge['deadline'])) }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Prize:</span>
                                <span class="font-medium ml-1 text-green-600">{{ $challenge['prize'] }}</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Participants:</span>
                                <span class="font-medium ml-1">{{ $challenge['participants'] }} teams</span>
                            </div>
                            <div>
                                <span class="text-gray-500">Type:</span>
                                <span class="font-medium ml-1">Team</span>
                            </div>
                        </div>
                        
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-lg transition-colors duration-200 text-sm font-medium">
                            Daftar Challenge
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Team Information -->
        <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tim Pokja Inovasi Perilaku Ramah Lingkungan</h3>
                <p class="text-gray-600">Bersama menciptakan inovasi untuk masa depan yang berkelanjutan</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Innovation Leader</h4>
                    <p class="text-sm text-gray-600">Dr. Rudi Hartono, M.T</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Research Team</h4>
                    <p class="text-sm text-gray-600">15 Guru</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Innovation Hub</h4>
                    <p class="text-sm text-gray-600">267 Siswa</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Kontak</h4>
                    <p class="text-sm text-gray-600">inovasi@sman1nagreg.sch.id</p>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    Join Innovation Hub
                </a>
            </div>
        </div>
    </div>
</div>
@endsection