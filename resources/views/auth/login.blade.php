@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header Section -->
        <div class="text-center">
            <div class="mx-auto h-20 w-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center shadow-lg mb-6">
                <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                Selamat Datang Kembali
            </h2>
            <p class="text-gray-600 text-sm">
                SMAN 1 Nagreg - Sistem Informasi Sekolah
            </p>
        </div>

        <!-- Login Form -->
        <div class="bg-white py-8 px-6 shadow-xl rounded-xl border border-gray-100">
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

/* Hover effects */
input:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

button:hover {
    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
}
</style>

<script>
// Add fade-in animation on page load
document.addEventListener('DOMContentLoaded', function() {
    const formContainer = document.querySelector('.max-w-md');
    formContainer.classList.add('animate-fade-in-up');
    
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
    document.querySelector('form').addEventListener('submit', function() {
        if (rememberCheckbox.checked) {
            localStorage.setItem('remember_me', 'true');
            localStorage.setItem('saved_email', emailField.value);
        } else {
            localStorage.removeItem('remember_me');
            localStorage.removeItem('saved_email');
        }
    });
});
</script>
@endsection