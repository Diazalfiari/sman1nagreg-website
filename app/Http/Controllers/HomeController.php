<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\SchoolProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = News::published()
            ->with('author')
            ->latest('published_at')
            ->take(6)
            ->get();

        $schoolProfile = SchoolProfile::byType('profile')
            ->active()
            ->first();

        return view('home', compact('latestNews', 'schoolProfile'));
    }
}