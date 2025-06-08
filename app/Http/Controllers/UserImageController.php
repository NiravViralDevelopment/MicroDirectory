<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = UserImage::with('user');
        
        if ($request->has('user_id')) {
            $query->where('user_id', $request->user_id);
        }
        
        $images = $query->latest()->get();
            dd("yed");
        return view('user-images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $selectedUserId = $request->query('user_id');
        return view('user-images.create', compact('selectedUserId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Store in storage/app/public/user-images
            $image->storeAs('public/user-images', $imageName);

            UserImage::create([
                'user_id' => $request->user_id,
                'image' => 'user-images/' . $imageName,
                'status' => $request->status ?? false
            ]);

            return redirect()->route('user-images.index')
                ->with('success', 'User image uploaded successfully.');
        }

        return back()->with('error', 'Failed to upload image.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserImage $userImage)
    {
        return view('user-images.show', compact('userImage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserImage $userImage)
    {
        $users = User::all();
        return view('user-images.edit', compact('userImage', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserImage $userImage)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($userImage->image) {
                Storage::delete('public/' . $userImage->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Store in storage/app/public/user-images
            $image->storeAs('public/user-images', $imageName);

            $userImage->update([
                'user_id' => $request->user_id,
                'image' => 'user-images/' . $imageName,
                'status' => $request->status ?? false
            ]);
        } else {
            $userImage->update([
                'user_id' => $request->user_id,
                'status' => $request->status ?? false
            ]);
        }

        return redirect()->route('user-images.index')
            ->with('success', 'User image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserImage $userImage)
    {
        if ($userImage->image) {
            Storage::delete('public/' . $userImage->image);
        }
        
        $userImage->delete();

        return redirect()->route('user-images.index')
            ->with('success', 'User image deleted successfully.');
    }
} 