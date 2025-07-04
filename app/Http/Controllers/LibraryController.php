<?php

namespace App\Http\Controllers;

use App\Models\LibraryGallery;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function gallery()
    {
        $galleries = LibraryGallery::active()
            ->orderBy('order')
            ->get();
            
        return view('library.gallery', compact('galleries'));
    }
}