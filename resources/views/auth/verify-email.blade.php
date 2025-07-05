@extends('layouts.auth')

@section('title', 'Verifikasi Email')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Card Container -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-white/20 animate-fade-in">
            <!-- Logo and Header -->
            <div class="text-center">
                <div class="relative">
                    <img class="mx-auto h-20 w-auto animate-bounce-slow" src="{{ asset('storage/images/logo.png') }}" alt="SMAN 1 Nagreg">
                    <div class="absolute inset-0 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 animate-slide-up">
                    Verifikasi Email
                </h2>
                <p class="mt-4 text-center text-sm text-gray-600 leading-relaxed animate-slide-up-delay">
                    Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi alamat email Anda dengan mengklik tautan yang telah kami kirimkan. Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkan yang lain.
                </p>
            </div>

            <!-- Success Message -->
            @if (session('status') == 'verification-link-sent')
                <div class="mt-6 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl shadow-sm animate-slide-down" role="alert">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Link verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
                    </div>
                </div>
            @endif

            <!-- Action Buttons -->
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0 sm:space-x-4">
                <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                    @csrf
                    <button 
                        type="submit" 
                        id="resendBtn"
                        class="group relative w-full sm:w-auto flex justify-center py-3 px-6 border border-transparent text-sm font-medium rounded-xl text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-200 hover:scale-105 hover:shadow-lg"
                        onclick="showLoading(this)"
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-blue-300 group-hover:text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="loading-text">Kirim Ulang Email Verifikasi</span>
                        <span class="loading-spinner hidden">
                            <svg class="animate-spin h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                    @csrf
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto text-sm text-gray-600 hover:text-gray-900 font-medium py-2 px-4 rounded-xl border border-gray-300 hover:border-gray-400 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-200 hover:shadow-sm"
                    >
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up-delay {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-down {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes bounce-slow {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

.animate-fade-in { animation: fade-in 0.6s ease-out; }
.animate-slide-up { animation: slide-up 0.8s ease-out 0.2s both; }
.animate-slide-up-delay { animation: slide-up-delay 0.8s ease-out 0.4s both; }
.animate-slide-down { animation: slide-down 0.5s ease-out; }
.animate-bounce-slow { animation: bounce-slow 3s infinite; }
</style>

<script>
function showLoading(button) {
    const loadingText = button.querySelector('.loading-text');
    const loadingSpinner = button.querySelector('.loading-spinner');
    
    loadingText.classList.add('hidden');
    loadingSpinner.classList.remove('hidden');
    button.disabled = true;
    
    // Re-enable after 3 seconds (in case of network issues)
    setTimeout(() => {
        loadingText.classList.remove('hidden');
        loadingSpinner.classList.add('hidden');
        button.disabled = false;
    }, 3000);
}
</script>
@endsection