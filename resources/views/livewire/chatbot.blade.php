<div class="fixed bottom-4 right-4 z-50" wire:key="chatbot-container">
    <!-- Chat Toggle Button -->
    <button 
        wire:click="toggleChat"
        class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 relative z-10"
    >
        @if($isOpen)
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        @else
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        @endif
    </button>

    <!-- Chat Window -->
    @if($isOpen)
        <div class="absolute bottom-20 right-0 w-80 sm:w-96 h-96 sm:h-[500px] bg-white rounded-lg shadow-xl border animate-fade-in-up max-w-[calc(100vw-2rem)] max-h-[calc(100vh-8rem)]" 
             wire:key="chat-window" 
             style="z-index: 40;">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white p-4 rounded-t-lg flex justify-between items-center">
                <div>
                    <h3 class="font-semibold">Chatbot SMAN 1 Nagreg</h3>
                    <p class="text-xs opacity-90">Online - Siap membantu</p>
                </div>
                <div class="flex space-x-2">
                    <button 
                        wire:click="clearChat" 
                        class="text-white hover:text-gray-200 transition-colors"
                        title="Bersihkan chat"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                    <button 
                        wire:click="toggleChat" 
                        class="text-white hover:text-gray-200 transition-colors"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Messages -->
            <div class="flex-1 p-4 overflow-y-auto bg-gray-50" id="chatMessages" wire:key="chat-messages" style="height: calc(100% - 140px);">
                @foreach($messages as $index => $msg)
                    <div class="mb-4 {{ $msg['type'] === 'user' ? 'text-right' : 'text-left' }}" wire:key="message-{{ $index }}">
                        <div class="inline-block max-w-xs">
                            <div class="px-3 py-2 rounded-lg text-sm {{ $msg['type'] === 'user' ? 'bg-blue-600 text-white rounded-br-none' : 'bg-white text-gray-800 border rounded-bl-none shadow-sm' }}">
                                {{ $msg['content'] }}
                            </div>
                            <div class="text-xs text-gray-500 mt-1 {{ $msg['type'] === 'user' ? 'text-right' : 'text-left' }}">
                                {{ $msg['timestamp'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <!-- Loading/Typing indicator -->
                @if($isLoading)
                    <div class="text-left mb-4 typing-indicator" wire:key="typing-indicator" id="typingIndicator">
                        <div class="inline-block bg-white text-gray-800 border rounded-lg rounded-bl-none shadow-sm px-4 py-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce"></div>
                                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                                </div>
                                <span class="text-xs text-gray-600 italic">Chatbot sedang mengetik...</span>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 mt-1 text-left">
                            {{ now()->format('H:i') }}
                        </div>
                    </div>
                @endif
                
                <!-- Manual typing indicator (fallback jika Livewire gagal) -->
                <div class="text-left mb-4 typing-indicator-manual" id="typingIndicatorManual" style="display: none;">
                    <div class="inline-block bg-white text-gray-800 border rounded-lg rounded-bl-none shadow-sm px-4 py-3">
                        <div class="flex items-center space-x-3">
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce"></div>
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                            </div>
                            <span class="text-xs text-gray-600 italic">Chatbot sedang mengetik...</span>
                        </div>
                    </div>
                    <div class="text-xs text-gray-500 mt-1 text-left" id="typingTime">
                        {{ now()->format('H:i') }}
                    </div>
                </div>
                
                <!-- Debug info (hapus saat production) -->
                {{-- <div class="text-xs text-gray-400 p-2">
                    Debug: isLoading = {{ $isLoading ? 'true' : 'false' }}
                    <br>Message value = "{{ $message }}"
                </div> --}}
            </div>

            <!-- Input -->
            <div class="border-t bg-white p-3 rounded-b-lg">
                <form wire:submit.prevent="sendMessage" class="flex space-x-2">
                    <input 
                        type="text" 
                        wire:model.defer="message"
                        placeholder="Ketik pesan Anda..." 
                        class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                        {{ $isLoading ? 'disabled' : '' }}
                        maxlength="500"
                        id="chatInput"
                    >                    <button 
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 text-white px-4 py-2 rounded-lg transition-colors"
                        {{ $isLoading ? 'disabled' : '' }}
                    >
                        @if($isLoading)
                            <svg class="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        @else
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        @endif
                    </button>
                </form>
                <div class="text-xs text-gray-500 mt-2 text-center">
                    Powered by AI • SMAN 1 Nagreg
                </div>
                @error('message')
                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
    @endif

    <style>
        .animate-fade-in-up {
            animation: fadeInUp 0.3s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Enhanced typing animation */
        .animate-bounce {
            animation: bounce 1.4s infinite ease-in-out;
        }

        @keyframes bounce {
            0%, 80%, 100% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Typing indicator specific styles */
        .typing-indicator {
            animation: typingFade 0.3s ease-in;
        }

        @keyframes typingFade {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

    <script>
        document.addEventListener('livewire:init', function () {
            console.log('Chatbot: Livewire initialized');
            
            // Handle chat updates and auto-scroll
            Livewire.hook('morph.updated', ({ el, component }) => {
                if (component.name === 'chatbot') {
                    console.log('Chatbot: Component updated');
                    const chatMessages = document.getElementById('chatMessages');
                    if (chatMessages) {
                        // Smooth scroll to bottom
                        setTimeout(() => {
                            chatMessages.scrollTo({
                                top: chatMessages.scrollHeight,
                                behavior: 'smooth'
                            });
                        }, 50);
                    }
                    
                    // Focus input when not loading
                    const messageInput = document.getElementById('chatInput');
                    if (messageInput && !messageInput.disabled) {
                        setTimeout(() => {
                            messageInput.focus();
                        }, 100);
                    }
                }
            });

            // Handle chat window opening
            Livewire.on('chatToggled', () => {
                setTimeout(() => {
                    const messageInput = document.getElementById('chatInput');
                    if (messageInput) {
                        messageInput.focus();
                    }
                }, 200);
            });

            // Handle typing started
            Livewire.on('typing-started', () => {
                console.log('Chatbot: Typing started event received');
                const typingIndicator = document.getElementById('typingIndicatorManual');
                const timeElement = document.getElementById('typingTime');
                if (typingIndicator) {
                    typingIndicator.style.display = 'block';
                    if (timeElement) {
                        const now = new Date();
                        timeElement.textContent = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
                    }
                }
                
                // Auto-scroll to show typing indicator
                setTimeout(() => {
                    const chatMessages = document.getElementById('chatMessages');
                    if (chatMessages) {
                        chatMessages.scrollTo({
                            top: chatMessages.scrollHeight,
                            behavior: 'smooth'
                        });
                    }
                }, 100);
            });

            // Handle typing finished
            Livewire.on('typing-finished', () => {
                console.log('Chatbot: Typing finished event received');
                const typingIndicator = document.getElementById('typingIndicatorManual');
                if (typingIndicator) {
                    typingIndicator.style.display = 'none';
                }
                
                // Focus input
                setTimeout(() => {
                    const messageInput = document.getElementById('chatInput');
                    if (messageInput) {
                        messageInput.focus();
                    }
                }, 100);
            });

            // Handle form submission with manual typing indicator
            document.addEventListener('submit', function(e) {
                const form = e.target;
                if (form.querySelector('#chatInput')) {
                    console.log('Chatbot: Form submitted');
                    const messageInput = document.getElementById('chatInput');
                    
                    if (messageInput && messageInput.value.trim() !== '') {
                        // Show manual typing indicator immediately
                        const typingIndicator = document.getElementById('typingIndicatorManual');
                        const timeElement = document.getElementById('typingTime');
                        if (typingIndicator) {
                            typingIndicator.style.display = 'block';
                            if (timeElement) {
                                const now = new Date();
                                timeElement.textContent = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
                            }
                        }
                        
                        // Clear input manually
                        setTimeout(() => {
                            messageInput.value = '';
                            messageInput.focus();
                        }, 200);
                        
                        // Auto-scroll
                        setTimeout(() => {
                            const chatMessages = document.getElementById('chatMessages');
                            if (chatMessages) {
                                chatMessages.scrollTo({
                                    top: chatMessages.scrollHeight,
                                    behavior: 'smooth'
                                });
                            }
                        }, 300);
                    }
                }
            });

            // Handle enter key for chat input
            document.addEventListener('keydown', function(e) {
                const messageInput = document.getElementById('chatInput');
                if (e.target === messageInput && e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    console.log('Chatbot: Enter key pressed');
                    if (messageInput.value.trim() !== '' && !messageInput.disabled) {
                        // Show typing indicator immediately
                        const typingIndicator = document.getElementById('typingIndicatorManual');
                        const timeElement = document.getElementById('typingTime');
                        if (typingIndicator) {
                            typingIndicator.style.display = 'block';
                            if (timeElement) {
                                const now = new Date();
                                timeElement.textContent = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
                            }
                        }
                        
                        messageInput.closest('form').requestSubmit();
                    }
                }
            });
        });

        // Auto scroll observer for typing indicator
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Chatbot: DOM loaded');
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        const chatMessages = document.getElementById('chatMessages');
                        if (chatMessages) {
                            const typingIndicator = chatMessages.querySelector('.typing-indicator, .typing-indicator-manual[style*="block"]');
                            if (typingIndicator) {
                                setTimeout(() => {
                                    chatMessages.scrollTo({
                                        top: chatMessages.scrollHeight,
                                        behavior: 'smooth'
                                    });
                                }, 100);
                            }
                        }
                    }
                });
            });

            const chatContainer = document.getElementById('chatMessages');
            if (chatContainer) {
                observer.observe(chatContainer, {
                    childList: true,
                    subtree: true
                });
            }
        });
    </script>
</div>
