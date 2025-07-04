@extends('layouts.app')

@section('title', 'Lupa Password')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="SMAN 1 Nagreg">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Lupa Password?
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Masukkan email Anda untuk mendapatkan link reset password
                </p>
            </div>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label for="email" class="sr-only">Email</label>
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    autocomplete="email" 
                    required 
                    class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('email') border-red-300 @enderror"
                    placeholder="Email"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button 
                    type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Kirim Link Reset Password
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-500 text-sm">
                    ← Kembali ke Login
                </a>
            </div>
        </form>
    </div>
</div>
@endsection