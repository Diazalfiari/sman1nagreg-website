@extends('layouts.app')

@section('title', 'OSIS')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in-up">
                    OSIS SMAN 1 Nagreg
                </h1>
                <p class="text-xl text-purple-100 max-w-3xl mx-auto animate-fade-in-up animation-delay-200">
                    Organisasi Siswa Intra Sekolah periode 2024/2025
                </p>
                <div class="mt-8 animate-fade-in-up animation-delay-400">
                    <span class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-medium">
                        "Bersama Membangun Generasi Cerdas dan Berkarakter"
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
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">Kesiswaan</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 sm:w-6 sm:h-6 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 sm:ml-2 font-medium text-gray-500">OSIS</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Leadership Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pengurus OSIS Periode 2024/2025</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Tim kepemimpinan siswa yang berkomitmen memajukan kehidupan berorganisasi di SMAN 1 Nagreg
                </p>
            </div>

            <!-- Core Leadership -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Ketua OSIS -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative">
                        <div class="h-32 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                        <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 bg-gray-300 rounded-full border-4 border-white overflow-hidden">
                                <img src="{{ asset('images/osis/ketua.jpg') }}" alt="Ketua OSIS" class="w-full h-full object-cover" 
                                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                            </div>
                        </div>
                    </div>
                    <div class="pt-20 pb-8 px-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ahmad Fadhil Rahman</h3>
                        <p class="text-indigo-600 font-semibold mb-4">Ketua OSIS</p>
                        <p class="text-gray-600 text-sm mb-4">Kelas XI MIPA 2</p>
                        <p class="text-gray-500 text-sm italic">
                            "Memimpin dengan hati, melayani dengan dedikasi"
                        </p>
                    </div>
                </div>

                <!-- Wakil Ketua -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative">
                        <div class="h-32 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                        <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 bg-gray-300 rounded-full border-4 border-white overflow-hidden">
                                <img src="{{ asset('images/osis/wakil.jpg') }}" alt="Wakil Ketua OSIS" class="w-full h-full object-cover" 
                                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                            </div>
                        </div>
                    </div>
                    <div class="pt-20 pb-8 px-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Siti Nurhaliza Putri</h3>
                        <p class="text-purple-600 font-semibold mb-4">Wakil Ketua OSIS</p>
                        <p class="text-gray-600 text-sm mb-4">Kelas XI IPS 1</p>
                        <p class="text-gray-500 text-sm italic">
                            "Bersama membangun mimpi, mencapai prestasi"
                        </p>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative">
                        <div class="h-32 bg-gradient-to-r from-green-500 to-blue-600"></div>
                        <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2">
                            <div class="w-32 h-32 bg-gray-300 rounded-full border-4 border-white overflow-hidden">
                                <img src="{{ asset('images/osis/sekretaris.jpg') }}" alt="Sekretaris OSIS" class="w-full h-full object-cover" 
                                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iNjQiIGN5PSI2NCIgcj0iNjQiIGZpbGw9IiNEMUQ1REIiLz48Y2lyY2xlIGN4PSI2NCIgY3k9IjQ4IiByPSIyMCIgZmlsbD0iIzk5QTNBRiIvPjxwYXRoIGQ9Ik0yMCAxMDBjMC0yNC4zIDIwLjctNDQgNDQtNDRzNDQgMTkuNyA0NCA0NCIgZmlsbD0iIzk5QTNBRiIvPjwvc3ZnPg=='">
                            </div>
                        </div>
                    </div>
                    <div class="pt-20 pb-8 px-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Devi Anggraeni</h3>
                        <p class="text-green-600 font-semibold mb-4">Sekretaris</p>
                        <p class="text-gray-600 text-sm mb-4">Kelas XI MIPA 1</p>
                        <p class="text-gray-500 text-sm italic">
                            "Dokumentasi adalah sejarah masa depan"
                        </p>
                    </div>
                </div>
            </div>

            <!-- Department Heads -->
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-indigo-50 border-b border-indigo-200">
                    <h3 class="text-lg font-semibold text-indigo-900">Koordinator Bidang</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                    @php
                    $koordinators = [
                        [
                            'name' => 'Budi Santoso',
                            'position' => 'Ketua Bidang Pendidikan',
                            'class' => 'XI MIPA 3',
                            'color' => 'blue'
                        ],
                        [
                            'name' => 'Rina Safitri',
                            'position' => 'Ketua Bidang Olahraga',
                            'class' => 'XI IPS 2',
                            'color' => 'green'
                        ],
                        [
                            'name' => 'Arif Wibowo',
                            'position' => 'Ketua Bidang Seni & Budaya',
                            'class' => 'XI MIPA 2',
                            'color' => 'purple'
                        ],
                        [
                            'name' => 'Maya Sari',
                            'position' => 'Ketua Bidang Sosial',
                            'class' => 'XI IPS 1',
                            'color' => 'pink'
                        ],
                        [
                            'name' => 'Reza Pratama',
                            'position' => 'Ketua Bidang Keagamaan',
                            'class' => 'XI MIPA 1',
                            'color' => 'yellow'
                        ],
                        [
                            'name' => 'Lestari Indah',
                            'position' => 'Ketua Bidang Lingkungan',
                            'class' => 'XI IPS 2',
                            'color' => 'teal'
                        ]
                    ];
                    @endphp

                    @foreach($koordinators as $koordinator)
                    <div class="bg-{{ $koordinator['color'] }}-50 border border-{{ $koordinator['color'] }}-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-{{ $koordinator['color'] }}-100 rounded-full flex items-center justify-center">
                                <span class="text-{{ $koordinator['color'] }}-600 font-bold text-lg">
                                    {{ substr($koordinator['name'], 0, 1) }}
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-{{ $koordinator['color'] }}-900">{{ $koordinator['name'] }}</h4>
                                <p class="text-sm text-{{ $koordinator['color'] }}-700">{{ $koordinator['position'] }}</p>
                                <p class="text-xs text-{{ $koordinator['color'] }}-600">{{ $koordinator['class'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Programs Section -->
        <div class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Program Kerja OSIS</h2>
                <p class="text-lg text-gray-600">Program unggulan untuk kemajuan siswa dan sekolah</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $programs = [
                    [
                        'title' => 'Festival Seni & Budaya',
                        'description' => 'Ajang kreativitas siswa dalam bidang seni, musik, tari, dan sastra',
                        'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                        'color' => 'purple',
                        'status' => 'Berlangsung'
                    ],
                    [
                        'title' => 'Kompetisi Olahraga Antar Kelas',
                        'description' => 'Turnamen olahraga untuk mempererat persaudaraan dan sportivitas',
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'color' => 'green',
                        'status' => 'Perencanaan'
                    ],
                    [
                        'title' => 'Bakti Sosial Ramadhan',
                        'description' => 'Kegiatan berbagi dengan masyarakat kurang mampu di bulan suci',
                        'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                        'color' => 'pink',
                        'status' => 'Selesai'
                    ],
                    [
                        'title' => 'Workshop Kepemimpinan',
                        'description' => 'Pelatihan soft skill dan leadership untuk siswa berprestasi',
                        'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z',
                        'color' => 'blue',
                        'status' => 'Berlangsung'
                    ],
                    [
                        'title' => 'Seminar Motivasi',
                        'description' => 'Mendatangkan motivator untuk menginspirasi siswa meraih cita-cita',
                        'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                        'color' => 'yellow',
                        'status' => 'Perencanaan'
                    ],
                    [
                        'title' => 'Gerakan Sekolah Hijau',
                        'description' => 'Program pelestarian lingkungan dan penghijauan area sekolah',
                        'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                        'color' => 'teal',
                        'status' => 'Berlangsung'
                    ]
                ];
                @endphp

                @foreach($programs as $program)
                <div class="bg-white rounded-lg shadow-sm border hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-{{ $program['color'] }}-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-{{ $program['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $program['icon'] }}"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                @php
                                $statusColors = [
                                    'Berlangsung' => 'bg-green-100 text-green-800',
                                    'Perencanaan' => 'bg-yellow-100 text-yellow-800',
                                    'Selesai' => 'bg-gray-100 text-gray-800'
                                ];
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusColors[$program['status']] }}">
                                    {{ $program['status'] }}
                                </span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $program['title'] }}</h3>
                        <p class="text-gray-600 text-sm">{{ $program['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Achievements Section -->
        <div class="mb-16">
            <div class="bg-white rounded-lg shadow-sm border overflow-hidden">
                <div class="px-6 py-4 bg-gradient-to-r from-indigo-50 to-purple-50 border-b">
                    <h3 class="text-lg font-semibold text-gray-900">Prestasi OSIS 2024/2025</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php
                        $achievements = [
                            [
                                'title' => 'Juara 1 Lomba OSIS Terbaik Tingkat Kabupaten',
                                'date' => 'Maret 2025',
                                'description' => 'Meraih prestasi tertinggi dalam kompetisi organisasi siswa se-Kabupaten Bandung',
                                'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'
                            ],
                            [
                                'title' => 'Penghargaan Sekolah Adiwiyata',
                                'date' => 'Februari 2025',
                                'description' => 'Kontribusi dalam program lingkungan hidup yang berkelanjutan',
                                'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
                            ],
                            [
                                'title' => 'Bantuan Sosial Terbanyak',
                                'date' => 'Januari 2025',
                                'description' => 'Mengumpulkan donasi terbanyak untuk korban bencana alam',
                                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
                            ],
                            [
                                'title' => 'Event Terbaik Festival Remaja',
                                'date' => 'Desember 2024',
                                'description' => 'Penyelenggaraan acara yang dinilai paling kreatif dan berkesan',
                                'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'
                            ]
                        ];
                        @endphp

                        @foreach($achievements as $achievement)
                        <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $achievement['icon'] }}"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-gray-900 mb-1">{{ $achievement['title'] }}</h4>
                                <p class="text-sm text-gray-600 mb-2">{{ $achievement['description'] }}</p>
                                <span class="text-xs text-gray-500">{{ $achievement['date'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg border p-6">
            <div class="text-center mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Hubungi OSIS</h3>
                <p class="text-gray-600">Punya ide, saran, atau ingin bergabung? Kontak kami!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Email</h4>
                    <p class="text-sm text-gray-600">osis@sman1nagreg.sch.id</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Lokasi</h4>
                    <p class="text-sm text-gray-600">Ruang OSIS Lantai 2</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gray-900 mb-1">Jam Buka</h4>
                    <p class="text-sm text-gray-600">Sen-Jum: 07:00-15:00</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection