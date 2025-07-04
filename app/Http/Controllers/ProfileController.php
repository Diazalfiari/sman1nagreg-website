<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function schoolProfile()
    {
        $profile = SchoolProfile::byType('profile')->active()->first();
        return view('profile.school-profile', compact('profile'));
    }

    public function history()
    {
        $history = SchoolProfile::byType('sejarah')->active()->first();
        return view('profile.history', compact('history'));
    }

    public function visionMission()
    {
        $visionMission = SchoolProfile::byType('visi_misi')->active()->first();
        return view('profile.vision-mission', compact('visionMission'));
    }

    public function teachers()
    {
        $teachers = User::where('role', 'guru')
            ->where('is_active', true)
            ->orderBy('name')
            ->get();
            
        return view('profile.teachers', compact('teachers'));
    }
}