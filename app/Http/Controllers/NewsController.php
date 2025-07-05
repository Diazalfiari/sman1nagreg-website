<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::published()
            ->with('author')
            ->latest('published_at')
            ->paginate(12);
            
        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $article = News::where('slug', $slug)
            ->published()
            ->with('author')
            ->firstOrFail();
            
        $relatedNews = News::published()
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(4)
            ->get();
            
        return view('news.show', compact('article', 'relatedNews'));
    }

    /**
     * Show form for creating news (Admin only)
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store new news (Admin only)
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        
        // Ensure unique slug
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'status' => $request->status,
            'author_id' => Auth::id(),
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news-images', 'public');
            $data['image'] = $path;
        }

        // Set published_at if status is published
        if ($request->status === 'published') {
            $data['published_at'] = now();
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dibuat!');
    }

    /**
     * Show all news for admin management
     */
    public function manage()
    {
        $news = News::with('author')
            ->latest()
            ->paginate(10);
            
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show form for editing news (Admin only)
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update news (Admin only)
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published'
        ]);

        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'status' => $request->status,
        ];

        // Handle slug update if title changed
        if ($request->title !== $news->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $counter = 1;
            
            while (News::where('slug', $slug)->where('id', '!=', $news->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $data['slug'] = $slug;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
            
            $path = $request->file('image')->store('news-images', 'public');
            $data['image'] = $path;
        }

        // Set published_at if status changed to published
        if ($request->status === 'published' && $news->status !== 'published') {
            $data['published_at'] = now();
        } elseif ($request->status === 'draft') {
            $data['published_at'] = null;
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Delete news (Admin only)
     */
    public function destroy(News $news)
    {
        // Delete image if exists
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }
        
        $news->delete();
        
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }
}