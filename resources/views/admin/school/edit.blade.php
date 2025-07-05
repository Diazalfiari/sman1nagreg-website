@extends('layouts.dashboard')

@section('title', 'Edit Profil Sekolah')

@section('content')
<div class="min-h-screen bg-gray-100">
    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="md:flex md:items-center md:justify-between mb-6">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                        Edit Profil Sekolah
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Kelola informasi dan profil sekolah
                    </p>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('admin.school.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Informasi Dasar -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Dasar</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi umum tentang sekolah</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div>
                                <label for="school_name" class="block text-sm font-medium text-gray-700">Nama Sekolah <span class="text-red-500">*</span></label>
                                <input type="text" name="school_name" id="school_name" value="{{ old('school_name', $profile->school_name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            </div>

                            <div>
                                <label for="nss" class="block text-sm font-medium text-gray-700">NSS</label>
                                <input type="text" name="nss" id="nss" value="{{ old('nss', $profile->nss) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="npsn" class="block text-sm font-medium text-gray-700">NPSN</label>
                                <input type="text" name="npsn" id="npsn" value="{{ old('npsn', $profile->npsn) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="school_address" class="block text-sm font-medium text-gray-700">Alamat Sekolah <span class="text-red-500">*</span></label>
                            <textarea name="school_address" id="school_address" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ old('school_address', $profile->school_address) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div>
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">Kode Pos</label>
                                <input type="text" name="postal_code" id="postal_code" value="{{ old('postal_code', $profile->postal_code) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" maxlength="10">
                            </div>

                            <div>
                                <label for="school_phone" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                                <input type="text" name="school_phone" id="school_phone" value="{{ old('school_phone', $profile->school_phone) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            </div>

                            <div>
                                <label for="school_email" class="block text-sm font-medium text-gray-700">Email Sekolah <span class="text-red-500">*</span></label>
                                <input type="email" name="school_email" id="school_email" value="{{ old('school_email', $profile->school_email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="school_status" class="block text-sm font-medium text-gray-700">Status Sekolah</label>
                                <select name="school_status" id="school_status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="">Pilih Status</option>
                                    <option value="Negeri" {{ old('school_status', $profile->school_status) == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                                    <option value="Swasta" {{ old('school_status', $profile->school_status) == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                                </select>
                            </div>

                            <div>
                                <label for="establishment_year" class="block text-sm font-medium text-gray-700">Tahun Pendirian</label>
                                <input type="number" name="establishment_year" id="establishment_year" value="{{ old('establishment_year', $profile->establishment_year) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" min="1900" max="2100">
                            </div>
                        </div>

                        <div>
                            <label for="organizing_institution" class="block text-sm font-medium text-gray-700">Organisasi Penyelenggara</label>
                            <input type="text" name="organizing_institution" id="organizing_institution" value="{{ old('organizing_institution', $profile->organizing_institution) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Surat Keputusan -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Surat Keputusan</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi surat keputusan pendirian dan penegerian</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="establishment_permit_number" class="block text-sm font-medium text-gray-700">Izin Pendirian Sekolah Nomor</label>
                                <input type="text" name="establishment_permit_number" id="establishment_permit_number" value="{{ old('establishment_permit_number', $profile->establishment_permit_number) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="nationalization_permit_number" class="block text-sm font-medium text-gray-700">Penegerian Nomor</label>
                                <input type="text" name="nationalization_permit_number" id="nationalization_permit_number" value="{{ old('nationalization_permit_number', $profile->nationalization_permit_number) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="establishment_official" class="block text-sm font-medium text-gray-700">Pejabat Penandatangan Izin Pendirian</label>
                                <input type="text" name="establishment_official" id="establishment_official" value="{{ old('establishment_official', $profile->establishment_official) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Pendidikan Kabupaten Bandung">
                            </div>

                            <div>
                                <label for="nationalization_official" class="block text-sm font-medium text-gray-700">Pejabat Penandatangan Penegerian</label>
                                <input type="text" name="nationalization_official" id="nationalization_official" value="{{ old('nationalization_official', $profile->nationalization_official) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Akreditasi -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Akreditasi Sekolah</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi akreditasi BAN-S/M</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="accreditation_grade" class="block text-sm font-medium text-gray-700">Predikat Akreditasi</label>
                                <select name="accreditation_grade" id="accreditation_grade" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="">Pilih Predikat</option>
                                    <option value="A" {{ old('accreditation_grade', $profile->accreditation_grade) == 'A' ? 'selected' : '' }}>A (Unggul)</option>
                                    <option value="B" {{ old('accreditation_grade', $profile->accreditation_grade) == 'B' ? 'selected' : '' }}>B (Baik)</option>
                                    <option value="C" {{ old('accreditation_grade', $profile->accreditation_grade) == 'C' ? 'selected' : '' }}>C (Cukup)</option>
                                </select>
                            </div>

                            <div>
                                <label for="accreditation_sk_number" class="block text-sm font-medium text-gray-700">SK BAN-S/M Propinsi No.</label>
                                <input type="text" name="accreditation_sk_number" id="accreditation_sk_number" value="{{ old('accreditation_sk_number', $profile->accreditation_sk_number) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="accreditation_date" class="block text-sm font-medium text-gray-700">Tanggal Akreditasi</label>
                                <input type="date" name="accreditation_date" id="accreditation_date" value="{{ old('accreditation_date', $profile->accreditation_date) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="accreditation_valid_until" class="block text-sm font-medium text-gray-700">Berlaku s.d Tanggal</label>
                                <input type="date" name="accreditation_valid_until" id="accreditation_valid_until" value="{{ old('accreditation_valid_until', $profile->accreditation_valid_until) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lokasi dan Bangunan -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Lokasi dan Bangunan</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi lokasi dan kepemilikan bangunan</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div>
                            <label for="building_ownership" class="block text-sm font-medium text-gray-700">Bangunan Sekolah</label>
                            <textarea name="building_ownership" id="building_ownership" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Status kepemilikan, luas tanah, luas bangunan, dll">{{ old('building_ownership', $profile->building_ownership) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div>
                                <label for="distance_from_subdistrict" class="block text-sm font-medium text-gray-700">Jarak dari Pusat Kecamatan</label>
                                <input type="text" name="distance_from_subdistrict" id="distance_from_subdistrict" value="{{ old('distance_from_subdistrict', $profile->distance_from_subdistrict) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: 5 km">
                            </div>

                            <div>
                                <label for="distance_from_district" class="block text-sm font-medium text-gray-700">Jarak dari Pusat Kota Kabupaten</label>
                                <input type="text" name="distance_from_district" id="distance_from_district" value="{{ old('distance_from_district', $profile->distance_from_district) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: 25 km">
                            </div>

                            <div>
                                <label for="located_on_route" class="block text-sm font-medium text-gray-700">Terletak pada Lintas</label>
                                <input type="text" name="located_on_route" id="located_on_route" value="{{ old('located_on_route', $profile->located_on_route) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: Jalan Provinsi, Jalan Kabupaten">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Kepala Sekolah -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Data Kepala Sekolah</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Informasi identitas kepala sekolah</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="principal_name" class="block text-sm font-medium text-gray-700">Nama Kepala Sekolah <span class="text-red-500">*</span></label>
                                <input type="text" name="principal_name" id="principal_name" value="{{ old('principal_name', $profile->principal_name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                            </div>

                            <div>
                                <label for="principal_nip" class="block text-sm font-medium text-gray-700">NIP</label>
                                <input type="text" name="principal_nip" id="principal_nip" value="{{ old('principal_nip', $profile->principal_nip) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="principal_rank" class="block text-sm font-medium text-gray-700">Pangkat/Golongan</label>
                                <input type="text" name="principal_rank" id="principal_rank" value="{{ old('principal_rank', $profile->principal_rank) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: Pembina Tk. I / IV.b">
                            </div>

                            <div>
                                <label for="principal_education" class="block text-sm font-medium text-gray-700">Pendidikan</label>
                                <input type="text" name="principal_education" id="principal_education" value="{{ old('principal_education', $profile->principal_education) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: S2 Manajemen Pendidikan">
                            </div>
                        </div>

                        <div>
                            <label for="principal_photo" class="block text-sm font-medium text-gray-700">Foto Kepala Sekolah</label>
                            @if($profile->principal_photo)
                                <div class="mt-2">
                                    <img src="{{ Storage::url($profile->principal_photo) }}" alt="Foto Kepala Sekolah" class="h-24 w-24 object-cover rounded">
                                    <p class="text-xs text-gray-500 mt-1">Foto saat ini</p>
                                </div>
                            @endif
                            <input type="file" name="principal_photo" id="principal_photo" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                        </div>
                    </div>
                </div>

                <!-- Visi & Misi -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Visi & Misi</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Visi dan misi sekolah</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div>
                            <label for="vision" class="block text-sm font-medium text-gray-700">Visi</label>
                            <textarea name="vision" id="vision" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ old('vision', $profile->vision) }}</textarea>
                        </div>

                        <div>
                            <label for="mission" class="block text-sm font-medium text-gray-700">Misi</label>
                            <textarea name="mission" id="mission" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>{{ old('mission', $profile->mission) }}</textarea>
                        </div>
                    </div>
                </div>



                <!-- Media -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Media</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Logo dan gambar sekolah</p>
                    </div>
                    <div class="px-4 py-5 sm:p-6 space-y-6">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <label for="school_logo" class="block text-sm font-medium text-gray-700">Logo Sekolah</label>
                                @if($profile->school_logo)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($profile->school_logo) }}" alt="Logo Sekolah" class="h-20 w-20 object-cover rounded">
                                        <p class="text-xs text-gray-500 mt-1">Logo saat ini</p>
                                    </div>
                                @endif
                                <input type="file" name="school_logo" id="school_logo" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                            </div>

                            <div>
                                <label for="school_image" class="block text-sm font-medium text-gray-700">Gambar Sekolah</label>
                                @if($profile->school_image)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($profile->school_image) }}" alt="Gambar Sekolah" class="h-20 w-32 object-cover rounded">
                                        <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                                    </div>
                                @endif
                                <input type="file" name="school_image" id="school_image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 4MB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex justify-end space-x-3">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
