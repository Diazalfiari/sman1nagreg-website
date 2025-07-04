<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Beranda')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <x-navbar />

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Chatbot -->
    @livewire('chatbot')

    @livewireScripts
    
    <!-- Enhanced JavaScript -->
    <script>
        // Enhanced smooth scrolling
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Enhanced navbar scroll behavior
            const navbar = document.querySelector('nav');
            if (navbar) {
                let lastScrollY = window.scrollY;
                
                window.addEventListener('scroll', () => {
                    const currentScrollY = window.scrollY;
                    
                    if (currentScrollY > 100) {
                        navbar.classList.add('backdrop-blur-md', 'bg-white/95');
                        navbar.classList.remove('bg-white');
                    } else {
                        navbar.classList.remove('backdrop-blur-md', 'bg-white/95');
                        navbar.classList.add('bg-white');
                    }
                    
                    lastScrollY = currentScrollY;
                });
            }
        });

        // Close mobile menu when clicking on a link
        document.addEventListener('click', function(e) {
            if (e.target.matches('a[href]') && window.innerWidth < 1024) {
                // Find and close mobile menu
                const mobileMenus = document.querySelectorAll('[x-data*="open"]');
                mobileMenus.forEach(menu => {
                    if (menu.__x && menu.__x.$data.open) {
                        menu.__x.$data.open = false;
                    }
                });
            }
        });
    </script>

    <!-- Custom Styles for Enhanced Experience -->
    <style>
        /* Smooth transitions */
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        
        /* Enhanced backdrop blur */
        .backdrop-blur-md {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Loading animation */
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</body>
</html>