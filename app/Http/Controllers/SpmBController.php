<?php

namespace App\Http\Controllers;

use App\Models\SpmBInfo;
use Illuminate\Http\Request;

class SpmBController extends Controller
{
    public function info()
    {
        $infos = SpmBInfo::active()
            ->latest()
            ->get();
            
        return view('spmb.info', compact('infos'));
    }
}