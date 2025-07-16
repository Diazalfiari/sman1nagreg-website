<?php

namespace App\Livewire;

use App\Services\GeminiService;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class Chatbot extends Component
{
    public $messages = [];
    public $message = '';
    public $isOpen = false;
    
    #[Reactive]
    public $isLoading = false;

    protected $rules = [
        'message' => 'required|string|max:500',
    ];

    public function mount()
    {
        $this->messages = [
            [
                'type' => 'bot', 
                'content' => 'Halo! Saya adalah chatbot SMAN 1 Nagreg. Saya siap membantu Anda dengan informasi tentang sekolah kami. Ada yang bisa saya bantu?',
                'timestamp' => now()->format('H:i')
            ]
        ];
    }

    public function sendMessage()
    {
        // Don't proceed if message is empty after trimming
        if (empty(trim($this->message))) {
            return;
        }

        $this->validate();

        // Store user message before clearing input
        $userMessage = trim($this->message);
        
        // Add user message to messages array
        $this->messages[] = [
            'type' => 'user', 
            'content' => $userMessage,
            'timestamp' => now()->format('H:i')
        ];
        
        // Clear the input immediately and set loading state
        $this->message = '';
        $this->isLoading = true;
        
        // Log for debugging
        Log::info('Chatbot: Loading state set to true, isLoading = ' . ($this->isLoading ? 'true' : 'false'));
        
        // Dispatch browser event for immediate UI update
        $this->dispatch('typing-started');

        // Get bot response with simulated delay
        $this->processTypingAndResponse($userMessage);
    }

    public function processTypingAndResponse($userMessage)
    {
        // Add typing delay (1-3 seconds)
        $typingDelay = rand(1, 3);
        Log::info('Chatbot: Sleeping for ' . $typingDelay . ' seconds');
        sleep($typingDelay);

        try {
            $geminiService = app(GeminiService::class);
            $botResponse = $geminiService->generateResponse($userMessage);
            
            Log::info('Chatbot: Response generated successfully');
            
        } catch (\Exception $e) {
            Log::error('Chatbot error: ' . $e->getMessage());
            
            // Use manual fallback response
            $botResponse = $this->getManualFallbackResponse($userMessage);
        }
        
        // Add bot response
        $this->messages[] = [
            'type' => 'bot', 
            'content' => $botResponse,
            'timestamp' => now()->format('H:i')
        ];
        
        $this->isLoading = false;
        Log::info('Chatbot: Loading state set to false, isLoading = ' . ($this->isLoading ? 'true' : 'false'));
        
        // Dispatch browser event for UI cleanup
        $this->dispatch('typing-finished');
    }

    private function getManualFallbackResponse($message): string
    {
        $message = strtolower($message);
        
        // Respons berdasarkan kata kunci
        if (str_contains($message, 'profil') || str_contains($message, 'sejarah') || str_contains($message, 'tentang')) {
            return 'SMAN 1 Nagreg adalah sekolah menengah atas negeri yang didirikan pada tahun 1985 di Nagreg, Kabupaten Bandung. Kami berkomitmen memberikan pendidikan berkualitas tinggi dengan fasilitas modern dan tenaga pengajar yang kompeten. Sekolah kami terakreditasi A dan memiliki program IPA, IPS, dan Bahasa.';
        }
        
        if (str_contains($message, 'alamat') || str_contains($message, 'lokasi') || str_contains($message, 'dimana')) {
            return 'SMAN 1 Nagreg berlokasi di Jl. Raya Nagreg No. 123, Nagreg, Bandung 40376, Jawa Barat. Anda dapat menghubungi kami di telepon (022) 123-4567 atau email info@sman1nagreg.sch.id.';
        }
        
        if (str_contains($message, 'pendaftaran') || str_contains($message, 'spmb') || str_contains($message, 'daftar')) {
            return 'Informasi pendaftaran siswa baru (SPMB) dapat Anda akses melalui website resmi Dinas Pendidikan Jawa Barat. Anda juga bisa mengunjungi halaman SPMB di website kami untuk informasi lebih detail.';
        }
        
        if (str_contains($message, 'ekstrakurikuler') || str_contains($message, 'ekskul') || str_contains($message, 'kegiatan')) {
            return 'SMAN 1 Nagreg memiliki berbagai ekstrakurikuler yang menarik seperti Pramuka, OSIS, Rohani Islam (Rohis), Olahraga (sepak bola, basket, voli), Seni (tari, musik, teater), Jurnalistik, dan masih banyak lagi.';
        }
        
        if (str_contains($message, 'fasilitas') || str_contains($message, 'laboratorium') || str_contains($message, 'perpustakaan')) {
            return 'Fasilitas SMAN 1 Nagreg meliputi: perpustakaan digital dengan akses ke ribuan buku online, laboratorium sains (kimia, fisika, biologi), ruang multimedia untuk pembelajaran interaktif, laboratorium komputer, ruang kelas ber-AC, lapangan olahraga, dan program Adiwiyata untuk pendidikan lingkungan hidup.';
        }
        
        // Respons default
        return 'Terima kasih atas pertanyaan Anda tentang SMAN 1 Nagreg. Untuk informasi lebih detail, silakan kunjungi halaman terkait di website kami atau hubungi langsung ke sekolah di (022) 123-4567. Apakah ada hal lain tentang SMAN 1 Nagreg yang ingin Anda ketahui?';
    }

    public function toggleChat()
    {
        $this->isOpen = !$this->isOpen;
        
        // Dispatch event for JavaScript to handle focus
        if ($this->isOpen) {
            $this->dispatch('chatToggled');
        }
    }

    public function clearChat()
    {
        $this->messages = [
            [
                'type' => 'bot', 
                'content' => 'Chat telah dibersihkan. Ada yang bisa saya bantu?',
                'timestamp' => now()->format('H:i')
            ]
        ];
    }

    public function render()
    {
        return view('livewire.chatbot');
    }
}