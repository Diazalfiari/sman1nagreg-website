@extends('layouts.app')

@section('title', 'Konfirmasi Password')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo.png') }}" alt="SMAN 1 Nagreg">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Konfirmasi Password
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Silakan konfirmasi password Anda sebelum melanjutkan
                </p>
            </div>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <label for="password" class="sr-only">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    autocomplete="current-password" 
                    required 
                    class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border-red-300 @enderror"
                    placeholder="Password"
                >
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button 
                    type="submit" 
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Konfirmasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection