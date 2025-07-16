# Chatbot Gemini AI Integration

## Perubahan yang Dilakukan

### 1. Perbaikan GeminiService (`app/Services/GeminiService.php`)

**Masalah yang Diperbaiki:**

-   Model Gemini API yang digunakan (`gemini-pro`) tidak valid untuk API v1beta
-   Kurangnya logging untuk debugging
-   Error handling yang tidak optimal

**Solusi yang Diimplementasikan:**

-   Mengganti model dari `gemini-pro` ke `gemini-1.5-flash`
-   Menambahkan logging komprehensif untuk debugging
-   Memperbaiki error handling
-   Menambahkan method `hasApiKey()` untuk verifikasi API key

**Kode yang Diperbaiki:**

```php
// URL API yang benar
$this->baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent';

// Logging untuk debugging
Log::info('GeminiService: API response received', [
    'status' => $response->status(),
    'successful' => $response->successful()
]);
```

### 2. Perbaikan Chatbot Component (`app/livewire/Chatbot.php`)

**Masalah yang Diperbaiki:**

-   Menggunakan method yang tidak ada (`getTestResponse`)
-   Tidak ada fallback response manual di dalam component

**Solusi yang Diimplementasikan:**

-   Menambahkan method `getManualFallbackResponse()` langsung di dalam component
-   Memperbaiki error handling yang lebih robust
-   Menambahkan logging untuk debugging

### 3. Konfigurasi API Key

**Status:**

-   API key sudah dikonfigurasi dengan benar di `config/services.php`
-   Environment variable `GEMINI_API_KEY` sudah tersedia di `.env`
-   API key berhasil diverifikasi dan dapat diakses

## Cara Kerja Sistem

### Dengan GEMINI_API_KEY

1. Chatbot menggunakan Google Gemini 1.5 Flash API
2. Respons lebih natural dan kontekstual
3. Dapat menjawab pertanyaan kompleks tentang sekolah
4. Prompt terstruktur dengan konteks SMAN 1 Nagreg

### Tanpa GEMINI_API_KEY (Fallback)

1. Sistem menggunakan rule-based responses
2. Mendeteksi kata kunci seperti "profil", "alamat", "jurusan"
3. Memberikan respons yang sudah diprogramkan
4. Tetap fungsional meskipun terbatas

## Testing

### Test Manual melalui Tinker

```bash
php artisan tinker
$service = app(App\Services\GeminiService::class);
echo "API Key present: " . ($service->hasApiKey() ? 'Yes' : 'No');
$response = $service->generateResponse('Apa itu SMAN 1 Nagreg?');
echo $response;
```

### Test Browser

1. Buka http://localhost:8000
2. Klik icon chatbot di pojok kanan bawah
3. Coba pertanyaan sederhana: "Apa itu SMAN 1 Nagreg?"
4. Coba pertanyaan kompleks: "Jelaskan program IPA dan prospek karirnya"

## Logging

Sistem sekarang mencatat aktivitas chatbot di `storage/logs/laravel.log`:

-   API key configuration status
-   Request/response dari Gemini API
-   Error handling dan fallback usage
-   Typing indicators dan UI states

## Keamanan

⚠️ **Perhatian**: API key yang saat ini tersimpan di `.env` sebaiknya:

1. Regenerate API key baru di Google Cloud Console
2. Gunakan environment variables terpisah untuk production
3. Pastikan `.env` tidak di-commit ke repository

## Model Gemini yang Digunakan

-   **Model**: `gemini-1.5-flash`
-   **Endpoint**: `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent`
-   **Konfigurasi**:
    -   Temperature: 0.7
    -   TopK: 40
    -   TopP: 0.95
    -   Max Output Tokens: 1024
    -   Timeout: 30 detik

## Hasil Testing

✅ **Berhasil**: Chatbot sekarang dapat menjawab pertanyaan kompleks menggunakan Gemini AI
✅ **Fallback**: Sistem tetap berfungsi jika API key tidak tersedia
✅ **Logging**: Debugging lebih mudah dengan logging komprehensif
✅ **UI**: Interface tetap responsif dengan typing indicators
