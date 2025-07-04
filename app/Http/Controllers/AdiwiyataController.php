<?php

namespace App\Http\Controllers;

use App\Models\AdiwiyataProgram;
use Illuminate\Http\Request;

class AdiwiyataController extends Controller
{
    public function cleanliness()
    {
        $program = AdiwiyataProgram::byType('kebersihan_sanitasi')
            ->active()
            ->first();
            
        return view('environment.cleanliness', compact('program'));
    }

    public function wasteManagement()
    {
        $program = AdiwiyataProgram::byType('pengelolaan_sampah')
            ->active()
            ->first();
            
        return view('environment.waste-management', compact('program'));
    }

    public function planting()
    {
        $program = AdiwiyataProgram::byType('penanaman_tanaman')
            ->active()
            ->first();
            
        return view('environment.plant-cultivation', compact('program'));
    }

    public function energyConservation()
    {
        $program = AdiwiyataProgram::byType('konservasi_energi')
            ->active()
            ->first();
            
        return view('environment.energy-conservation', compact('program'));
    }

    public function waterConservation()
    {
        $program = AdiwiyataProgram::byType('konservasi_air')
            ->active()
            ->first();
            
        return view('environment.water-conservation', compact('program'));
    }

    public function ecoInnovation()
    {
        $program = AdiwiyataProgram::byType('inovasi_ramah_lingkungan')
            ->active()
            ->first();
            
        return view('environment.eco-innovation', compact('program'));
    }
}