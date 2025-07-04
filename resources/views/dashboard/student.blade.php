@extends('layouts.dashboard')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Dashboard Siswa
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Selamat datang, {{ Auth::user()->name }}
                        @if(Auth::user()->nis_nip)
                            <span class="text-gray-400">• NIS: {{ Auth::user()->nis_nip }}</span>
                        @endif
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        Siswa
                    </span>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Menu Siswa</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Akses cepat ke informasi penting</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            <a href="{{ route('academic.class-schedule') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-blue-50 text-blue-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Jadwal Pelajaran
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Lihat jadwal pelajaran
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('student-affairs.extracurricular') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-green-50 text-green-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Ekstrakurikuler
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Info kegiatan ekstrakurikuler
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('library.gallery') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-yellow-50 text-yellow-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Perpustakaan
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Akses ke perpustakaan digital
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('spmb.info') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-purple-50 text-purple-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Info SPMB
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Informasi penerimaan mahasiswa
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest News -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Berita Terbaru</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi terbaru dari sekolah</p>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        @forelse($latestNews as $news)
                            <li>
                                <div class="px-4 py-4 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $news->title }}</div>
                                            <div class="text-sm text-gray-500">{{ $news->published_at->format('d M Y') }} • {{ $news->author->name }}</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <a href="{{ route('news.show', $news->slug) }}" class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                            Baca
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 text-center text-gray-500">
                                Belum ada berita terbaru
                            </li>
                        @endforelse
                    </ul>
                    @if($latestNews->count() > 0)
                        <div class="px-4 py-3 bg-gray-50 text-right">
                            <a href="{{ route('news.index') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                                Lihat semua berita →
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection