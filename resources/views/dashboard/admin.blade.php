@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Dashboard Administrator
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Selamat datang, {{ Auth::user()->name }}
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        Admin
                    </span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $stats['total_users'] }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Guru</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $stats['total_teachers'] }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Siswa</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $stats['total_students'] }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Berita</dt>
                                    <dd class="text-lg font-medium text-gray-900">{{ $stats['total_news'] }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent News -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Berita Terbaru</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Daftar berita yang baru dipublikasikan</p>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        @forelse($recentNews as $news)
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
                                        <a href="{{ route('news.show', $news->slug) }}" class="text-blue-600 hover:text-blue-900 text-sm font-medium">
                                            Lihat
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-4 text-center text-gray-500">
                                Belum ada berita
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Aksi Cepat</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Akses cepat ke fitur-fitur utama</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            <a href="{{ route('admin.news.create') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-blue-50 text-blue-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Tambah Berita
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Buat artikel berita baru
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('admin.news.index') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
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
                                        Kelola Berita
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Manage artikel dan publikasi
                                    </p>
                                </div>
                            </a>

                            <a href="{{ route('profile.school') }}" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-yellow-50 text-yellow-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Edit Profil Sekolah
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Update informasi sekolah
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500 rounded-lg border border-gray-300 hover:border-blue-300">
                                <div>
                                    <span class="rounded-lg inline-flex p-3 bg-purple-50 text-purple-700 ring-4 ring-white">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <h3 class="text-lg font-medium">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        Laporan
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Lihat statistik dan laporan
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection