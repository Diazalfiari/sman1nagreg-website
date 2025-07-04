@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Selamat Datang di<br>
                <span class="text-yellow-300">SMAN 1 Nagreg</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Sekolah menengah atas negeri yang berkomitmen memberikan pendidikan berkualitas 
                untuk mempersiapkan generasi masa depan yang unggul dan berkarakter.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('profile.school') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-3 px-8 rounded-lg transition duration-300">
                    Tentang Kami
                </a>
                <a href="{{ route('news.index') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    Berita Terbaru
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">35+</div>
                <div class="text-gray-600">Tahun Berdiri</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">1000+</div>
                <div class="text-gray-600">Alumni</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-gray-600">Guru & Staff</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">600+</div>
                <div class="text-gray-600">Siswa Aktif</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
@if($schoolProfile)
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $schoolProfile->title }}</h2>
                <div class="text-gray-600 mb-6 leading-relaxed">
                    {{ Str::limit($schoolProfile->content, 400) }}
                </div>
                <a href="{{ route('profile.school') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                    Selengkapnya
                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <img src="{{ asset('images/school-building.jpg') }}" alt="SMAN 1 Nagreg" class="rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-blue-600 opacity-10 rounded-lg"></div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- News Section -->
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Ikuti perkembangan terbaru dari SMAN 1 Nagreg melalui berita dan pengumuman resmi.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($latestNews as $news)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    @if($news->image)
                        <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <svg class="h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>{{ $news->published_at->format('d M Y') }}</span>
                            <span class="mx-2">•</span>
                            <span>{{ $news->author->name }}</span>
                        </div>
                        
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            <a href="{{ route('news.show', $news->slug) }}" class="hover:text-blue-600">
                                {{ $news->title }}
                            </a>
                        </h3>
                        
                        <p class="text-gray-600 mb-4">{{ $news->excerpt }}</p>
                        
                        <a href="{{ route('news.show', $news->slug) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                            Baca Selengkapnya
                            <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Belum ada berita terbaru.</p>
                </div>
            @endforelse
        </div>
        
        @if($latestNews->count() > 0)
            <div class="text-center mt-12">
                <a href="{{ route('news.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                    Lihat Semua Berita
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Features Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Fasilitas & Program</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                SMAN 1 Nagreg menyediakan berbagai fasilitas modern dan program unggulan untuk mendukung pembelajaran yang berkualitas.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Perpustakaan Digital</h3>
                <p class="text-gray-600">Akses ke ribuan buku digital dan sumber pembelajaran online.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-green-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Laboratorium Sains</h3>
                <p class="text-gray-600">Fasilitas laboratorium modern untuk pembelajaran praktik.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-purple-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="h-8 w-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Ruang Multimedia</h3>
                <p class="text-gray-600">Pembelajaran interaktif dengan teknologi multimedia terkini.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-yellow-100 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="h-8 w-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Program Adiwiyata</h3>
                <p class="text-gray-600">Komitmen terhadap lingkungan hidup dan pembangunan berkelanjutan.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Tertarik Bergabung dengan SMAN 1 Nagreg?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Dapatkan informasi lengkap tentang penerimaan siswa baru dan program unggulan kami.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('spmb.info') }}" class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300">
                Info SPMB
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>
@endsection