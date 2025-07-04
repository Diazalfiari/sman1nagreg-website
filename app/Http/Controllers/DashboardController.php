<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        switch ($user->role) {
            case 'admin':
                return $this->adminDashboard();
            case 'guru':
                return $this->teacherDashboard();
            case 'siswa':
                return $this->studentDashboard();
            default:
                abort(403);
        }
    }

    private function adminDashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'total_teachers' => User::where('role', 'guru')->count(),
            'total_students' => User::where('role', 'siswa')->count(),
            'total_news' => News::count(),
        ];

        $recentNews = News::latest()->take(5)->get();
        
        return view('dashboard.admin', compact('stats', 'recentNews'));
    }

    private function teacherDashboard()
    {
        $myNews = News::where('author_id', Auth::id())->latest()->take(5)->get();
        
        return view('dashboard.teacher', compact('myNews'));
    }

    private function studentDashboard()
    {
        $latestNews = News::published()->latest('published_at')->take(5)->get();
        
        return view('dashboard.student', compact('latestNews'));
    }
}