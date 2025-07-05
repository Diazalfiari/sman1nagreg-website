<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Authentication')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Additional CSS for auth pages -->
    <style>
        /* Auth specific styles */
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Remove any potential chatbot related styles */
        .chatbot-container,
        .chatbot-toggle,
        .chatbot-widget {
            display: none !important;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Main Content - No Navigation or Footer for clean auth experience -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    @livewireScripts
    
    <!-- Minimal JavaScript for auth pages -->
    <script>
        // Basic functionality for auth pages only
        document.addEventListener('DOMContentLoaded', function() {
            // Hide any lingering chatbot elements
            const chatbotElements = document.querySelectorAll('.chatbot-container, .chatbot-toggle, .chatbot-widget, [data-chatbot]');
            chatbotElements.forEach(element => {
                element.style.display = 'none';
                element.remove();
            });
            
            // Enhanced form validation for auth pages
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const submitBtn = form.querySelector('button[type="submit"]');
                    if (submitBtn && !submitBtn.disabled) {
                        // Add loading state
                        submitBtn.style.opacity = '0.7';
                        submitBtn.style.pointerEvents = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
