@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section with Database Image -->
<section class="relative overflow-hidden">
    @if($profile && $profile->school_image)
        <!-- Hero dengan Background Image dari Database -->
        <div class="relative h-screen">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ Storage::url($profile->school_image) }}" 
                     alt="{{ $profile->school_name ?? 'SMAN 1 Nagreg' }}" 
                     class="w-full h-full object-cover">
            </div>
            
            <!-- Gradient Overlays -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-black/20"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/40 to-transparent"></div>
            
            <!-- Content -->
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-6">
                        🎓 Sekolah Menengah Atas Negeri
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight text-white">
                        <span class="block">Selamat Datang di</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                            {{ $profile->school_name ?? 'SMAN 1 Nagreg' }}
                        </span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl mb-8 text-white/90 leading-relaxed max-w-3xl mx-auto">
                        {{ $profile->school_motto ?? 'Membentuk generasi unggul berkarakter dengan pendidikan berkualitas tinggi dan nilai-nilai kebangsaan yang kuat.' }}
                    </p>
                    
                    <!-- Status Badges -->
                    <div class="flex flex-wrap justify-center gap-4 text-sm mb-8">
                        @if($profile->accreditation_grade)
                            <span class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-600 text-white px-4 py-2 rounded-full font-semibold">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                Akreditasi {{ $profile->accreditation_grade }}
                            </span>
                        @endif
                        
                        @if($profile->school_status)
                            <span class="inline-flex items-center bg-gradient-to-r from-blue-500 to-cyan-600 text-white px-4 py-2 rounded-full font-semibold">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $profile->school_status }}
                            </span>
                        @endif
                        
                        @if($profile->establishment_year)
                            <span class="inline-flex items-center bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-4 py-2 rounded-full font-semibold">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                Sejak {{ $profile->establishment_year }}
                            </span>
                        @endif
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('profile.school') }}" 
                           class="group bg-gradient-to-r from-yellow-500 to-yellow-400 hover:from-yellow-600 hover:to-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                Tentang Kami
                                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('news.index') }}" 
                           class="group bg-white/20 backdrop-blur-sm border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300">
                            <span class="flex items-center justify-center">
                                Berita Terbaru
                                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- Fallback Hero Section -->
        <div class="relative h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-blue-600 text-white overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/50 to-transparent"></div>
            
            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-400 opacity-20 rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-32 h-32 bg-white opacity-10 rounded-full animate-bounce"></div>
            <div class="absolute top-40 right-10 w-16 h-16 bg-yellow-300 opacity-30 rounded-full"></div>
            
            <div class="relative flex items-center justify-center h-full">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="inline-block px-4 py-2 bg-yellow-500/20 rounded-full text-yellow-300 text-sm font-medium mb-6">
                        🎓 Sekolah Menengah Atas Negeri
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                        <span class="block text-white">Selamat Datang di</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                            SMAN 1 Nagreg
                        </span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed max-w-3xl mx-auto">
                        Membentuk generasi unggul berkarakter dengan pendidikan berkualitas tinggi dan nilai-nilai kebangsaan yang kuat.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('profile.school') }}" 
                           class="group bg-gradient-to-r from-yellow-500 to-yellow-400 hover:from-yellow-600 hover:to-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                Tentang Kami
                                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="{{ route('news.index') }}" 
                           class="group bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 backdrop-blur-sm">
                            <span class="flex items-center justify-center">
                                Berita Terbaru
                                <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-50 to-white"></div>
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-600 via-yellow-500 to-blue-600"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Prestasi & Pencapaian</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-yellow-500 mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Angka-angka yang menunjukkan dedikasi kami dalam memberikan pendidikan terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-200">
                <div class="text-5xl font-bold text-blue-600 mb-2 group-hover:scale-110 transition-transform">
                    {{ $profile && $profile->establishment_year ? date('Y') - $profile->establishment_year : '35' }}+
                </div>
                <div class="text-gray-700 font-medium text-lg">Tahun Berdiri</div>
                <div class="text-sm text-gray-500 mt-2">Sejak {{ $profile->establishment_year ?? '1988' }}</div>
            </div>
            
            <div class="group bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-200">
                <div class="text-5xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform">1000+</div>
                <div class="text-gray-700 font-medium text-lg">Alumni Sukses</div>
                <div class="text-sm text-gray-500 mt-2">Tersebar di seluruh Indonesia</div>
            </div>
            
            <div class="group bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-200">
                <div class="text-5xl font-bold text-purple-600 mb-2 group-hover:scale-110 transition-transform">
                    {{ $profile->total_teachers ?? '60' }}+
                </div>
                <div class="text-gray-700 font-medium text-lg">Guru & Staff</div>
                <div class="text-sm text-gray-500 mt-2">Profesional berpengalaman</div>
            </div>
            
            <div class="group bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-yellow-200">
                <div class="text-5xl font-bold text-yellow-600 mb-2 group-hover:scale-110 transition-transform">
                    {{ $profile->total_students ?? '600' }}+
                </div>
                <div class="text-gray-700 font-medium text-lg">Siswa Aktif</div>
                <div class="text-sm text-gray-500 mt-2">Kelas X, XI, XII</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-gradient-to-br from-gray-50 to-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Profil Sekolah
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $profile->school_name ?? 'SMAN 1 Nagreg' }}
                </h2>
                <div class="text-gray-600 mb-8 leading-relaxed text-lg">
                    {{ $profile->description ?? 'SMAN 1 Nagreg adalah sekolah menengah atas negeri yang berkomitmen untuk memberikan pendidikan berkualitas tinggi dengan mengintegrasikan nilai-nilai karakter, akademik, dan keterampilan untuk mempersiapkan siswa menghadapi tantangan masa depan.' }}
                </div>
                
                <!-- Key Points -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Pendidikan Berkualitas</h4>
                            <p class="text-gray-600">Kurikulum modern dengan standar nasional</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Fasilitas Lengkap</h4>
                            <p class="text-gray-600">Laboratorium, perpustakaan, dan ruang multimedia</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Ekstrakurikuler Beragam</h4>
                            <p class="text-gray-600">Pengembangan bakat dan minat siswa</p>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('profile.school') }}" 
                   class="group inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Selengkapnya
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="order-1 lg:order-2 relative">
                <div class="relative">
                    @if($profile && $profile->school_image)
                        <img src="{{ Storage::url($profile->school_image) }}" 
                             alt="{{ $profile->school_name ?? 'SMAN 1 Nagreg' }}" 
                             class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                    @else
                        <div class="rounded-2xl shadow-2xl w-full h-96 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-20 h-20 text-blue-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <p class="text-blue-600 font-medium">Foto Sekolah</p>
                            </div>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent rounded-2xl"></div>
                </div>
                
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border border-gray-100">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Akreditasi {{ $profile->accreditation_grade ?? 'A' }}</div>
                            <div class="text-sm text-gray-600">Standar Nasional</div>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-blue-600 rounded-full opacity-20"></div>
                <div class="absolute top-10 -left-4 w-16 h-16 bg-yellow-500 rounded-full opacity-30"></div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v-1z"></path>
                </svg>
                Berita & Informasi
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-yellow-500 mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Ikuti perkembangan terbaru dari {{ $profile->school_name ?? 'SMAN 1 Nagreg' }} melalui berita dan pengumuman resmi.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($latestNews as $news)
                <article class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="relative overflow-hidden">
                        @if($news->image)
                            <img src="{{ Storage::url($news->image) }}" 
                                 alt="{{ $news->title }}" 
                                 class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-56 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                <svg class="h-16 w-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                            Terbaru
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $news->published_at->format('d M Y') }}</span>
                            <span class="mx-2">•</span>
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $news->author->name }}</span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors">
                            <a href="{{ route('news.show', $news->slug) }}">
                                {{ $news->title }}
                            </a>
                        </h3>
                        
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $news->excerpt }}</p>
                        
                        <a href="{{ route('news.show', $news->slug) }}" 
                           class="group/link inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                            Baca Selengkapnya
                            <svg class="ml-2 h-4 w-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-16">
                    <svg class="mx-auto h-24 w-24 text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <h3 class="text-xl font-medium text-gray-900 mb-2">Belum ada berita</h3>
                    <p class="text-gray-500">Berita terbaru akan segera hadir di sini.</p>
                </div>
            @endforelse
        </div>
        
        @if($latestNews->count() > 0)
            <div class="text-center mt-12">
                <a href="{{ route('news.index') }}" 
                   class="group inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Lihat Semua Berita
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Features Section -->
<section class="bg-gradient-to-br from-gray-50 to-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                </svg>
                Fasilitas & Program
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Fasilitas & Program Unggulan</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-yellow-500 mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                {{ $profile->school_name ?? 'SMAN 1 Nagreg' }} menyediakan berbagai fasilitas modern dan program unggulan untuk mendukung pembelajaran yang berkualitas dan pengembangan potensi siswa.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl p-6 w-20 h-20 mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="h-10 w-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Perpustakaan Digital</h3>
                <p class="text-gray-600 mb-4">Akses ke ribuan buku digital dan sumber pembelajaran online dengan teknologi terbaru.</p>
                <div class="text-sm text-blue-600 font-medium">10,000+ E-Books</div>
            </div>
            
            <div class="group bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-2xl p-6 w-20 h-20 mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Laboratorium Sains</h3>
                <p class="text-gray-600 mb-4">Fasilitas laboratorium modern untuk pembelajaran praktik Fisika, Kimia, dan Biologi.</p>
                <div class="text-sm text-green-600 font-medium">5 Lab Terpisah</div>
            </div>
            
            <div class="group bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl p-6 w-20 h-20 mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="h-10 w-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Ruang Multimedia</h3>
                <p class="text-gray-600 mb-4">Pembelajaran interaktif dengan teknologi multimedia terkini dan akses internet cepat.</p>
                <div class="text-sm text-purple-600 font-medium">Smart Classroom</div>
            </div>
            
            <div class="group bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-yellow-100">
                <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl p-6 w-20 h-20 mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="h-10 w-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Program Adiwiyata</h3>
                <p class="text-gray-600 mb-4">Komitmen terhadap lingkungan hidup dan pembangunan berkelanjutan yang ramah lingkungan.</p>
                <div class="text-sm text-yellow-600 font-medium">Sekolah Hijau</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 left-0 w-64 h-64 bg-yellow-500 rounded-full opacity-10 -translate-x-32 -translate-y-32"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full opacity-5 translate-x-48 translate-y-48"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-8">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            Bergabunglah dengan Kami
        </div>
        
        <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
            Tertarik Bergabung dengan<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                {{ $profile->school_name ?? 'SMAN 1 Nagreg' }}?
            </span>
        </h2>
        
        <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto text-blue-100 leading-relaxed">
            Wujudkan impian masa depan cemerlang bersama kami. Dapatkan informasi lengkap tentang penerimaan siswa baru dan program unggulan yang tersedia.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="{{ route('profile.school') }}" 
               class="group bg-gradient-to-r from-yellow-500 to-yellow-400 hover:from-yellow-600 hover:to-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Info Sekolah
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
            
            <a href="{{ route('news.index') }}" 
               class="group bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 backdrop-blur-sm">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    Berita Terbaru
                    <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-400 mb-2">
                    {{ $profile && $profile->establishment_year ? date('Y') - $profile->establishment_year : '35' }}+
                </div>
                <div class="text-blue-100">Tahun Pengalaman</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-400 mb-2">1000+</div>
                <div class="text-blue-100">Alumni Sukses</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-yellow-400 mb-2">{{ $profile->accreditation_grade ?? 'A' }}</div>
                <div class="text-blue-100">Akreditasi Nasional</div>
            </div>
        </div>
    </div>
</section>
@endsection