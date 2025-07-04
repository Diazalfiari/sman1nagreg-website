@extends('layouts.app')

@section('title', 'Sejarah Sekolah')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    Sejarah Sekolah
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Perjalanan panjang SMAN 1 Nagreg dalam membangun pendidikan berkualitas dan berkarakter
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Sejarah Sekolah</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Timeline Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Perjalanan Sejarah</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ikuti perjalanan sejarah SMAN 1 Nagreg dari masa ke masa dalam membangun institusi pendidikan yang unggul
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-blue-200 h-full"></div>

                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- 1985 - Pendirian -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">1985</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Pendirian Sekolah</h3>
                                <p class="text-gray-600">
                                    SMAN 1 Nagreg didirikan berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan 
                                    dengan tujuan memberikan akses pendidikan menengah atas yang berkualitas di wilayah Nagreg.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 1990 - Akreditasi Pertama -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">1990</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Akreditasi Pertama</h3>
                                <p class="text-gray-600">
                                    Meraih akreditasi pertama dengan status "Diakui" yang menjadi tonggak penting 
                                    dalam pengakuan kualitas pendidikan di SMAN 1 Nagreg.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 1995 - Pembangunan Fasilitas -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">1995</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Pengembangan Fasilitas</h3>
                                <p class="text-gray-600">
                                    Pembangunan laboratorium IPA, perpustakaan modern, dan fasilitas olahraga 
                                    untuk mendukung kegiatan pembelajaran yang lebih komprehensif.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 2005 - Akreditasi A -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">2005</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Akreditasi A</h3>
                                <p class="text-gray-600">
                                    Mencapai prestasi gemilang dengan meraih akreditasi A dari Badan Akreditasi Nasional Sekolah/Madrasah, 
                                    membuktikan komitmen terhadap kualitas pendidikan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2010 - Program Adiwiyata -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">2010</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Program Adiwiyata</h3>
                                <p class="text-gray-600">
                                    Memulai program Adiwiyata sebagai sekolah berwawasan lingkungan, 
                                    mengintegrasikan pendidikan karakter dengan kepedulian terhadap lingkungan.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 2015 - Era Digital -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">2015</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Transformasi Digital</h3>
                                <p class="text-gray-600">
                                    Implementasi sistem pembelajaran digital, e-learning platform, dan 
                                    infrastruktur TIK yang mendukung pembelajaran abad 21.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2020 - Adaptasi Pandemi -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <div class="text-2xl font-bold text-blue-600 mb-2">2020</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Adaptasi Pandemi</h3>
                                <p class="text-gray-600">
                                    Berhasil beradaptasi dengan pembelajaran daring selama pandemi COVID-19, 
                                    memastikan kontinuitas pendidikan berkualitas untuk semua siswa.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 2025 - Era Baru -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-green-500 rounded-full border-4 border-white"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-md border-2 border-green-200">
                                <div class="text-2xl font-bold text-green-600 mb-2">2025</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Menuju Masa Depan</h3>
                                <p class="text-gray-600">
                                    Melanjutkan komitmen sebagai sekolah unggul berkarakter dengan inovasi pembelajaran, 
                                    teknologi terdepan, dan pembentukan generasi penerus bangsa yang kompeten.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Achievement Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Left Column - Story -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Perjalanan Menuju Keunggulan</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-4">
                            SMAN 1 Nagreg didirikan pada tahun 1985 dengan visi menjadi lembaga pendidikan yang unggul 
                            dan berkarakter. Berlokasi di jantung Kecamatan Nagreg, Kabupaten Bandung, sekolah ini 
                            telah menjadi pilihan utama masyarakat untuk pendidikan menengah atas berkualitas.
                        </p>
                        <p class="mb-4">
                            Sejak awal berdirinya, SMAN 1 Nagreg berkomitmen untuk memberikan pendidikan yang 
                            tidak hanya fokus pada aspek akademik, tetapi juga pengembangan karakter, kreativitas, 
                            dan kepedulian terhadap lingkungan.
                        </p>
                        <p>
                            Dengan dukungan tenaga pendidik yang profesional, fasilitas yang memadai, dan 
                            kurikulum yang adaptif, SMAN 1 Nagreg terus berkembang menjadi salah satu sekolah 
                            terbaik di wilayah Bandung.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column - Achievements -->
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Pencapaian Penting</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Akreditasi A</h4>
                            <p class="text-gray-600">Meraih akreditasi A dari BAN-S/M sebagai pengakuan kualitas pendidikan</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Sekolah Adiwiyata</h4>
                            <p class="text-gray-600">Penghargaan sebagai sekolah berwawasan lingkungan tingkat nasional</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">ISO 9001:2015</h4>
                            <p class="text-gray-600">Sertifikasi manajemen mutu internasional untuk sistem pendidikan</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Prestasi Siswa</h4>
                            <p class="text-gray-600">Ratusan prestasi akademik dan non-akademik tingkat regional dan nasional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
            <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">SMAN 1 Nagreg Dalam Angka</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">40+</div>
                    <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">1,200+</div>
                    <div class="text-sm text-gray-600">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">80+</div>
                    <div class="text-sm text-gray-600">Tenaga Pendidik</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-2">15,000+</div>
                    <div class="text-sm text-gray-600">Alumni</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection