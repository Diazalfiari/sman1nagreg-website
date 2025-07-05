<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - {{ config('app.name', 'Laravel') }} - @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Dashboard Navigation -->
    <x-navbar-dashboard />

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Chatbot hanya untuk siswa dan guru -->
    @if(Auth::user()->role !== 'admin')
        @livewire('chatbot')
    @endif

    @livewireScripts
    
    <!-- Additional Scripts Stack -->
    @stack('scripts')
    
    <!-- Dashboard Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dashboard specific interactions
            const navbar = document.querySelector('nav');
            if (navbar) {
                window.addEventListener('scroll', () => {
                    const currentScrollY = window.scrollY;
                    
                    if (currentScrollY > 50) {
                        navbar.classList.add('backdrop-blur-sm', 'bg-white/95');
                        navbar.classList.remove('bg-white');
                    } else {
                        navbar.classList.remove('backdrop-blur-sm', 'bg-white/95');
                        navbar.classList.add('bg-white');
                    }
                });
            }

            // Auto-hide alerts after 5 seconds
            const alerts = document.querySelectorAll('.alert-auto-hide');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease-out';
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alert.remove();
                    }, 500);
                }, 5000);
            });
        });
    </script>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="fixed top-20 right-4 z-50 alert-auto-hide">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg max-w-sm">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-4 w-4 text-green-500 mr-2" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Success!</p>
                        <p class="text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="fixed top-20 right-4 z-50 alert-auto-hide">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg max-w-sm">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-4 w-4 text-red-500 mr-2" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Error!</p>
                        <p class="text-sm">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</body>
</html>