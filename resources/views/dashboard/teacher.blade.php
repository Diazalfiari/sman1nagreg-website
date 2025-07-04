@extends('layouts.dashboard')

@section('title', 'Dashboard Guru')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Dashboard Guru
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Selamat datang, {{ Auth::user()->name }}
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                        Guru
                    </span>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Menu Cepat</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Akses cepat ke fitur-fitur guru</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
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
                                        Jadwal Mengajar
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Lihat jadwal mengajar hari ini
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-green-50 text-green-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Materi Pembelajaran
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Upload dan kelola materi
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-yellow-50 text-yellow-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Penilaian
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Input nilai siswa
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My News -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Berita Saya</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Berita yang telah Anda tulis</p>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        @forelse($myNews as $news)
                            <li>
                                <div class="px-4 py-4 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $news->status === 'published' ? 'green' : 'yellow' }}-100 text-{{ $news->status === 'published' ? 'green' : 'yellow' }}-800">
                                                {{ ucfirst($news->status) }}
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $news->title }}</div>
                                            <div class="text-sm text-gray-500">{{ $news->created_at->format('d M Y H:i') }}</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        @if($news->status === 'published')
                                            <a href="{{ route('news.show', $news->slug) }}" class="text-blue-600 hover:text-blue-900 text-sm font-medium mr-3">
                                                Lihat
                                            </a>
                                        @endif
                                        <a href="#" class="text-gray-600 hover:text-gray-900 text-sm font-medium">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 text-center text-gray-500">
                                Belum ada berita yang ditulis
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection