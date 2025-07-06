<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- School Info -->
            <div class="col-span-1 lg:col-span-2">
                <div class="flex items-center mb-4">
                    <img class="h-10 w-10 mr-3" src="{{ asset('storage/images/logo.png') }}" alt="SMAN 1 Nagreg">
                    <div>
                        <h3 class="text-xl font-bold">SMAN 1 Nagreg</h3>
                        <p class="text-sm text-gray-300">Sekolah Unggul Berkarakter</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-4 leading-relaxed">
                    Sekolah menengah atas negeri yang berkomitmen memberikan pendidikan berkualitas 
                    untuk mempersiapkan generasi masa depan yang unggul, berkarakter, dan berwawasan lingkungan.
                </p>
                
                <!-- Social Media -->
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200" aria-label="Facebook">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200" aria-label="Instagram">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.219-.359-1.219c0-1.142.662-1.995 1.488-1.995.219 0 .359.162.359.359 0 .219-.139.548-.219.852-.179.729.359 1.323 1.062 1.323.629 0 1.142-.219 1.142-.219s.18-.36.18-.9c0-.539-.18-1.439-.18-1.439-.18-.9-.539-1.619-.539-1.619-.359-.719-.539-1.439-.539-1.439 0-.539.18-1.079.18-1.079.539-1.798 1.798-3.237 1.798-3.237 1.439-1.798 3.596-2.876 5.994-2.876 4.671 0 8.447 3.776 8.447 8.447 0 4.671-3.776 8.447-8.447 8.447-1.61 0-3.099-.484-4.330-1.323.000.000-.219-.18-.399-.359-.18-.18-.359-.539-.359-.539-.18-.539-.18-1.079-.18-1.079 0-.539.18-.9.18-.9.359-.719.539-1.439.539-1.439.18-.719.359-1.619.359-1.619.539-2.696 1.618-5.034 1.618-5.034 1.079-2.336 2.696-4.132 2.696-4.132 1.618-1.798 3.596-2.876 5.994-2.876z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200" aria-label="YouTube">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200" aria-label="Twitter">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Navigasi Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Beranda</a></li>
                    <li><a href="{{ route('profile.school') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Profil Sekolah</a></li>
                    <li><a href="{{ route('news.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Berita</a></li>
                    <li><a href="{{ route('academic.class-schedule') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Jadwal Pelajaran</a></li>
                    <li><a href="{{ route('student-affairs.extracurricular') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Ekstrakurikuler</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Kontak</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Jl. Raya Nagreg No. 123<br>Nagreg, Bandung 40376<br>Jawa Barat</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5                         <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(022) 123-4567</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>info@sman1nagreg.sch.id</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-5 w-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                        <span>www.sman1nagreg.sch.id</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Useful Links Section -->
        <div class="border-t border-gray-700 mt-8 pt-8">
            <h4 class="text-lg font-semibold mb-4">Link Berguna</h4>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <a href="https://kemdikbud.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">Kemdikbud</a>
                <a href="https://disdik.jabarprov.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">Disdik Jabar</a>
                <a href="https://spmb.jabarprov.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">SPMB Jabar</a>
                <a href="https://buku.kemdikbud.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">SIBI</a>
                <a href="https://gtk.kemdikbud.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">Info GTK</a>
                <a href="https://nisn.data.kemdikbud.go.id/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-200 text-sm">Cek NISN</a>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} SMAN 1 Nagreg. All rights reserved.
                </p>
                
            </div>
            <div class="mt-4 md:mt-0 flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Terms of Service</a>
                <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-200">Contact Us</a>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <div class="fixed bottom-20 right-4 z-40" x-data="{ show: false }" @scroll.window="show = window.pageYOffset > 300">
        <button 
            x-show="show" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110"
            aria-label="Back to top"
        >
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    </div>
</footer>