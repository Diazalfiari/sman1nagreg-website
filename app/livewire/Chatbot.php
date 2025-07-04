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

        // For testing purpose, use fallback response first
        try {
            $geminiService = app(GeminiService::class);
            $botResponse = $geminiService->generateResponse($userMessage);
        } catch (\Exception $e) {
            Log::error('Chatbot error: ' . $e->getMessage());
            
            // Use fallback response from GeminiService
            $botResponse = $geminiService->getTestResponse($userMessage);
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