@extends('layouts.dashboard')

@section('title', 'Edit Berita')

@section('content')
@php
    use Illuminate\Support\Facades\Storage;
@endphp
<div class="min-h-screen bg-gray-100">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between mb-6">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Edit Berita
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Edit artikel berita "{{ $news->title }}"
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ route('admin.news.index') }}" class="ml-3 inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali ke Daftar
                    </a>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-white shadow rounded-lg">
                <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data" class="space-y-6 p-6">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            Judul Berita <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" required
                                   value="{{ old('title', $news->title) }}"
                                   class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('title') border-red-300 @enderror"
                                   placeholder="Masukkan judul berita">
                        </div>
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Excerpt -->
                    <div>
                        <label for="excerpt" class="block text-sm font-medium text-gray-700">
                            Ringkasan <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <textarea name="excerpt" id="excerpt" rows="3" required
                                      class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('excerpt') border-red-300 @enderror"
                                      placeholder="Masukkan ringkasan berita (maksimal 500 karakter)">{{ old('excerpt', $news->excerpt) }}</textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Ringkasan akan ditampilkan pada daftar berita</p>
                        @error('excerpt')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">
                            Konten Berita <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <textarea name="content" id="content" rows="12" required
                                      class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('content') border-red-300 @enderror"
                                      placeholder="Tulis konten berita lengkap di sini...">{{ old('content', $news->content) }}</textarea>
                        </div>
                        @error('content')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Image -->
                    @if($news->image)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Gambar Saat Ini</label>
                            <div class="mt-1">
                                <img src="{{ Storage::url($news->image) }}" alt="Current image" class="max-w-xs max-h-48 rounded-lg shadow-md">
                            </div>
                        </div>
                    @endif

                    <!-- Image Upload -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">
                            {{ $news->image ? 'Ganti Gambar' : 'Gambar Berita' }}
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                        <span>Upload gambar</span>
                                        <input id="image" name="image" type="file" class="sr-only" accept="image/*">
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 2MB</p>
                                @if($news->image)
                                    <p class="text-xs text-gray-500">Kosongkan jika tidak ingin mengganti gambar</p>
                                @endif
                            </div>
                        </div>
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">
                            Status Publikasi <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-1">
                            <select name="status" id="status" required
                                    class="shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm border-gray-300 rounded-md @error('status') border-red-300 @enderror">
                                <option value="draft" {{ old('status', $news->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status', $news->status) === 'published' ? 'selected' : '' }}>Publikasikan</option>
                            </select>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Draft hanya akan terlihat oleh admin, sedangkan status "Publikasikan" akan menampilkan berita ke publik</p>
                        @error('status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Publication Info -->
                    @if($news->published_at)
                        <div class="bg-green-50 border border-green-200 rounded-md p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">
                                        Berita ini dipublikasikan pada: {{ $news->published_at->format('d M Y H:i') }} WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.news.index') }}" 
                           class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Batal
                        </a>
                        @if($news->status === 'published')
                            <a href="{{ route('news.show', $news->slug) }}" target="_blank"
                               class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                Lihat Berita
                            </a>
                        @endif
                        <button type="submit" 
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update Berita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image preview functionality
    const imageInput = document.getElementById('image');
    const imagePreview = document.createElement('div');
    imagePreview.className = 'mt-4 hidden';
    imageInput.parentNode.parentNode.parentNode.appendChild(imagePreview);

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.innerHTML = `
                    <div class="text-sm font-medium text-gray-700 mb-2">Preview Gambar Baru:</div>
                    <img src="${e.target.result}" alt="Preview" class="max-w-xs max-h-48 rounded-lg shadow-md">
                `;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.classList.add('hidden');
        }
    });

    // Character counter for excerpt
    const excerptTextarea = document.getElementById('excerpt');
    const charCounter = document.createElement('div');
    charCounter.className = 'text-right text-sm text-gray-500 mt-1';
    excerptTextarea.parentNode.appendChild(charCounter);

    function updateCharCounter() {
        const currentLength = excerptTextarea.value.length;
        const maxLength = 500;
        charCounter.textContent = `${currentLength}/${maxLength} karakter`;
        
        if (currentLength > maxLength) {
            charCounter.classList.add('text-red-500');
            charCounter.classList.remove('text-gray-500');
        } else {
            charCounter.classList.add('text-gray-500');
            charCounter.classList.remove('text-red-500');
        }
    }

    excerptTextarea.addEventListener('input', updateCharCounter);
    updateCharCounter(); // Initial count
});
</script>
@endsection
