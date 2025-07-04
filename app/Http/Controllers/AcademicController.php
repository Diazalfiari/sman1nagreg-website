<?php

namespace App\Http\Controllers;

use App\Models\AcademicSchedule;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function curriculumAgenda()
    {
        $agendas = AcademicSchedule::byType('agenda_kurikulum')
            ->upcoming()
            ->orderBy('schedule_date')
            ->get();
            
        return view('academic.curriculum-agenda', compact('agendas'));
    }

    public function classSchedule()
    {
        $schedules = AcademicSchedule::byType('jadwal_pelajaran')
            ->orderBy('schedule_date')
            ->orderBy('start_time')
            ->get();
            
        return view('academic.class-schedule', compact('schedules'));
    }
}