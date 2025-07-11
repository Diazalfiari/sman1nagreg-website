<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\SchoolProfile;
use App\Models\SchoolSetting;
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

         $profile = SchoolSetting::first();

        return view('home', compact('latestNews', 'profile'));
    }
}