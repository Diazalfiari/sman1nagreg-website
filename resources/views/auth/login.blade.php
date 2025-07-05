@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header Section -->
        <div class="text-center">
            <div class="mx-auto h-24 w-24 bg-white rounded-full flex items-center justify-center shadow-xl mb-6 p-3 logo-container ring-4 ring-blue-50">
                <img 
                    src="{{ asset('storage/images/logo.png') }}" 
                    alt="SMAN 1 Nagreg Logo" 
                    class="h-18 w-18 object-contain transition-all duration-300"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                >
                <!-- Fallback icon jika logo tidak ditemukan -->
                <div class="h-18 w-18 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center" style="display: none;">
                    <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                Selamat Datang Kembali
            </h2>
            <p class="text-gray-600 text-sm">
                SMAN 1 Nagreg - Sistem Informasi Sekolah
            </p>
        </div>

        <!-- Login Form -->
        <div class="bg-white py-8 px-6 shadow-xl rounded-xl border border-gray-100 login-form">
            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                            </svg>
                        </div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('email') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                            placeholder="Masukkan email Anda"
                            value="{{ old('email') }}"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                
                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('password') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                            placeholder="Masukkan password Anda"
                        >
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            id="remember_me" 
                            name="remember" 
                            type="checkbox" 
                            value="1"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition duration-200"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700 cursor-pointer">
                            Ingat saya
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-blue-600 hover:text-blue-500 transition duration-200">
                                Lupa password?
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Login Button -->
                <div>
                    <button 
                        type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl"
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-blue-300 group-hover:text-blue-200 transition duration-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Back to Home -->
        <div class="text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center text-blue-600 hover:text-blue-500 text-sm font-medium transition duration-200">
                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<style>
/* Custom animations */
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

.animate-fade-in-up {
    animation: fadeInUp 0.6s ease-out;
}

/* Logo container animation */
@keyframes logoFloat {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    25% {
        transform: translateY(-3px) rotate(1deg);
    }
    50% {
        transform: translateY(-5px) rotate(0deg);
    }
    75% {
        transform: translateY(-3px) rotate(-1deg);
    }
}

@keyframes logoGlow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
    }
    50% {
        box-shadow: 0 0 30px rgba(59, 130, 246, 0.5);
    }
}

.logo-container {
    animation: logoFloat 4s ease-in-out infinite;
    position: relative;
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border: 3px solid rgba(59, 130, 246, 0.1);
}

.logo-container::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #3b82f6, #6366f1, #8b5cf6, #3b82f6);
    border-radius: 50%;
    z-index: -1;
    animation: logoGlow 3s ease-in-out infinite;
    background-size: 400% 400%;
}

.logo-container:hover {
    animation-play-state: paused;
    transform: scale(1.1) translateY(-2px);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 15px 35px rgba(59, 130, 246, 0.4);
}

.logo-container:hover::before {
    animation-play-state: paused;
}

/* Hover effects */
input:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

button:hover {
    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
}

/* Logo styling */
.logo-container img {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
}

.logo-container:hover img {
    filter: drop-shadow(0 8px 16px rgba(0, 0, 0, 0.2)) brightness(1.1);
    transform: scale(1.05);
}

/* Enhanced form styling */
.login-form {
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Input field enhancements */
input[type="email"], input[type="password"] {
    transition: all 0.3s ease;
}

input[type="email"]:focus, input[type="password"]:focus {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15), 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Button enhancement */
button[type="submit"] {
    position: relative;
    overflow: hidden;
}

button[type="submit"]:before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

button[type="submit"]:hover:before {
    left: 100%;
}

/* Checkbox styling */
input[type="checkbox"]:checked {
    background-color: #3b82f6;
    border-color: #3b82f6;
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='m13.854 3.646-7.5 7.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6 10.293l7.146-7.147a.5.5 0 0 1 .708.708z'/%3e%3c/svg%3e");
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .logo-container {
        height: 80px;
        width: 80px;
        animation: none;
    }
    
    .logo-container img {
        height: 60px;
        width: 60px;
    }
}
</style>

<script>
// Add fade-in animation on page load
document.addEventListener('DOMContentLoaded', function() {
    const formContainer = document.querySelector('.max-w-md');
    formContainer.classList.add('animate-fade-in-up');
    
    // Logo click easter egg
    const logoContainer = document.querySelector('.logo-container');
    let clickCount = 0;
    logoContainer.addEventListener('click', function() {
        clickCount++;
        if (clickCount === 5) {
            this.style.animation = 'logoFloat 0.5s ease-in-out 3';
            setTimeout(() => {
                this.style.animation = 'logoFloat 4s ease-in-out infinite';
                clickCount = 0;
            }, 1500);
        }
    });
    
    // Remember me checkbox functionality
    const rememberCheckbox = document.getElementById('remember_me');
    const emailField = document.getElementById('email');
    
    // Load saved email if remember was checked
    if (localStorage.getItem('remember_me') === 'true') {
        const savedEmail = localStorage.getItem('saved_email');
        if (savedEmail) {
            emailField.value = savedEmail;
            rememberCheckbox.checked = true;
        }
    }
    
    // Handle form submission for remember me
    document.querySelector('form').addEventListener('submit', function(e) {
        // Add loading state to button
        const submitBtn = document.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Memproses...
        `;
        submitBtn.disabled = true;
        
        // Remember me logic
        if (rememberCheckbox.checked) {
            localStorage.setItem('remember_me', 'true');
            localStorage.setItem('saved_email', emailField.value);
        } else {
            localStorage.removeItem('remember_me');
            localStorage.removeItem('saved_email');
        }
        
        // Restore button if form validation fails
        setTimeout(() => {
            if (submitBtn.disabled) {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        }, 5000);
    });
    
    // Add focus/blur effects to inputs
    const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endsection