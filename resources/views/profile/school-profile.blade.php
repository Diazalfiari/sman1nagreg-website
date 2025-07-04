@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
<div class="bg-white">
    <!-- Header -->
    <div class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Profil SMAN 1 Nagreg</h1>
                <p class="text-xl opacity-90">Mengenal lebih dekat sekolah kami</p>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($profile)
            <div class="prose prose-lg max-w-none">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ $profile->title }}</h2>
                        <div class="text-gray-600 leading-relaxed">
                            {!! nl2br(e($profile->content)) !!}
                        </div>
                    </div>
                    <div>
                        @if($profile->image)
                            <img src="{{ Storage::url($profile->image) }}" alt="{{ $profile->title }}" class="rounded-lg shadow-lg">
                        @else
                            <div class="bg-gray-200 rounded-lg aspect-video flex items-center justify-center">
                                <svg class="h-24 w-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500">Informasi profil sekolah sedang dalam proses pembaruan.</p>
            </div>
        @endif

        <!-- Quick Info -->
        <div class="bg-gray-50 rounded-lg p-8 mt-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Cepat</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Alamat</h4>
                    <p class="text-gray-600">Jl. Raya Nagreg No. 123<br>Nagreg, Bandung 40376</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Kontak</h4>
                    <p class="text-gray-600">Telp: (022) 123-4567<br>Email: info@sman1nagreg.sch.id</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Status</h4>
                    <p class="text-gray-600">Sekolah Menengah Atas Negeri<br>Terakreditasi A</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Tahun Berdiri</h4>
                    <p class="text-gray-600">1985</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection