<?php

namespace App\Http\Controllers;

use App\Models\StudentActivity;
use App\Models\User;
use Illuminate\Http\Request;

class StudentAffairsController extends Controller
{
    public function agenda()
    {
        $agendas = StudentActivity::byType('agenda_kesiswaan')
            ->active()
            ->orderBy('event_date', 'desc')
            ->get();
            
        return view('student-affairs.agenda', compact('agendas'));
    }

    public function files()
    {
        $files = StudentActivity::byType('file_kesiswaan')
            ->active()
            ->latest()
            ->get();
            
        return view('student-affairs.files', compact('files'));
    }

    public function osis()
    {
        $osisInfo = StudentActivity::byType('osis')
            ->active()
            ->latest()
            ->get();
            
        return view('student-affairs.osis', compact('osisInfo'));
    }

    public function extracurricular()
    {
        $extracurriculars = StudentActivity::byType('ekstrakulikuler')
            ->active()
            ->orderBy('title')
            ->get();
            
        return view('student-affairs.extracurricular', compact('extracurriculars'));
    }

    public function students()
    {
        $students = User::where('role', 'siswa')
            ->where('is_active', true)
            ->orderBy('name')
            ->paginate(20);
            
        return view('student-affairs.students', compact('students'));
    }

    public function alumni()
    {
        $alumni = StudentActivity::byType('alumni')
            ->active()
            ->latest()
            ->get();
            
        return view('student-affairs.alumni', compact('alumni'));
    }
}