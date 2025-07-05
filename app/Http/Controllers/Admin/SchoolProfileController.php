<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SchoolProfileController extends Controller
{
    /**
     * Show the form for editing school profile
     */
    public function edit()
    {
        $profile = SchoolSetting::first();
        
        // Jika belum ada profile, buat yang default
        if (!$profile) {
            $profile = SchoolSetting::create([
                'school_name' => 'SMAN 1 Nagreg',
                'school_address' => '',
                'school_phone' => '',
                'school_email' => '',
                'principal_name' => '',
                'vision' => '',
                'mission' => '',
                'school_logo' => null,
                'school_image' => null,
            ]);
        }
        
        return view('admin.school.edit', compact('profile'));
    }

    /**
     * Update school profile
     */
    public function update(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'nss' => 'nullable|string|max:50',
            'npsn' => 'nullable|string|max:50',
            'school_address' => 'required|string',
            'postal_code' => 'nullable|string|max:10',
            'school_phone' => 'required|string|max:20',
            'school_email' => 'required|email|max:255',
            'school_status' => 'nullable|string|max:50',
            'establishment_permit_number' => 'nullable|string|max:255',
            'nationalization_permit_number' => 'nullable|string|max:255',
            'establishment_official' => 'nullable|string|max:255',
            'nationalization_official' => 'nullable|string|max:255',
            'establishment_year' => 'nullable|integer|min:1900|max:2100',
            'accreditation_grade' => 'nullable|string|max:10',
            'accreditation_sk_number' => 'nullable|string|max:255',
            'accreditation_date' => 'nullable|date',
            'accreditation_valid_until' => 'nullable|date',
            'building_ownership' => 'nullable|string',
            'distance_from_subdistrict' => 'nullable|string|max:100',
            'distance_from_district' => 'nullable|string|max:100',
            'located_on_route' => 'nullable|string|max:255',
            'organizing_institution' => 'nullable|string|max:255',
            'principal_name' => 'required|string|max:255',
            'principal_nip' => 'nullable|string|max:50',
            'principal_rank' => 'nullable|string|max:100',
            'principal_education' => 'nullable|string|max:100',
            'vision' => 'required|string',
            'mission' => 'required|string',
            'school_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'school_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'principal_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = SchoolSetting::first();
        
        if (!$profile) {
            $profile = new SchoolSetting();
        }

        // Handle logo upload
        if ($request->hasFile('school_logo')) {
            // Hapus logo lama jika ada
            if ($profile->school_logo) {
                Storage::disk('public')->delete($profile->school_logo);
            }
            
            $logoPath = $request->file('school_logo')->store('school/logos', 'public');
            $profile->school_logo = $logoPath;
        }

        // Handle image upload
        if ($request->hasFile('school_image')) {
            // Hapus gambar lama jika ada
            if ($profile->school_image) {
                Storage::disk('public')->delete($profile->school_image);
            }
            
            $imagePath = $request->file('school_image')->store('school/images', 'public');
            $profile->school_image = $imagePath;
        }

        // Handle principal photo upload
        if ($request->hasFile('principal_photo')) {
            // Hapus foto lama jika ada
            if ($profile->principal_photo) {
                Storage::disk('public')->delete($profile->principal_photo);
            }
            
            $photoPath = $request->file('principal_photo')->store('school/principals', 'public');
            $profile->principal_photo = $photoPath;
        }

        // Update data
        $profile->fill($request->except(['school_logo', 'school_image', 'principal_photo']));
        $profile->save();

        return redirect()->route('admin.school.edit')
                        ->with('success', 'Profil sekolah berhasil diperbarui!');
    }
}
