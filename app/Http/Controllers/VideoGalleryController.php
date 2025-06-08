<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        try {
            $query = VideoGallery::query();
            
            if ($request->has('user_id')) {
                $query->where('user_id', $request->user_id);
            }
            
            $videos = $query->latest()->get();
            
            return view('video-galleries.index', compact('videos'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error accessing video gallery: ' . $e->getMessage());
        }
    }

    public function create(Request $request)
    {
        $selectedUserId = $request->user_id;
        return view('video-galleries.create', compact('selectedUserId'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'link' => 'required|url',
                'user_id' => 'required|exists:users,id'
            ]);

            VideoGallery::create([
                'link' => $request->link,
                'user_id' => $request->user_id,
                'is_active' => true
            ]);

            return redirect()->route('video-galleries.index', ['user_id' => $request->user_id])
                ->with('success', 'Video added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding video: ' . $e->getMessage());
        }
    }

    public function show(VideoGallery $videoGallery)
    {
        return view('video-galleries.show', compact('videoGallery'));
    }

    public function edit(VideoGallery $videoGallery)
    {
        return view('video-galleries.edit', compact('videoGallery'));
    }

    public function update(Request $request, VideoGallery $videoGallery)
    {
        try {
            $request->validate([
                'link' => 'required|url'
            ]);

            $videoGallery->update([
                'link' => $request->link,
                'is_active' => $request->has('is_active')
            ]);

            return redirect()->route('video-galleries.index', ['user_id' => $videoGallery->user_id])
                ->with('success', 'Video updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating video: ' . $e->getMessage());
        }
    }

    public function destroy(VideoGallery $videoGallery)
    {
        try {
            $videoGallery->delete();
            return redirect()->back()->with('success', 'Video deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting video: ' . $e->getMessage());
        }
    }
} 