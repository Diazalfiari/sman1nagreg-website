@extends('layouts.app')

@section('title', 'Pokja Konservasi Air')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-500 via-cyan-500 to-teal-500 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Pokja Konservasi Air
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Melestarikan air untuk kehidupan yang berkelanjutan dan masa depan yang lebih baik
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        💧 "Setetes Air, Sejuta Harapan"
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Konservasi Air</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Water Statistics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Hemat Air</h3>
                <p class="text-lg sm:text-2xl font-bold text-blue-600">35%</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Air Daur Ulang</h3>
                <p class="text-lg sm:text-2xl font-bold text-cyan-600">2,500L</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-teal-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Rainwater</h3>
                <p class="text-lg sm:text-2xl font-bold text-teal-600">8,750L</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm border p-4 sm:p-6 text-center">
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-sm sm:text-lg font-semibold text-gray-900 mb-1">Kualitas Air</h3>
                <p class="text-lg sm:text-2xl font-bold text-green-600">A+</p>
            </div>
        </div>

        <!-- Water Conservation Programs -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Rain Water Harvesting -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-blue-50 border-b border-blue-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-blue-900">Rainwater Harvesting</h3>
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
                            <span class="text-sm text-gray-700">Tangki penampung 15.000L</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Filter air hujan otomatis</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Sistem distribusi terpusat</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Monitoring kualitas real-time</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Greywater Treatment -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-cyan-50 border-b border-cyan-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-cyan-900">Greywater Treatment</h3>
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
                            <span class="text-sm text-gray-700">Pengolahan air bekas wudhu</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Filter bioball natural</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Reuse untuk penyiraman</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-cyan-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Zero waste water system</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Water Education -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="p-6 bg-teal-50 border-b border-teal-200">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-teal-900">Edukasi Air</h3>
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
                            <span class="text-sm text-gray-700">Workshop pengelolaan air</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Lab kualitas air siswa</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Kampanye hemat air</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-5 h-5 bg-teal-100 rounded-full flex items-center justify-center mt-0.5">
                                <svg class="w-3 h-3 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm text-gray-700">Water footprint calculator</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Water Monitoring & Smart Water System -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Water Monitoring -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-blue-50 border-b border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-900">Monitoring Penggunaan Air</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                        $waterUsage = [
                            ['area' => 'Toilet & Wudhu', 'usage' => 45, 'target' => 40, 'status' => 'over'],
                            ['area' => 'Dapur & Kantin', 'usage' => 25, 'target' => 30, 'status' => 'good'],
                            ['area' => 'Penyiraman Taman', 'usage' => 20, 'target' => 25, 'status' => 'good'],
                            ['area' => 'Laboratorium', 'usage' => 10, 'target' => 5, 'status' => 'over']
                        ];
                        @endphp

                        @foreach($waterUsage as $data)
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-900">{{ $data['area'] }}</span>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500">{{ $data['usage'] }}%</span>
                                    @if($data['status'] === 'over')
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Over Target
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            On Track
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="bg-gray-200 rounded-full h-2 relative">
                                @if($data['status'] === 'over')
                                    <div class="bg-red-500 h-2 rounded-full" style="width: {{ $data['usage'] }}%"></div>
                                @else
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $data['usage'] }}%"></div>
                                @endif
                                <div class="absolute top-0 bg-gray-400 w-0.5 h-2" style="left: {{ $data['target'] }}%"></div>
                            </div>
                            <div class="text-xs text-gray-500 mt-1 text-right">Target: {{ $data['target'] }}%</div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-gray-600">Total Konsumsi Hari Ini:</span>
                                <span class="font-semibold text-gray-900 block">4,250 Liter</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Penghematan Bulan Ini:</span>
                                <span class="font-semibold text-green-600 block">1,890 Liter</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Smart Water System -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-cyan-50 border-b border-cyan-200">
                    <h3 class="text-lg font-semibold text-cyan-900">Smart Water System</h3>
                </div>
                <div class="p-6">
                    <div class="text-center mb-6">
                        <div class="text-3xl font-bold text-cyan-600 mb-2">15,750L</div>
                        <p class="text-sm text-gray-600">Kapasitas Total Tangki</p>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-cyan-50 rounded-lg p-4">
                            <h4 class="font-medium text-cyan-900 mb-3">Status Sistem</h4>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="text-gray-600">Tangki Utama:</span>
                                    <span class="font-medium ml-2">85%</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Rainwater:</span>
                                    <span class="font-medium ml-2">67%</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Greywater:</span>
                                    <span class="font-medium ml-2">43%</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Tekanan:</span>
                                    <span class="font-medium ml-2">Normal</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-blue-50 rounded-lg p-4">
                            <h4 class="font-medium text-blue-900 mb-3">Sensor Network</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">Flow Sensor</span>
                                    <span class="text-green-600 font-medium">● Online</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">Level Sensor</span>
                                    <span class="text-green-600 font-medium">● Online</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">Quality Sensor</span>
                                    <span class="text-green-600 font-medium">● Online</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">Auto Valve</span>
                                    <span class="text-green-600 font-medium">● Active</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-green-50 rounded-lg p-4">
                            <h4 class="font-medium text-green-900 mb-2">Water Quality</h4>
                            <div class="space-y-1 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-700">pH Level</span>
                                    <span class="font-medium">7.2</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">TDS</span>
                                    <span class="font-medium">145 ppm</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Turbidity</span>
                                    <span class="font-medium">0.8 NTU</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Water Conservation Tips -->
        <div class="bg-white rounded-lg shadow-sm border overflow-hidden mb-12">
            <div class="px-6 py-4 bg-teal-50 border-b border-teal-200">
                <h3 class="text-lg font-semibold text-teal-900">Tips Hemat Air</h3>
                <p class="text-sm text-teal-700">Praktik sederhana untuk menghemat air di kehidupan sehari-hari</p>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-blue-900 mb-2">Tutup Keran</h4>
                        <p class="text-xs text-blue-700">Selalu tutup keran saat tidak digunakan, dapat menghemat 200L/hari</p>
                    </div>

                    <div class="text-center p-4 bg-cyan-50 rounded-lg">
                        <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-cyan-900 mb-2">Wudhu Hemat</h4>
                        <p class="text-xs text-cyan-700">Gunakan air secukupnya saat wudhu, cukup 1-2 liter per orang</p>
                    </div>

                    <div class="text-center p-4 bg-teal-50 rounded-lg">
                        <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-teal-900 mb-2">Reuse Water</h4>
                        <p class="text-xs text-teal-700">Gunakan kembali air bekas wudhu untuk menyiram tanaman</p>
                    </div>

                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h4 class="font-medium text-green-900 mb-2">Check Leaks</h4>
                        <p class="text-xs text-green-700">Periksa dan laporkan kebocoran pipa atau keran yang rusak</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Information -->
        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg border p-6">
            <div class="text-center mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tim Pokja Konservasi Air</h3>
                <p class="text-gray-600">Bersama menjaga dan melestarikan air untuk generasi mendatang</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Koordinator</h4>
                    <p class="text-sm text-gray-600">Dr. Dewi Lestari, M.Si</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Tim Teknis</h4>
                    <p class="text-sm text-gray-600">4 Guru Kimia</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Water Warriors</h4>
                    <p class="text-sm text-gray-600">112 Siswa</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Kontak</h4>
                    <p class="text-sm text-gray-600">air@sman1nagreg.sch.id</p>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                    Bergabung Water Warriors
                </a>
            </div>
        </div>
    </div>
</div>
@endsection