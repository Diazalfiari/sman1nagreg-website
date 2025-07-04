<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Test GeminiService
try {
    $geminiService = app(App\Services\GeminiService::class);
    echo "✓ GeminiService loaded successfully!\n";
    
    // Test fallback response
    $response = $geminiService->generateResponse("Halo, apa itu SMAN 1 Nagreg?");
    echo "✓ Response received: " . substr($response, 0, 100) . "...\n";
    
} catch (Exception $e) {
    echo "✗ Error loading GeminiService: " . $e->getMessage() . "\n";
}

// Test Chatbot component
try {
    $chatbot = new App\Livewire\Chatbot();
    echo "✓ Chatbot component created successfully!\n";
    
    $chatbot->mount();
    echo "✓ Chatbot mounted with " . count($chatbot->messages) . " initial messages\n";
    
} catch (Exception $e) {
    echo "✗ Error with Chatbot component: " . $e->getMessage() . "\n";
}

echo "\nTest completed!\n";
