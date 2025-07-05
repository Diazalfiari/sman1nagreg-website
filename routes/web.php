<?php

use App\Http\Controllers\{
    HomeController,
    ProfileController,
    AcademicController,
    StudentAffairsController,
    AdiwiyataController,
    SpmBController,
    LibraryController,
    NewsController,
    ContactController,
    DashboardController
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Health check route untuk Railway
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now(),
        'app' => config('app.name'),
        'database' => 'connected'
    ]);
})->name('health');

// Profile Routes
Route::prefix('profil')->name('profile.')->group(function () {
    Route::get('/sekolah', [ProfileController::class, 'schoolProfile'])->name('school');
    Route::get('/sejarah', [ProfileController::class, 'history'])->name('history');
    Route::get('/visi-misi', [ProfileController::class, 'visionMission'])->name('vision-mission');
    Route::get('/guru-dan-tenaga-kependidikan', [ProfileController::class, 'teachers'])->name('teachers');
});

// Academic Routes
Route::prefix('akademik')->name('academic.')->group(function () {
    Route::get('/agenda-kurikulum', [AcademicController::class, 'curriculumAgenda'])->name('curriculum-agenda');
    Route::get('/jadwal-pelajaran', [AcademicController::class, 'classSchedule'])->name('class-schedule');
    
    // External links
    Route::redirect('/info-kelulusan', 'https://e-lulus.sman1nagreg.sch.id/');
    Route::redirect('/cbt', 'https://texam.sman1nagreg.sch.id/');
});

// Student Affairs Routes
Route::prefix('kesiswaan')->name('student-affairs.')->group(function () {
    Route::get('/agenda', [StudentAffairsController::class, 'agenda'])->name('agenda');
    Route::get('/file', [StudentAffairsController::class, 'files'])->name('files');
    Route::get('/osis', [StudentAffairsController::class, 'osis'])->name('osis');
    Route::get('/ekstrakulikuler', [StudentAffairsController::class, 'extracurricular'])->name('extracurricular');
    Route::get('/peserta-didik', [StudentAffairsController::class, 'students'])->name('students');
    Route::get('/alumni', [StudentAffairsController::class, 'alumni'])->name('alumni');
});

// Adiwiyata Routes
Route::prefix('adiwiyata')->name('adiwiyata.')->group(function () {
    Route::get('/kebersihan-sanitasi', [AdiwiyataController::class, 'cleanliness'])->name('cleanliness');
    Route::get('/pengelolaan-sampah', [AdiwiyataController::class, 'wasteManagement'])->name('waste-management');
    Route::get('/penanaman-tanaman', [AdiwiyataController::class, 'planting'])->name('planting');
    Route::get('/konservasi-energi', [AdiwiyataController::class, 'energyConservation'])->name('energy-conservation');
    Route::get('/konservasi-air', [AdiwiyataController::class, 'waterConservation'])->name('water-conservation');
    Route::get('/inovasi-ramah-lingkungan', [AdiwiyataController::class, 'ecoInnovation'])->name('eco-innovation');
});

// SPMB Routes
Route::prefix('spmb')->name('spmb.')->group(function () {
    Route::get('/info', [SpmBController::class, 'info'])->name('info');
    
    // External links
    Route::redirect('/tahapan', 'https://spmb.jabarprov.go.id/tahapan-spmb');
    Route::redirect('/pendaftaran', 'https://disdik.jabarprov.go.id/');
    Route::redirect('/hasil-kelulusan', 'https://spmb.jabarprov.go.id/');
});

// Library Routes
Route::prefix('perpustakaan')->name('library.')->group(function () {
    Route::get('/galeri', [LibraryController::class, 'gallery'])->name('gallery');
    
    // External links
    Route::redirect('/slims', 'https://slims.sman1nagreg.sch.id/');
    Route::redirect('/sibi', 'https://buku.kemdikbud.go.id/');
    Route::redirect('/pustakawan', 'https://pustakawan.sman1nagreg.sch.id/');
});

// News Routes
Route::prefix('berita')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{slug}', [NewsController::class, 'show'])->name('show');
});

// Contact Route
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');

// Auth Routes
require __DIR__.'/auth.php';

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Admin only routes
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        // News management routes
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news', [NewsController::class, 'manage'])->name('news.index');
        Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
    
    // Teacher routes
    Route::middleware(['role:admin,guru'])->prefix('teacher')->name('teacher.')->group(function () {
        // Teacher routes will be added here
    });
    
    // Student routes  
    Route::middleware(['role:admin,guru,siswa'])->prefix('student')->name('student.')->group(function () {
        // Student routes will be added here
    });
});